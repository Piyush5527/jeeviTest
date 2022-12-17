<?php
/**
 * Inner banner options in customizer
 *
 * @return void
 * @since 1.0.0
 *
 * @package Sine WordPress Theme
 */

function sine_inner_banner_options(){ 
	Sine_Customizer::set(array(
		# Theme Option > color options
		'section' => array(
		    'id'       => 'header_image',
		    'priority' => 27,
		    'prefix' => false,
		),
		'fields'  => array(
			array(
				'id'      	  => 'ib-blog-title',
				'label'   	  => esc_html__( 'Title' , 'sine' ),
				'description' => esc_html__( 'It is displayed when home page is latest posts.' , 'sine' ),
				'default' 	  => esc_html__( 'Latest Blog' , 'sine' ),
				'type'	  	  => 'text',
				'priority'    => 10,
			),
		    array(
		        'id'	  	  => 'ib-title-size',
		        'label'   	  => esc_html__( 'Font Size', 'sine' ),
		        'description' => esc_html__( 'The value is in px. Defaults to 40px.' , 'sine' ),
		        'default' => array(
		    		'desktop' => 40,
		    		'tablet'  => 32,
		    		'mobile'  => 32,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type' => 'sine-slider',
		        'priority' => 20
		    ),
		    array(
		        'id'      => 'ib-title-color',
		        'label'   => esc_html__( 'Text Color' , 'sine' ),
		        'type'    => 'sine-color-picker',
		        'default' => '#ffffff',
		        'priority' => 30
		    ),
		    array(
		    	'id' 	   => 'ib-background-color',
		    	'label'    => esc_html__( 'Overlay Color', 'sine' ),
		    	'default'  => 'rgba(0, 0, 0, 0.49)',
		    	'type' 	   => 'sine-color-picker',
		    	'priority' => 40,
		    ),
		    array(
		        'id'      => 'ib-text-align',
		        'label'   => esc_html__( 'Alignment' , 'sine' ),
		        'type'    => 'sine-buttonset',
		        'default' => 'banner-content-center',
		        'choices' => array(
		        	'banner-content-left'   => esc_html__( 'Left' , 'sine'   ),
		        	'banner-content-center' => esc_html__( 'Center' , 'sine' ),
		        	'banner-content-right'  => esc_html__( 'Right' , 'sine'  ),
		         ),
		        'priority' => 50
		    ),
			array(
			    'id'      => 'ib-image-attachment', 
			    'label'   => esc_html__( 'Image Attachment' , 'sine' ),
			    'type'    => 'sine-buttonset',
			    'default' => 'banner-background-scroll',
			    'choices' => array(
			    	'banner-background-scroll'           => esc_html__( 'Scroll' , 'sine' ),
			    	'banner-background-attachment-fixed' => esc_html__( 'Fixed' , 'sine' ),
			    ),
		        'priority' => 60
			),
			array(
			    'id'      	=> 'ib-height',
			    'label'   	=> esc_html__( 'Height (px)', 'sine' ),
			    'type'    	=> 'sine-slider',
	            'description' => esc_html__( 'The value is in px. Defaults to 420px.' , 'sine' ),
	            'default' => array(
	        		'desktop' => 300,
	        		'tablet'  => 300,
	        		'mobile'  => 300,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 1000,
	                'step'  => 1,
	            ),
			),
		    'priority' => 70
		),
	) );
}
add_action( 'init', 'sine_inner_banner_options' );