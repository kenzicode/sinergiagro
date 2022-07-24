<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AgroChem
 */

?>

	<footer id="colophon" class="bg-slate-50">
		<div class="site-info mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="py-16 flex justify-between">

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
				
				<div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( '© 2022 All Rights Reserved by %s', 'kr' ), 'SinergiAgro' );
						?>
					</a>
					<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Developed by %1$s.', 'kr' ), '<a href="https://krockets.com">krockets</a>' );
					?>
				</div>


			</div>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
