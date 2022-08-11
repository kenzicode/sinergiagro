<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AgroChem
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	
	<script src="//unpkg.com/alpinejs" defer></script>

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>





	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kr' ); ?></a>

	<header id="masthead" class="relative">
		<!-- <div class="topheader bg-[#fafad7] text-gray-800 text-sm">
			<div class="max-w-7xl mx-auto py-2">
				<div class="flex justify-between items-center">
					<p>email@corporate.com</p>
					<p>telp +62 021 2299 212</p>
				</div>
			</div>
		</div> -->

		<div class="mainheader bg-white">
			<div class="max-w-7xl mx-auto py-6 items-center" x-data="{ open: false}">

				<div class="flex justify-between items-center px-5 md:px-0">
					<div class="w-[180px] md:w-[225px]">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$kr_description = get_bloginfo( 'description', 'display' );
						if ( $kr_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $kr_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation hidden md:block">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kr' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'	 => 'text-base'
							)
						);
						?>
					</nav><!-- #site-navigation -->

					<!-- mobile burtton -->
					<div class="md:hidden">
						<button
						type="button"
						class="bg-white rounded-md p-2 inline-flex items-center justify-center hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-inset"
						aria-expanded="false"
						@click="open = true"
						>
						<span class="sr-only">Open menu</span>
						<!-- Heroicon name: outline/menu -->
						<svg
							class="h-6 w-6"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="2"
							stroke="currentColor"
							aria-hidden="true"
						>
							<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M4 6h16M4 12h16M4 18h16"
							/>
						</svg>
						</button>
					</div>
					
					<a href="tel:+6221888888" class="text-lg font-semibold md:flex space-x-2 items-center hidden">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M2.82812 0.766511C3.09057 0.504432 3.40572 0.301127 3.75268 0.170069C4.09965 0.0390104 4.4705 -0.0168086 4.84066 0.00631076C5.21083 0.0294301 5.57185 0.13096 5.89982 0.304172C6.22778 0.477384 6.51519 0.718323 6.743 1.01102L9.43541 4.47018C9.9289 5.10471 10.1029 5.93125 9.9079 6.71128L9.08742 9.99643C9.045 10.1666 9.04729 10.3448 9.09407 10.5138C9.14086 10.6828 9.23054 10.8369 9.35441 10.961L13.0398 14.6466C13.164 14.7708 13.3183 14.8606 13.4876 14.9074C13.6569 14.9542 13.8354 14.9564 14.0058 14.9137L17.2892 14.0931C17.6741 13.9969 18.0758 13.9894 18.464 14.0713C18.8523 14.1531 19.2168 14.3222 19.5301 14.5656L22.989 17.2568C24.2324 18.2243 24.3464 20.0619 23.2335 21.1734L21.6825 22.7245C20.5726 23.8346 18.9136 24.3221 17.3672 23.7776C13.4091 22.3848 9.81531 20.1187 6.85249 17.1473C3.88152 14.1846 1.61557 10.5912 0.222699 6.63328C-0.320284 5.08821 0.167201 3.42763 1.27717 2.31758L2.82812 0.766511Z" fill="#F18638"/>
						</svg>
						<span>+6221-8888-888</span>
					</a>
					<!-- <button class="hidden bg-[#F59E0B] py-3 px-6 text-white text-sm rounded-md md:block">
              			Ask Quotation
            		</button> -->
					
				</div>

				<div
					class="absolute origin-top-right top-0 p-2 inset-x-0 md:hidden transition transform z-50"
					x-show="open"
					x-transition:enter="duration-200 ease-out"
					x-transition:enter-start="opacity-0 scale-95"
					x-transition:enter-end="opacity-100 scale-100"
					x-transition:leave="duration-100 ease-in"
					x-transition:leave-start="opacity-100 scale-100"
					x-transition:leave-end="opacity-0 scale-95"
					@click.away="open = false"
				>
					<div class="rounded-lg shadow-lg bg-white">
						<div class="pt-5 pb-6 px-5">
							<div class="flex items-center justify-between mb-5">
								<div class="w-[140px]">
									<?php
									the_custom_logo();
									if ( is_front_page() && is_home() ) :
										?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php
									else :
										?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php
									endif;
									$kr_description = get_bloginfo( 'description', 'display' );
									if ( $kr_description || is_customize_preview() ) :
										?>
										<p class="site-description"><?php echo $kr_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
									<?php endif; ?>
								</div><!-- .site-branding -->

								<div class="-mr-2">
									<button
									type="button"
									class="bg-white rounded-md p-2 inline-flex items-center justify-center hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-slate-4-- focus:ring-inset"
									aria-expanded="false"
									@click="open = false"
									>
									<span class="sr-only">Close menu</span>
									<!-- Heroicon name: outline/menu -->
									<svg
										class="h-6 w-6"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										aria-hidden="true"
									>
										<path
										stroke-linecap="round"
										stroke-linejoin="round"
										d="M6 18L18 6M6 6l12 12"
										/>
									</svg>
									</button>
								</div>


							</div>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'	 => 'text-base space-y-2'
								)
							);
							?>
						</div>
					</div>
				</div>

			</div>


		</div>
		
	</header><!-- #masthead -->
