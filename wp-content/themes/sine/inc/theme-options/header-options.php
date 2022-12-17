<?php

if( !function_exists( 'sine_acb_header_layout' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Sine WordPress theme
	*/
	function sine_acb_header_layout( $control ){
		$value = $control->manager->get_setting( Sine_Helper::with_prefix( 'header-layout' ) )->value();
		return 'two' == $value;
	}
endif;
/**
 * Header Options
 *
 * @since 1.0.0
 *
 * @package Sine WordPress Theme
 */

function sine_header_options(){
	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'header-options',
		    'title' => esc_html__( 'Header Options', 'sine' ),
		    'priority' => 5
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
			    'id'      =>  'header-layout',
			    'label'   => esc_html__( 'Header Layout', 'sine' ),
			    'type'    => 'sine-buttonset',
			    'default' => 'one',
			    'choices' => array(
			        'one' => esc_html__( 'Layout One', 'sine' ),
			        'two' => esc_html__( 'Layout Two', 'sine' ),
			    )
			),
			array(
				'id'	=> 'header-location',
				'label' => esc_html__( 'Location', 'sine' ),
				'default' => esc_html( '112 W 34th St, New York' ),
				'active_callback' => 'acb_header_layout',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-phone',
				'label' => esc_html__( 'Phone Number', 'sine' ),
				'default' => esc_html( ' +123455678' ),
				'active_callback' => 'acb_header_layout',
				'type'  => 'text',
			),
			array(
				'id'	=> 'header-email',
				'label' => esc_html__( 'Email', 'sine' ),
				'default' => esc_html( 'info@yourdomain.com' ),
				'active_callback' => 'acb_header_layout',
				'type'  => 'email',
			),
			array(
				'id' => 'label_primary_btn',
				'label' => esc_html__( 'Primary Button', 'sine' ),
				'default' => esc_html__( 'Contact Us', 'sine' ),
				'active_callback' => 'acb_header_layout',
				'type'  => 'text',
			),
			array(
				'id' => 'url_primary_btn',
				'label' => esc_html__( 'Primary Button URL', 'sine' ),
				'default' => '#',
				'active_callback' => 'acb_header_layout',
				'type'  => 'url',
			),
			array(
				'id' => 'label_secondary_btn',
				'label' => esc_html__( 'Secondary Button', 'sine' ),
				'default' => esc_html__( 'Register', 'sine' ),
				'active_callback' => 'acb_header_layout',
				'type'  => 'text',
			),
			array(
				'id' => 'url_secondary_btn',
				'label' => esc_html__( 'Secondary Button URL', 'sine' ),
				'default' => '#',
				'active_callback' => 'acb_header_layout',
				'type'  => 'url',
			),
		)
	));
}
add_action( 'init', 'sine_header_options' );
