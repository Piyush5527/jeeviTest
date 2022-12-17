<?php
/**
 * Sine Charity functions and definitions
 * Sine Charity only works in WordPress 4.7 or later.
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * @package Sine Charity
 */
final class Sine_Charity_Theme{
	public function __construct(){
		# enqueue script
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'scripts' ) );

		add_action( 'after_setup_theme', array( __CLASS__, 'after_parent_theme' ) );

		# register nav bars
		add_action( 'after_setup_theme', array( __CLASS__ , 'nav_menu' ) );

		# sticky social menu
		add_action( 'wp_footer', array( __CLASS__, 'sticky_social_menu_script' ) );
	}

	/**
	* Enqueue styles and scripts
	*
	* @static
	* @access public
	* @since  1.0
	*
	* @package Sine Charity
	*/
	public static function scripts(){
		# fade effect for fixed social menu
		wp_enqueue_script( 'jquery-effects-fade' );
		
		$scripts = array(
			# enqueue parent stylesheet
			array(
				'handler'  => 'sine-charity',
				'style'    => get_template_directory_uri() . '/style.css',
				'version'  => wp_get_theme()->get('Version'),
				'absolute' => true,
				'minified' => false
			)
		);
		Sine_Helper::enqueue( $scripts );
	}

	/**
	 * Register navigation bar
	 *
	 * @static
	 * @access public
	 * @return object
	 * @since  1.0
	 *
	 * @package Sine Charity
	 */
	public static function nav_menu(){
		register_nav_menus(
			array(
				'footer-menu' => esc_html__( 'Footer Menu', 'sine-charity' ),
				'social-menu-header' => esc_html__( 'Header social menu', 'sine-charity' )
			)
		);
	}

	/**
	 * After parent theme
	 *
	 * @static
	 * @access public
	 * @since 1.0
	 *
	 * @package Sine Charity
	 */
	public static function after_parent_theme(){
		# remove post options
		remove_action( 'init', 'sine_header_options' );

		remove_action( Sine_Helper::fn_prefix( 'header' ), array( 'Sine_Theme', 'header' ) );
		add_action( Sine_Helper::fn_prefix( 'header' ), array( __CLASS__, 'header' ) );

		#change section name
		add_filter( 'sine_customizer_get_panel_arg', array( __CLASS__, 'change_pannel_title' ), 20, 2 );

		# include options file
		Sine_Helper::include( array(
			'header-options',
		), 'includes/theme-options', '');

		# include dynamic css
		Sine_Helper::include( array(
			'common'
		), 'includes/dynamic-css', '');

		# filter to modify priority
		add_filter( Sine_Helper::with_prefix( 'customizer_get_defaults','_' ), array( __CLASS__ , 'change_defaults' ), 99 ,2 );

		#filter to change default on admin
		add_filter( Sine_Helper::fn_prefix( 'customizer_get_setting_arg' ), array( __CLASS__, 'change_default_admmin' ), 10, 2 );

	}

	/**
	 * Changed panel title
	 *
	 * @static
	 * @access public
	 * @since 1.0
	 *
	 * @package Sine Charity
	 */
	public static function change_pannel_title( $args, $panel ){
		if( $panel[ 'id' ] == 'panel' ){
			$panel[ 'title' ] = esc_html__( 'Sine Charity Options', 'sine-charity' );
		}
		return $panel;
	}

	/**
	 * Change default value
	 *
	 * @static
	 * @access public
	 * @since  1.0
	 *
	 * @package Sine Charity
	 */	
	public static function change_defaults( $def, $instance ){
		$copyright = Sine_Helper::with_prefix( 'footer-copyright-text' );
		$primary_color = Sine_Helper::with_prefix( 'primary-color' );
		$post_per_row = Sine_Helper::with_prefix( 'post-per-row' );
		$sidebar_position = Sine_Helper::with_prefix( 'sidebar-position' );


		$def[ $copyright ] = esc_html__( 'Copyright &copy; 2021 | Sine Charity', 'sine-charity' );
		$def[ $primary_color ] = '#F3501D' ;
		$def[ $post_per_row ] = '1' ;
		$def[ $sidebar_position ] = 'right-sidebar' ;

		return $def;
	}
	/**
	 * Change default value on admin
	 *
	 * @static
	 * @access public
	 * @since  1.0
	 *
	 * @package Sine Charity
	 */	
	public static function change_default_admmin( $args, $field ){
		if( $field[ 'id' ] == Sine_Helper::with_prefix( 'footer-copyright-text' ) ){
			$args[ 'default' ] = esc_html__( 'Copyright &copy; 2021 | Sine Charity', 'sine-charity' );
		}

		if( $field[ 'id' ] == Sine_Helper::with_prefix( 'primary-color' ) ){
			$args[ 'default' ] = '#F3501D';
		}

		if( $field[ 'id' ] == Sine_Helper::with_prefix( 'post-per-row' ) ){
			$args[ 'default' ] = '1';
		}

		if( $field[ 'id' ] == Sine_Helper::with_prefix( 'sidebar-position' ) ){
			$args[ 'default' ] = 'right-sidebar';
		}

		return $args;
	}

	/**
	 * print header
	 *
	 * @static
	 * @return string
	 * @since 1.0
	 *
	 * @package Sine Charity
	 */
	public static function header(){
		$layout = sine_get( 'child-header-layout' );
		if( 'one' == $layout ){
			get_template_part( 'templates/header/header', 'one' );
		}elseif( 'two' == $layout ){
			get_template_part( 'templates/header/header', 'two' );
		}elseif( 'three' == $layout ){
			get_template_part( 'templates/header/header', 'three' );
		}
	}

	/**
	 * print Social Menu
	 *
	 * @static
	 * @return string
	 * @since 1.0
	 *
	 * @package Sine Charity
	 */
	public static function header_social_menu( $type = false ){ 
		if( !$type ){
			return;
		}
		$class = 'fixed' == $type ? 'sine-fixed-social-menu' : '';?>
		<div class="sine-social-menu <?php echo esc_html( $class ); ?>">
			<?php wp_nav_menu( array(
				'menu_id'        => 'social-menu-header',
				'theme_location' => 'social-menu-header',
				'echo'           => true,
				'container'      => false,
				'menu_class'     => 'social-menu-header',
				'link_before'    => '<span>',
				'link_after'     => '</span>',
				'depth'          => 1
			)); ?>
		</div>
	<?php }

	/**
	 * Script for sticky social menu
	 *
	 * @static
	 * @since 1.0
	 *
	 * @package Sine Charity
	 */
	public static function sticky_social_menu_script(){ ?>
		<script type="text/javascript">
			jQuery( window ).on( 'scroll', function(){				
				if( jQuery(window).scrollTop() > 200 ){
					jQuery('.sine-social-menu.sine-fixed-social-menu').show( 'fade' );
				}else{
					jQuery('.sine-social-menu.sine-fixed-social-menu').hide( 'fade' );
				}
			});
		</script>
	<?php }
}

new Sine_Charity_Theme();