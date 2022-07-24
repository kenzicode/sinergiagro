<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AgroChem
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="relative">
			
			<div class="relative top-28 overflow-hidden pb-40">
				<div class="max-w-7xl mx-auto">
					<div class="shadow-lg bg-white rounded-xl p-20">
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'product' );

								// the_post_navigation(
								// 	array(
								// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kr' ) . '</span> <span class="nav-title">%title</span>',
								// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kr' ) . '</span> <span class="nav-title">%title</span>',
								// 	)
								// );

								// // If comments are open or we have at least one comment, load up the comment template.
								// if ( comments_open() || get_comments_number() ) :
								// 	comments_template();
								// endif;

							endwhile; // End of the loop.
						?>
						

						<div class="mt-20 mb-10">
							<h1 class="text-2xl font-bold mb-5">Other Products</h1>

							<div class="grid grid-cols-3 gap-5">
								<?php
									$otherProducts = new WP_Query(array(
										'post_type' => 'product',
										'orderby'	=> 'rand',
										'post_per_page'	=> '3',
										'post__not_in'	=> array( $post->ID )
									));

									while ($otherProducts->have_posts()) : $otherProducts->the_post();

								?>
								<div class="bg-[#FFF5EE] h-[200px] w-full rounded-xl">
									<a href="<?php the_permalink(); ?>"><?php kr_post_thumbnail(); ?></a>
								</div>

								<?php endwhile; ?>
							</div>
						</div>




					</div>
				</div>
			</div>

			<div class="absolute h-[450px] w-full bg-[#FFF5EE] -z-10 top-0"></div>
		</div>




	</main><!-- #main -->

<?php
get_footer();
