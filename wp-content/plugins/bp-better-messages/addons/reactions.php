<?php
defined( 'ABSPATH' ) || exit;

if ( !class_exists( 'Better_Messages_Reactions' ) ){

    class Better_Messages_Reactions
    {

        public static function instance()
        {

            static $instance = null;

            if (null === $instance) {
                $instance = new Better_Messages_Reactions();
            }

            return $instance;
        }

        public function __construct(){
            add_filter('bp_better_messages_script_variables', array( $this, 'add_reactions_to_js' ) );
            add_action( 'bp_better_messages_message_content_end', array( $this, 'render_icons_in_message' ), 10, 2 );
            add_action( 'rest_api_init',  array( $this, 'rest_api_init' ) );

            add_filter( 'better_messages_rest_message_meta', array( $this, 'reactions_message_meta'), 10, 4 );
        }

        public function rest_api_init(){
            register_rest_route('better-messages/v1', '/reactions/save', array(
                'methods' => 'POST',
                'callback' => array( $this, 'save_reaction' ),
                'permission_callback' => array(Better_Messages_Rest_Api(), 'is_user_authorized')
            ));
        }

        public function reactions_message_meta( $meta, $message_id, $thread_id, $content ){
            $reactions = $this->get_reactions();

            $message_reactions = $this->get_message_reactions( $message_id );

            if( empty( $message_reactions ) ) return $meta;

            $result_reactions = [];
            foreach( $message_reactions as $user_id => $reaction ){
                if( ! isset($reactions[$reaction]) ) {
                    continue;
                }

                if( ! isset( $result_reactions[ $reaction ] ) ){
                    $result_reactions[ $reaction ] = 0;
                }

                $result_reactions[ $reaction ]++;
            }

            if( count( $result_reactions ) === 0 ) return $meta;

            $_result_reactions = [];

            foreach( $result_reactions as $reaction => $count ){
                $_result_reactions[] = [
                    'reaction' => $reaction,
                    'count'    => (int) $count
                ];
            }

            $meta['reactions'] = $_result_reactions;

            return $meta;
        }

        public function save_reaction( WP_REST_Request $request ){
            global $wpdb;
            $user_id             = get_current_user_id();
            $emoji               = sanitize_text_field( $request->get_param('emoji') );
            $available_reactions = $this->get_reactions();


            if( ! isset( $available_reactions[ $emoji ] ) ){
                return new WP_Error(
                    'rest_forbidden',
                    _x( 'No such reaction available', 'Reactions', 'bp-better-messages' ),
                    array( 'status' => rest_authorization_required_code() )
                );
            }

            $message_id = intval( $request->get_param('message_id') );

            $message   = $wpdb->get_row($wpdb->prepare( "SELECT * FROM " . bm_get_table('messages') . " WHERE `id` = %d", $message_id ));

            if( ! $message ) {
                return new WP_Error(
                    'rest_forbidden',
                    __( 'Message not found', 'bp-better-messages' ),
                    array( 'status' => rest_authorization_required_code() )
                );
            }

            $sender_id = intval( $message->sender_id );
            $thread_id = intval( $message->thread_id );

            if( $sender_id === $user_id ){
                return new WP_Error(
                    'rest_forbidden',
                    _x( 'You can only put reactions to other members messages', 'Reactions', 'bp-better-messages' ),
                    array( 'status' => rest_authorization_required_code() )
                );
            }

            if( ! Better_Messages()->functions->check_access( $thread_id ) ){
                return new WP_Error(
                    'rest_forbidden',
                    _x( 'Sorry, you have no access to this conversation', 'Rest API Error', 'bp-better-messages' ),
                    array( 'status' => rest_authorization_required_code() )
                );
            }

            $reactions = $this->get_message_reactions( $message_id );

            if( isset( $reactions[ $user_id ] ) && $reactions[ $user_id ] === $emoji ){
                unset( $reactions[$user_id] );
            } else {
                $reactions[$user_id] = $emoji;
            }

            Better_Messages()->functions->update_message_meta( $message_id, 'bm_reactions', $reactions );
            Better_Messages()->functions->update_message_update_time( $message_id );

            do_action('better_messages_message_meta_updated', $thread_id, $message_id, 'bm_reactions', $reactions );

            return Better_Messages_Rest_Api()->get_messages( $thread_id, [ $message_id ] );
        }

        public function render_icons_in_message( $message_id, $thread_id ){
            $reactions = $this->get_reactions();
            $message_reactions = $this->get_message_reactions( $message_id );

            if( empty( $message_reactions ) ) return;

            $result_reactions = [];
            foreach( $message_reactions as $user_id => $reaction ){
                if( ! isset($reactions[$reaction]) ) {
                    continue;
                }

                if( ! isset( $result_reactions[ $reaction ] ) ){
                    $result_reactions[ $reaction ] = 0;
                }

                $result_reactions[ $reaction ]++;
            }

            if( empty( $result_reactions ) ) return;

            echo '<span class="bm-reactions">';
            foreach( $result_reactions as $unicode => $count ){
                echo '<span class="bm-reaction">';
                    echo '<img class="emojione" alt="" src="https://cdn.bpbettermessages.com/emojies/6.6/png/unicode/32/' . $unicode . '.png">';
                    echo '<span class="bm-reaction-count">' . $count . '</span>';
                echo '</span>';
            }
            echo '</span>';
        }

        public static function get_default_reactions(){
            return [
                '1f914' => _x('Thinking', 'Reaction name', 'bp-better-messages'),
                '2b50'  => _x('Star', 'Reaction name', 'bp-better-messages'),
                '1f632' => _x('WOW', 'Reaction name', 'bp-better-messages'),
                '1f60d' => _x('Love', 'Reaction name', 'bp-better-messages'),
                '1f44c' => _x('Okay', 'Reaction name', 'bp-better-messages'),
                '1f44d' => _x('Thumbs up', 'Reaction name', 'bp-better-messages'),
            ];
        }

        public function get_reactions(){
            $reactions = Better_Messages()->settings['reactionsEmojies'];
            return apply_filters( 'bp_better_messages_reactions_list', $reactions );
        }

        public function add_reactions_to_js( $variables ){
            $variables['reactions'] = $this->get_reactions();
            return $variables;
        }

        public function get_message_reactions( $message_id ){
            $reactions = Better_Messages()->functions->get_message_meta( $message_id, 'bm_reactions', true );

            if( empty( $reactions ) || ! is_array( $reactions ) ){
                $reactions = [];
            }

            return $reactions;
        }
    }
}

