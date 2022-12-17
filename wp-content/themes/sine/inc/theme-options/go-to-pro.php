<?php 
/**
* Register Go to pro button
*
* @since 1.0.1
*
* @package Sine WordPress Theme
*/
function sine_go_to_pro(){
	Sine_Customizer::set(array(
		'section' => array(
			'id'       => 'go-to-pro', 
			'type'     => 'sine-anchor',
			'title'    => esc_html__( 'Sine Pro', 'sine' ),
			'url'      => esc_url( 'https://risethemes.com/product-downloads/sine-pro/' ),
			'priority' => 0
		)
	));
}
add_action( 'init', 'sine_go_to_pro' );