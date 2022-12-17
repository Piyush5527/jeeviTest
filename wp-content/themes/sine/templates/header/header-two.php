<?php
/**
 * Content for header two
 *
 * @since 1.0.0
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
		'icon' => 'fa-phone',
		'href' => 'tel:',
		'id'   => 'phone'
	),
	'header-email' => array(
		'icon' => 'fa-envelope',
		'href' => 'mailto:',
		'id'   => 'email'
	),
);
?>
<div class="<?php echo Sine_Helper::with_prefix( 'bottom-header-wrapper header-2' ); ?>">
	<div class="container--">
		<section class="<?php echo Sine_Helper::with_prefix( 'bottom-header-two' ); ?>">
			<div class="sine-header-top-wrapper">
				<div class="container">
					<div class="sine-header-top">
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
							<ul>
								<?php foreach( $data as $setting => $d ){
									$value = sine_get( $setting );
									$href = $d[ 'href' ] ? $d[ 'href' ] . $value : false;
									if( !empty( $value ) ):?>							
										<li>
											<?php if( $href ) : ?>
												<a href="<?php echo esc_attr( $href ); ?>">											
													<i class="fa <?php echo esc_attr( $d[ 'icon' ] ); ?>"></i>
													<span id="<?php echo esc_attr( $d[ 'id' ] ); ?>">
														<?php echo esc_html( $value); ?>	
													</span>
												</a>
											<?php else: ?>
												<i class="fa <?php echo esc_attr( $d[ 'icon' ] ); ?>"></i> 
												<span id="<?php echo esc_attr( $d[ 'id' ] ); ?>">
													<?php echo esc_html( $value ); ?>	
												</span>
											<?php endif; ?>
										</li>
									<?php endif;
								} ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="sine-header-bottom">			
					<div class="sine-primary-menu">
						<nav class="sine-main-menu" id="site-navigation">
							<?php Sine_Helper::get_menu( 'primary', true ); ?>
						</nav>
					</div>
					<div class="sine-btns-wrapper">
						<?php if( '' != sine_get( 'label_primary_btn' ) ){ ?>
							<a href="<?php echo esc_url( sine_get( 'url_primary_btn' ) ) ?>" class="sine-header-btn btn-first">
								<?php echo esc_html( sine_get( 'label_primary_btn' ) ); ?>									
							</a>
						<?php }
						if( '' != sine_get( 'label_secondary_btn' ) ){ ?>
							<a href="<?php echo esc_url( sine_get( 'url_secondary_btn' ) ) ?>" class="sine-header-btn btn-second">
								<?php echo esc_html( sine_get( 'label_secondary_btn' ) ); ?>									
							</a>
						<?php }
						Sine_Theme::add_cart_icon();
						Sine_Theme::add_search_icon();
						Sine_Theme::menu_toggler(); ?>
					</div>
					<div class="<?php echo Sine_Helper::with_prefix( 'header-search' ); ?>">


						<button class="circular-focus screen-reader-text" data-goto=".sine-header-search .sine-toggle-search"><?php esc_html_e( 'Circular focus', 'sine' ); ?></button>

						<?php get_search_form(); ?>

						<button type="button" class="close <?php echo Sine_Helper::with_prefix( 'toggle-search' ); ?>">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>

						<button class="circular-focus screen-reader-text" data-goto=".sine-header-search .search-field"><?php esc_html_e( 'Circular focus', 'sine' ); ?></button>

					</div>
				</div>
			</div>
		</section>
	</div>
</div>