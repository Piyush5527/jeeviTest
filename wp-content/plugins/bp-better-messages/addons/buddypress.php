<?php

defined( 'ABSPATH' ) || exit;

if ( !class_exists( 'Better_Messages_BuddyPress' ) ) {

    class Better_Messages_BuddyPress
    {

        public static function instance()
        {

            static $instance = null;

            if (null === $instance) {
                $instance = new Better_Messages_BuddyPress();
            }

            return $instance;
        }

        public function __construct()
        {
            if( function_exists('friends_check_friendship') ) {
                add_filter( 'better_messages_friends_active', array($this, 'enabled') );
                add_filter( 'better_messages_get_friends', array($this, 'get_friends'), 10, 2 );

                if( Better_Messages()->settings['friendsMode'] === '1' ){
                    add_filter( 'better_messages_only_friends_mode', array($this, 'enabled') );
                }
            }

            if( bp_is_active( 'groups' ) && Better_Messages()->settings['enableGroups'] === '1' ){
                add_filter( 'better_messages_groups_active', array($this, 'enabled') );
                add_filter( 'better_messages_get_groups', array($this, 'get_groups'), 10, 2 );
            }

            if( class_exists('BP_Verified_Member') ) {
                add_filter('better_messages_is_verified', array( $this, 'bp_verified_member' ), 10, 2 );
            }

            add_filter('better_messages_search_friends', array( $this, 'search_friends'), 10, 3 );
        }

        public function search_friends( $result, $search, $user_id  ){
            if( function_exists('friends_get_friend_user_ids') ) {

                $friends = bp_core_get_suggestions(array(
                    'limit' => 10,
                    'only_friends' => true,
                    'term' => $search,
                    'type' => 'members',
                    'exclude' => [ $user_id ]
                ));

                if( count( $friends ) > 0 ) {
                    foreach ( $friends as $friend ){
                        $result[] = intval($friend->user_id);
                    }
                }
            }

            return $result;
        }

        public function bp_verified_member( $is_verified, $user_id ){
            global $bp_verified_member;
            return $bp_verified_member->is_user_verified( $user_id );
        }

        public function enabled( $val ){
            return '1';
        }

        public function get_friends( $friends, $user_id ){
            $args = [
                'is_confirmed' => 1
            ];

            $friends = BP_Friends_Friendship::get_friendships( $user_id, $args );

            $users = [];
            if( count( $friends ) > 0 ) {
                foreach ($friends as $friend) {
                    $users[] = Better_Messages()->functions->rest_user_item( ( $friend->friend_user_id == $user_id ) ? $friend->initiator_user_id : $friend->friend_user_id  );
                }
            }

            return $users;
        }

        public function get_groups( $groups, $user_id ){
            $_groups = groups_get_user_groups( $user_id );

            if( count( $_groups['groups'] ) > 0 ) {
                foreach ($_groups['groups'] as $group_id) {
                    $group = new BP_Groups_Group((int)$group_id);
                    if ($group->id === 0) continue;

                    $group_id         = (int) $group->id;
                    $messages_enabled = (int) ( Better_Messages()->groups->is_group_messages_enabled( $group_id ) === 'enabled' );
                    $thread_id        = (int) Better_Messages()->groups->get_group_thread_id( $group->id );

                    $avatar = bp_core_fetch_avatar( array(
                        'item_id'    => $group_id,
                        'avatar_dir' => 'group-avatars',
                        'object'     => 'group',
                        'type'       => 'thumb',
                        'html'       => false
                    ));

                    $group_item = [
                        'id'        => $group_id,
                        'name'      => esc_attr($group->name),
                        'messages'  => $messages_enabled,
                        'thread_id' => $thread_id,
                        'image'     => $avatar,
                        'url'       => bp_get_group_permalink( $group )
                    ];

                    $groups[] = $group_item;
                }
            }

            return $groups;
        }
    }
}

