<?php
/**
* Register sidebar Options
*
* @return void
* @since 1.0.0
*
* @package Sine WordPress theme
*/
function sine_sidebar_options(){
	Sine_Customizer::set(array(
		# Theme Options
		'panel'   => 'panel',
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'sidebar-options',
			'title'  => esc_html__( 'Sidebar Options','sine' ),
		),
		'fields' => array(
			# sb - Sidebar
			array(
			    'id'      => 'sidebar-position',
			    'label'   => esc_html__( 'Sidebar Position' , 'sine' ),
			    'type'    => 'sine-buttonset',
			    'default' => 'no-sidebar',
			    'choices' => array(
			        'left-sidebar'  => esc_html__( 'Left' , 'sine' ),
			        'right-sidebar' => esc_html__( 'Right' , 'sine' ),
			        'no-sidebar'    => esc_html__( 'None', 'sine' ),
			     )
			),
		),
	) );
}
add_action( 'init', 'sine_sidebar_options' );