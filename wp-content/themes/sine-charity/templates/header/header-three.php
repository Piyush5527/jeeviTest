<?php
/**
 * Content for header three
 *
 * @since 1.0
 *
 * @package Sine WordPress Theme
 */

$data = array(
	'header-location' => array(
		'icon' => 'fa-map-marker',
		'href' => false,
		'id'   => 'location'
	),
	'header-phone' => array(
		'icon' => 'fa-volume-control-phone',
		'href' => 'tel:',
		'id'   => 'phone'
	),
	'header-email' => array(
		'icon' => 'fa-envelope',
		'href' => 'mailto:',
		'id'   => 'email'
	),
);?>

<div class="<?php echo Sine_Helper::with_prefix( 'bottom-header-wrapper header-3' ); ?>">
	<section class="<?php echo Sine_Helper::with_prefix( 'bottom-header-three' ); ?>">
		<div class="sine-header-top-wrapper">
			<div class="container sine-header-top">
				<div class="site-branding">
					<div>
						<?php the_custom_logo(); ?>
						<div>
							<?php if ( is_front_page() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="sine-contact-info">
					<?php foreach( $data as $setting => $d ){
						$value = sine_get( $setting );
						$text = sine_get( $setting.'-text' );
						$href = $d[ 'href' ] ? $d[ 'href' ] . $value : false;
						if( !empty( $value ) || !empty( $text ) ):?>							
							<div class="sine-contact-info-inner-wrapper">
								<?php if( $href ) : ?>
									<i class="fa <?php echo esc_attr( $d[ 'icon' ] ); ?>"></i>
									<div class="sine-contact-info-inner">												
										<a href="<?php echo esc_attr( $href ); ?>">											
											<span id="<?php echo esc_attr( $d[ 'id' ] ); ?>">
												<?php echo esc_html( $value); ?>	
											</span>
											<span class="sine-info-text"><?php echo esc_html( $text ) ?></span>
										</a>
									</div>
								<?php else: ?>
									<i class="fa <?php echo esc_attr( $d[ 'icon' ] ); ?>"></i>
									<div class="sine-contact-info-inner">											
										<span id="<?php echo esc_attr( $d[ 'id' ] ); ?>">
											<?php echo esc_html( $value ); ?>	
										</span>
										<span class="sine-info-text"><?php echo esc_html( $text ) ?></span>
									</div>
								<?php endif; ?>
							</div>
						<?php endif;
					} ?>
				</div>
			</div>
		</div>
		<div class="sine-header-bottom-wrapper">
			<div class="container sine-header-bottom">
				<div class="sine-primary-menu">
					<nav class="sine-main-menu" id="site-navigation">
						<?php Sine_Helper::get_menu( 'primary', true ); ?>
					</nav>
				</div>
				<?php Sine_Theme::menu_toggler();
				Sine_Charity_Theme::header_social_menu( 'normal' );
				if( sine_get( 'header-fixed-social-menu' ) ){
					Sine_Charity_Theme::header_social_menu( 'fixed' );
				} ?>
			</div>
		</div>
	</section>
</div>