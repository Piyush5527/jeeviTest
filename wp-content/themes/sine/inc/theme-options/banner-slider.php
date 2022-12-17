<?php

if( !function_exists( 'sine_acb_type_cat' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Sine WordPress Theme
	*/
	function sine_acb_type_cat( $control ){
		$enable = $control->manager->get_setting( Sine_Helper::with_prefix( 'show-slider' ) )->value();
		$cat = $control->manager->get_setting( Sine_Helper::with_prefix( 'slider-type' ) )->value();
		$val = $enable && 'category' == $cat;
		return $val;
	}
endif;

if( !function_exists( 'sine_acb_slider' ) ):
	/**
	* Active callback function of slider
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Sine WordPress Theme
	*/
	function sine_acb_slider( $control ){
		$val = $control->manager->get_setting( Sine_Helper::with_prefix( 'show-slider' ) )->value();
		return $val;
	}
endif;

/**
* Banner Slider Options
*
* @return void
* @since 1.0.0
*
* @package Sine WordPress Theme
*/
function sine_slider_options(){

	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'slider',
		    'title' => esc_html__( 'Home Page Slider', 'sine' ),
		    'priority' => 1
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
			    'id'	  => 'show-slider',
			    'label'   => esc_html__( 'Enable Slider', 'sine' ),
			    'default' => true,
			    'type'    => 'sine-toggle',
			),
			array(
				'id' => 'slider-more-text',
				'label' => esc_html__( 'Read More Text', 'sine' ),
				'default' => esc_html__( 'Read More', 'sine' ),
				'active_callback' => 'acb_slider',
				'type' => 'text'
			),
			array(
			    'id'      => 'slider-type',
			    'label'   => esc_html__( 'Get Content From', 'sine' ),
			    'type'    => 'sine-buttonset',
			    'default' => 'category',
			    'active_callback' => 'acb_slider',
			    'choices' => array(
			        'post' => esc_html__( 'Recent Post', 'sine' ),
			        'category'  => esc_html__( 'Category', 'sine' ),
			    )
			),
			array(
				'id' => 'cat-post',
				'label' => esc_html__( 'Select Category', 'sine' ),
				'default' => 0,
				'type' => 'sine-category-dropdown',
				'active_callback' => 'acb_type_cat'
			)
		)
	));
}
add_action( 'init', 'sine_slider_options' );