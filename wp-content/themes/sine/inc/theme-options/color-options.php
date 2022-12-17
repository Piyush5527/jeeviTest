<?php
/**
* Register breadcrumb Options
*
* @return void
* @since 1.0.0
*
* @package Sine WordPress theme
*/
function sine_color_options(){	
	Sine_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'color-section',
		    'title'    => esc_html__( 'Color Options' ,'sine' ),
		    'priority' => 5
		),
		'fields'  =>array(
			array(
				'id'      => 'primary-color',
				'label'   => esc_html__( 'Primary Color', 'sine' ),
				'default' => '#E6B501',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'body-paragraph-color',
				'label'   => esc_html__( 'Body Text Color', 'sine' ),
				'default' => '#5f5f5f',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'primary-menu-item-color',
				'label'   => esc_html__( 'Primary Menu Item color', 'sine' ),
				'default' => '#737373',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'   => 'line-1',
				'type' => 'sine-horizontal-line',
			),
			array(
				'id'      => 'link-color',
				'label'   => esc_html__( 'Link Color', 'sine' ),
				'default' => '#145fa0',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'link-hover-color',
				'label'   => esc_html__( 'Link Hover Color', 'sine' ),
				'default' => '#737373',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'   => 'line-2',
				'type' => 'sine-horizontal-line',
			),
			array(
				'id'      => 'sb-widget-title-color',
				'label'   => esc_html__( 'Sidebar Widget Title Color', 'sine' ),
				'default' => '#000000',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'sb-widget-content-color',
				'label'   => esc_html__( 'Sidebar Widget Content Color', 'sine' ),
				'default' => '#282835',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'   => 'line-3',
				'type' => 'sine-horizontal-line',
			),
			array(
				'id'      => 'footer-title-color',
				'label'   => esc_html__( 'Footer Widget Title Color', 'sine' ),
				'default' => '#fff',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'footer-content-color',
				'label'   => esc_html__( 'Footer Widget Content Color', 'sine' ),
				'default' => '#a8a8a8',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'   => 'line-4',
				'type' => 'sine-horizontal-line',
			),
			array(
				'id'      => 'footer-top-background-color',
				'label'   => esc_html__( 'Footer Background Color', 'sine' ),
				'default' => '#28292a',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'footer-copyright-background-color',
				'label'   => esc_html__( 'Footer Copyright Background Color', 'sine' ),
				'default' => '#0c0808',
				'type'    => 'sine-color-picker',
			),
			array(
				'id'      => 'footer-copyright-text-color',
				'label'   => esc_html__( 'Footer Copyright Text Color', 'sine' ),
				'default' => '#ffffff',
				'type'    => 'sine-color-picker',
			),
		),			
	));
}
add_action( 'init', 'sine_color_options' );