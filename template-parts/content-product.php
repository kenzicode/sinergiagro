
				<div class="md:flex justify-between md:space-x-10">
					<div class="basis-1/2 bg-white relative rounded-xl">

						<div class="bg-[#fdf9f7] h-[300px] w-full rounded-lg items-center border-gray-100 border border-[1px]">
							<?php $product_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large-thumbnail', false, ''); ?>

							<img src="<?php echo esc_url($product_img[0]); ?>" class="mx-auto h-[200px] md:h-auto" />
                       	 	
						</div>
					
                            <!-- <img src="http://localhost:8000/wp-content/uploads/2022/07/removal.ai_tmp-62c93604aa635.png" class="w-full p-10 mx-auto h-auto absolute inset-0" /> -->
                        
					</div>

					<div class="md:basis-1/2 flex-col px-10 md:px-16 pt-10 md:pt-0">
						<h5 class="text-sm px-2 py-1 rounded-sm bg-slate-200 mb-2 inline-block tracking-tight text-slate-500"><?php echo get_post_meta( get_the_ID(), 'variant_title', true ); ?></h5>
			
                        <header class="entry-header">
		                    <?php the_title( '<h1 class="text-4xl font-bold mb-7">', '</h1>' ); ?>
	                    </header><!-- .entry-header -->
                        
                        <article class="prose prose-base text-gray-600 font-light">
                        	<?php the_content(); ?> 
						</article>

						<div class="flex justify-start items-center mt-12 md:mt-24 space-x-4 flex-1">
							<a class="bg-orange-400 rounded-md px-5 py-3 text-white text-sm hover:text-white focus:text-white visited:text-white" href="#">Get Inquiry</a>
							<span>or</span>
							<?php
								$files = get_post_meta( get_the_ID(), 'variant_document', true );
								foreach ((array) $files as $file => $doc_url ) : ?>
									<a href="<?php echo wp_get_attachment_url($file); ?>"  class="bg-transparent rounded-md px-5 py-3 border border-gray-500 text-sm">Download Document</a>
							<?php endforeach;?>
						</div>
					</div>

				</div>

				<div class="mt-20 px-10 md:px-0">
					<h1 class="text-2xl font-bold mb-5 border-b-[1px] border-gray-200 pb-3">Product Variants</h1>

						<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-10">
							<?php
								$variants = get_post_meta( get_the_ID(), 'variant_group', true );

								foreach ( (array) $variants as $key => $variant ) : ?>
									
									<div class="shadow-md p-4 rounded-lg">
										<h1 class="text-base font-semibold text-gray-700 mb-2"><?php echo ($variant['variant_title']); ?></h1>
										<p class="text-base text-gray-500 font-light"><?php echo ($variant['variant_detail']); ?></p>
									</div>
								
							<?php endforeach; ?>
						</div>						
					
				</div>
				



				





				

			