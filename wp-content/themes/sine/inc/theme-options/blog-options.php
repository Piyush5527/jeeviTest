<?php
/**
* Register blog Options
*
* @return void
* @since 1.0.0
*
* @package Sine WordPress theme
*/
function sine_blog_options(){	
	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'blog-section',
		    'title'    => esc_html__( 'Blog Options' ,'sine' ),
		    'priority' => 25
		),
		'fields'  => array(
			array(
				'id'	=> 'meta-sections-order',
				'label' => esc_html__( 'Archive Meta Order', 'sine' ),
				'description' => esc_html__( 'Please make sure that you have enabled all sections under "Post Options"', 'sine' ),
				'type'  => 'sine-section-order',
				'default' =>json_encode(array(
					'title', 'date', 'category', 'excerpt', 'comment'
				)),
				'choices' => array(
					'title' => esc_html__( 'Title', 'sine' ),
					'date' => esc_html__( 'Date', 'sine' ),
					'category' => esc_html( 'Category', 'sine' ),
					'excerpt' => esc_html__( 'Excerpt', 'sine' ),
					'comment' => esc_html__( 'Comment', 'sine' )
				),
				'transport'   => 'refresh'
			),
		),			
	));
}
add_action( 'init', 'sine_blog_options' );
