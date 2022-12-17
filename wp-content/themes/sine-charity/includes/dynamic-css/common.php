<?php
  /**
  * Register dynamic css
  *
  * @since 1.0
  *
  * @package Sine Charity
  */
function sine_charity_common_css(){
 	$style = array(
 		array(
			'selector' => '.sine-bottom-header-wrapper.header-3 .site-branding:after',
			'props' => array(
				'background-color' => 'primary-color'
			)
		),
 		array(
			'selector' => '.sine-contact-info-inner-wrapper > i',
			'props' => array(
				'color' => 'primary-color'
			)
		),
 	);
 	Sine_Css::add_styles( $style, 'md' );
 }
 add_action( 'init', 'sine_charity_common_css' );