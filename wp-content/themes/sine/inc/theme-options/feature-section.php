<?php

if( !function_exists( 'sine_acb_enable_featured' ) ):
	/**
	* Active callback function of featurd section
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Sine WordPress Theme
	*/
	function sine_acb_enable_featured( $control ){
		$enable = $control->manager->get_setting( Sine_Helper::with_prefix( 'show-featured-section' ) )->value();
		return $enable;
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
function sine_featured_options(){
	$args = array( 'post_type' => 'page', 'posts_per_page' => -1 ); 
	$pages = get_posts( $args ); 
	$select_pages = array( esc_html__( 'Select Page', 'sine' ) ); 

	if( $pages && is_array( $pages ) ){
		foreach( $pages as $p ) { 
		  $select_pages[ $p->ID ] = $p->post_title; 
		} 
	}

	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'feature-section',
		    'title' => esc_html__( 'Featured Section', 'sine' ),
		    'priority' => 2
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
			    'id'	  => 'show-featured-section',
			    'label'   => esc_html__( 'Enable Featured Section', 'sine' ),
			    'default' => true,
			    'type'    => 'sine-toggle',
			),
			array(
				'id' => 'featured-section-title',
				'label' => esc_html__( 'Section Title', 'sine' ),
				'default' => 0,
				'type' => 'select',
				'choices' => $select_pages,
				'description' => esc_html__( 'Please select page for section title and desctiption', 'sine' )
			),
			array(
			  'id'    => 'feature-repeater',
			  'label' => esc_html__( 'Select Page', 'sine' ),
			  'active_callback' => 'acb_enable_featured',
			  'description' => esc_html__( 'Add font awesome icon class. For example "fa-address-book"', 'sine' ),
			  'type'  => 'sine-repeater',
			  'limit' => 4,
			  'repeat' => array(
			    'page' => array(
			        'label' => esc_html__( 'Page', 'sine' ),
			    ),
			    'text' => array(
			        'label' => esc_html__( 'Icon', 'sine' ),
			    )
			  ),
			)
		)
	));
}
add_action( 'init', 'sine_featured_options' );