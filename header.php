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
	<script src="//unpkg.com/alpinejs" defer></script>

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
			<div class="max-w-7xl mx-auto py-6 items-center">

				<div class="flex justify-between items-center">
					<div class="w-[225px]">
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

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kr' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'	 => 'text-base font-light'
							)
						);
						?>
					</nav><!-- #site-navigation -->

					<button class="hidden bg-[#F59E0B] py-3 px-6 text-white text-sm rounded-md md:block">
              			Ask Quotation
            		</button>
				</div>
			</div>


		</div>
		
	</header><!-- #masthead -->
