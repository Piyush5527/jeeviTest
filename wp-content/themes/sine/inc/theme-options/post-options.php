<?php
/**
 * Create options for posts.
 *
 * @since 1.0.0
 *
 * @package Sine WordPress theme
 */

function sine_post_options(){  
    Sine_Customizer::set(array(
    	# Theme Options
    	'panel'   => 'panel',
    	# Theme Options > Page Options > Settings
    	'section' => array(
    		'id'    => 'post-options',
    		'title' => esc_html__( 'Post Options','sine' ),
    	),
    	'fields' => array(
            array(
                'id'      => 'post-category',
                'label'   =>  esc_html__( 'Show Categories', 'sine' ),
                'default' => 1,
                'type'    => 'sine-toggle',
            ),
            array(
                'id'      => 'post-date',
                'label'   => esc_html__( 'Show Date', 'sine' ),
                'default' => 1,
                'type'    => 'sine-toggle',
            ),
            array(
                'id'      => 'post-author',
                'label'   =>  esc_html__( 'Show Author', 'sine' ),
                'default' => 1,
                'type'    => 'sine-toggle',
            ),
            array(
                'id'      => 'excerpt_length',
                'label'   => esc_html__( 'Excerpt Length', 'sine' ),
                'description' => esc_html__( 'Defaults to 10.', 'sine' ),
                'default' => 10,
                'type'    => 'number',
            ),
            array(
                'id'      => 'read-more-text',
                'label'   => esc_html__( 'Read More Text', 'sine' ),
                'default' => esc_html__( 'Read More', 'sine' ),
                'type'    => 'text'
            ),
            array(
                'id' => 'post-per-row',
                'label' => esc_html__( 'Post Per Row', 'sine' ),
                'type' => 'sine-buttonset',
                'default' => '3',
                'choices' => array(
                    '1' => esc_html__( '1', 'sine' ),
                    '2' => esc_html__( '2', 'sine' ),
                    '3' => esc_html__( '3', 'sine' ),
                    '4' => esc_html__( '4', 'sine' )
                )
            ),
     	),
    ) );
}
add_action( 'init', 'sine_post_options' );