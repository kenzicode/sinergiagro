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
			
			<div class="relative top-10 md:top-28 overflow-hidden pb-40">
				<div class="max-w-7xl mx-auto">
					<div class="shadow-lg bg-white rounded-xl md:p-20">
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
						
<?php /*
						
						<div class="mt-20 md:mb-10 pb-10 md:pb-0 px-10 md:px-0">
							<h1 class="text-2xl font-bold mb-5">Other Products</h1>

							<div class="grid grid-cols-1 md:grid-cols-3 gap-5">
								<?php
									$otherProducts = new WP_Query(array(
										'post_type' => 'product',
										'orderby'	=> 'rand',
										'post_per_page'	=> '3',
										'post__not_in'	=> array( $post->ID )
									));

									while ($otherProducts->have_posts()) : $otherProducts->the_post();

									$product_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'med-thumbnail', false, '');

								?>
								<div class="bg-[#fdf9f7] w-full rounded-xl p-5 hover:opacity-95">
									<a href="<?php the_permalink(); ?>" >
											
										<img src="<?php echo esc_url($product_img[0]); ?>" class="mx-auto" />

										<header class="entry-header text-center my-5">
                                            <?php the_title( '<h1 class="text-2xl font-bold text-[#B96D3C]">', '</h1>' ); ?>
                                        </header><!-- .entry-header -->

									</a>
								</div>

								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

*/ ?>

					</div>
				</div>
			</div>

			<div class="absolute h-[0px] md:h-[450px] w-full bg-[#FFF5EE] -z-10 top-0"></div>
		</div>




	</main><!-- #main -->

<?php
get_footer();
