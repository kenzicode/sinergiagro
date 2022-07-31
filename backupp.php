<div class="mt-20">
					<h1 class="text-2xl font-bold mb-5 border-b-[1px] border-gray-200 pb-3">Product Variants 2</h1>


						<div class="grid grid-cols-4 gap-6 mt-10">

						<?php 
                  			$product_variants = get_post_meta( get_the_ID(), '_product_variant', true ); 

							foreach ((array) $product_variants as $key => $product_variant) {
								
								$dbvariant = new WP_Query(array(
									'post_type' => 'productvariant',
									'post__in'	=> array($product_variant)
								));

								if ($dbvariant->have_posts() ) : while ($dbvariant->have_posts()) : $dbvariant->the_post();

								echo '<a class="shadow-md p-4 rounded-lg" href="' . get_permalink() . '"   />';
								echo '<h1 class="text-base font-semibold text-gray-700 mb-2">' . get_the_title() . '</h1>';

								echo '<p class="text-base text-gray-500 font-light">' . get_post_meta( get_the_ID(), 'variant_title', true ) .'</p>';

								echo '</a>';

								endwhile; wp_reset_postdata();
						
								else :
								echo '<p>Variant not found..</p>';
								
								endif; wp_reset_query();
							}

						?>
							
						</div>						
					
				</div>






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

			<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kr' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kr' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		

			
				
			</div>
		</div>

		<div class="absolute h-[250px] w-full bg-[#fff6de] -z-10 top-0"></div>
	</div>


	<div class="pt-40">

		
</div>

	</main><!-- #main -->

<?php
get_footer();
