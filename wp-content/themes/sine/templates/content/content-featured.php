<?php
/**
 * Template part for displaying featured section
 *
 * @since 1.0.0
 * 
 * @package Sine WordPress Theme
 */

$title = sine_get( 'featured-section-title' );
$content = json_decode( sine_get( 'feature-repeater' ) );
if( !empty( $content ) ): ?>
	<section class="sine-feature-section">
		<div class="container">
			<?php if( $title ){ ?>
				<div class="sine-section-title">
					<h2><?php echo get_the_title( $title ); ?></h2>
					<p><?php echo sine_excerpt( 20, false, '', $title ); ?></p>
				</div>
			<?php } ?>
			<div class="sine-featured-section-wrapper">				
				<?php foreach ( $content as  $c ) { ?>
					<div class="sine-featured-inner">
						<div class="sine-featured-inner-content">
							<div class="sine-featured-icon"><i class="fa <?php echo esc_html( $c[0] ); ?>"></i></div>								
							<h3><a href="<?php echo get_the_permalink( $c[1] ); ?>"><?php echo get_the_title( $c[1] ); ?></a></h3>				
							<p><?php echo sine_excerpt( 20, false, '...', $c[1] ); ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
 <?php endif; ?>