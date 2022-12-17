<?php
/**
 * Content for footer widget
 *
 * @since 1.0
 *
 * @package Sine WordPress Theme
 */
 if( !apply_filters( Sine_Helper::fn_prefix( 'disable_footer_widget' ), false ) ): ?>
    <footer <?php Sine_Helper::schema_body( 'footer' ); ?> class="footer-top-section">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                 	<?php
                 		$num_footer = sine_get( 'layout-footer' );
                 		for( $i = 1; $i <= $num_footer ; $i++ ){ ?>
                 			<?php if ( is_active_sidebar( Sine_Helper::fn_prefix( 'footer_sidebar' ) . '_' . $i ) ) : ?>
		                 		<aside class="col footer-widget-wrapper py-5">
		                 	    	<?php dynamic_sidebar( Sine_Helper::fn_prefix( 'footer_sidebar' ) . '_' . $i ); ?>
		                 		</aside>
	                 		<?php endif; ?>
                 	<?php } ?>
                </div>
            </div>
        </div>
        <div class="sine-footer-menu-wrapper">
            <?php wp_nav_menu( array(
                'menu_id'        => 'footer-menu',
                'theme_location' => 'footer-menu',
                'echo'           => true,
                'container'      => false,
                'menu_class'     => 'navigation clearfix',
                'depth'          => 1
            )); ?>
        </div>
    </footer>
<?php endif;
