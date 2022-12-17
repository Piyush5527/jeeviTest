<?php

if( !function_exists( 'sine_child_acb_header_layout' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0
	*
	* @package Sine WordPress theme
	*/
	function sine_child_acb_header_layout_2( $control ){
		$value = $control->manager->get_setting( Sine_Helper::with_prefix( 'child-header-layout' ) )->value();
		return 'two' == $value;
	}
endif;

if( !function_exists( 'sine_child_acb_header_layout_2_and_3' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0
	*
	* @package Sine WordPress theme
	*/
	function sine_child_acb_header_layout_2_and_3( $control ){
		$value = $control->manager->get_setting( Sine_Helper::with_prefix( 'child-header-layout' ) )->value();
		return 'two' == $value || 'three' == $value;
	}
endif;

if( !function_exists( 'sine_child_acb_header_layout_3' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0
	*
	* @package Sine WordPress theme
	*/
	function sine_child_acb_header_layout_3( $control ){
		$value = $control->manager->get_setting( Sine_Helper::with_prefix( 'child-header-layout' ) )->value();
		return 'three' == $value;
	}
endif;
/**
 * Header Options
 *
 * @since 1.0
 *
 * @package Sine WordPress Theme
 */

function sine_child_header_options(){
	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'header-options',
		    'title' => esc_html__( 'Header Options', 'sine-charity' ),
		    'priority' => 0
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
			    'id'      =>  'child-header-layout',
			    'label'   => esc_html__( 'Header Layout', 'sine-charity' ),
			    'type'    => 'select',
			    'default' => 'three',
			    'choices' => array(
			        'one' => esc_html__( 'Layout One', 'sine-charity' ),
			        'two' => esc_html__( 'Layout Two', 'sine-charity' ),
			        'three' => esc_html__( 'Layout Three', 'sine-charity' )
			    )
			),
			array(
				'id'	=> 'header-location',
				'label' => esc_html__( 'Location', 'sine-charity' ),
				'default' => esc_html( '112 W 34th St, New York' ),
				'active_callback' => 'child_acb_header_layout_2_and_3',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-location-text',
				'label' => esc_html__( 'Location Text', 'sine-charity' ),
				'default' => esc_html__( 'Address','sine-charity' ),
				'active_callback' => 'child_acb_header_layout_3',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-phone',
				'label' => esc_html__( 'Phone Number', 'sine-charity' ),
				'default' => esc_html( ' +123455678' ),
				'active_callback' => 'child_acb_header_layout_2_and_3',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-phone-text',
				'label' => esc_html__( 'Contact Text', 'sine-charity' ),
				'default' => esc_html__( 'Call For Help','sine-charity' ),
				'active_callback' => 'child_acb_header_layout_3',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-email',
				'label' => esc_html__( 'Email', 'sine-charity' ),
				'default' => esc_html( 'info@yourdomain.com' ),
				'active_callback' => 'child_acb_header_layout_2_and_3',
				'type'  => 'email',
			),
			array(
				'id'	=> 'header-email-text',
				'label' => esc_html__( 'Email Text', 'sine-charity' ),
				'default' => esc_html__( 'Mail To Us','sine-charity' ),
				'active_callback' => 'child_acb_header_layout_3',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-fixed-social-menu',
				'label' => esc_html__( 'Fixed Social Menu', 'sine-charity' ),
				'default' => false,
				'description' => esc_html__( 'Please create menu and assign as header menu.', 'sine-charity' ),
				'active_callback' => 'child_acb_header_layout_3',
				'type'  => 'sine-toggle',
			),
			array(
				'id' => 'label_primary_btn',
				'label' => esc_html__( 'Primary Button', 'sine-charity' ),
				'default' => esc_html__( 'Contact Us', 'sine-charity' ),
				'active_callback' => 'child_acb_header_layout_2',
				'type'  => 'text',
			),
			array(
				'id' => 'url_primary_btn',
				'label' => esc_html__( 'Primary Button URL', 'sine-charity' ),
				'default' => '#',
				'active_callback' => 'child_acb_header_layout_2',
				'type'  => 'url',
			),
			array(
				'id' => 'label_secondary_btn',
				'label' => esc_html__( 'Secondary Button', 'sine-charity' ),
				'default' => esc_html__( 'Register', 'sine-charity' ),
				'active_callback' => 'child_acb_header_layout_2',
				'type'  => 'text',
			),
			array(
				'id' => 'url_secondary_btn',
				'label' => esc_html__( 'Secondary Button URL', 'sine-charity' ),
				'default' => '#',
				'active_callback' => 'child_acb_header_layout_2',
				'type'  => 'url',
			)
		)
	));
}
add_action( 'init', 'sine_child_header_options' );
