<?php 
/**
 * Template part for displaying slider in pages
 *
 * @since 1.0.0
 * 
 * @package Sine WordPress Theme
 */

$pst = Sine_Theme::get_posts_by_type( sine_get( 'slider-type' ), sine_get( 'cat-post' ), 3 );
if( !empty( $pst ) ):?>
	<div class="sine-banner-slider-wrapper"> 
		<div class="sine-banner-slider-init">
			<?php 
			foreach( $pst as $p ): 
				if( has_post_thumbnail( $p ) ){
					$img = get_the_post_thumbnail_url( $p, 'full' );
				}else{
					$img = get_template_directory_uri() . '/assets/img/default-banner.jpg';
				}?>
				<div class="sine-banner-slider-inner" style="background-image: url( <?php echo esc_url( $img ) ?>)">
					<div class="banner-slider-content">
						<h2>
							<a href="<?php echo esc_url( get_the_permalink( $p ) ); ?>">								
								<?php echo esc_html( get_the_title( $p ) ); ?>
							</a>
						</h2>
						<p class="feature-news-content"><?php echo esc_html( sine_excerpt( 20, false, '...', $p ) ); ?></p>
						<?php if( '' != sine_get( 'slider-more-text' ) ){ ?>
							<div class="inner-banner-btn">
								<a href="<?php echo esc_url( get_the_permalink( $p ) ); ?>">
									<?php echo esc_html( sine_get( 'slider-more-text' ) ); ?>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
