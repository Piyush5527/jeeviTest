<?php
if( !function_exists( 'sine_acb_custom_header_one' ) ):
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
	function sine_acb_custom_header_one( $control ){
		$value = $control->manager->get_setting( Sine_Helper::with_prefix( 'container-width' ) )->value();
		return 'default' == $value;
	}
endif;

/**
* Register Advanced Options
*
* @return void
* @since 1.0.0
*
* @package Sine WordPress theme
*/
function sine_advanced_options(){

	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'advance-options',
		    'title' => esc_html__( 'Advanced Options', 'sine' ),
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
				'id'	=> 'pre-loader',
				'label' => esc_html__( 'Show Preloader', 'sine' ),
				'default' => false,
				'type'  => 'sine-toggle',
			),
			array(
				'id'	=> 'enable-scroll-to-top',
				'label' => esc_html__( 'Show Scroll To Top', 'sine' ),
				'default' => true,
				'type'  => 'sine-toggle',
			),
			array(
			    'id'      =>  'container-width',
			    'label'   => esc_html__( 'Site Layout', 'sine' ),
			    'type'    => 'sine-buttonset',
			    'default' => 'default',
			    'choices' => array(
			        'default' => esc_html__( 'Default', 'sine' ),
			        'box'	  => esc_html__( 'Boxed', 'sine' ),
			    )
			),
		    array(
		        'id'          	  => 'container-custom-width',
		        'label'   	  	  => esc_html__( 'Container Width', 'sine' ),
		        'active_callback' => 'acb_custom_header_one',
		        'type'        	  => 'sine-range',
		        'default'     	  => '1140',
	    		'input_attrs' 	  =>  array(
	                'min'   => 400,
	                'max'   => 2000,
	                'step'  => 5,
	            ),
		    ),
		)
	));
}
add_action( 'init', 'sine_advanced_options' );