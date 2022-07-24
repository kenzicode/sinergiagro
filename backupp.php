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