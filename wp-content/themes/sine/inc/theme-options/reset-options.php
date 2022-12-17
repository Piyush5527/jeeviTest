<?php
/**
 * Resets all the value of customizer
 *
 * @since 1.0.0
 *
 * @package Sine WordPress Theme
 */

if( !function_exists( 'sine_get_setting_id' ) ):
	add_action( 
		Sine_Helper::fn_prefix( 'customize_register_start' ), 
		'sine_get_setting_id', 30, 2 );
	/**
	* Get all the setting id to reset the data.
	*
	* @return array
	* @since 1.0.0
	*
	* @package Sine WordPress theme
	*/
	function sine_get_setting_id( $instance, $wp_customize ) {
		
		Sine_Customizer::set(array(
			# Theme option
			'panel' => 'panel',
			# Theme Option > Reset options
			'section' => array(
			    'id'    => 'reset-section',
			    'title' => esc_html__( 'Reset Options' ,'sine' ),
			),
			'fields' => array(
				array(
				    'id' 	      => 'reset-options',
				    'type'        => 'sine-reset',
				    'settings'    => array_keys( $instance::$settings ),
				    'label'       => esc_html__( 'Reset', 'sine' ),
				    'description' => esc_html__( 'Reseting will delete all the data. Once reset, you will not be able to get back those data.', 'sine' ),
				),
			),
		) );
	}
endif;
