<?php
/**
 * Theme copyright template
 *
 * @since 1.0.0
 *
 * @package Sine WordPress Theme
 */ ?>
 <div class="col-xs-12 col-sm-4">
  	<span id="<?php echo esc_attr( Sine_Helper::with_prefix( 'copyright' ) ); ?>">
         	<?php
         		$footer_text = sine_get( 'footer-copyright-text' );
         		echo esc_html( $footer_text );
         	?>
  	</span>	                 	
 </div>