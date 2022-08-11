
				<div class="md:flex justify-between md:space-x-10">
					<div class="basis-1/2 bg-white relative rounded-xl">

						<div class="bg-[#fdf9f7] h-auto w-full rounded-lg items-center border-gray-100 border border-[1px]">
							<?php $product_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large-thumbnail', false, ''); ?>

							<img src="<?php echo esc_url($product_img[0]); ?>" class="mx-auto h-[200px] md:h-auto md:p-20" />
                       	 	
						</div>
					
                            <!-- <img src="http://localhost:8000/wp-content/uploads/2022/07/removal.ai_tmp-62c93604aa635.png" class="w-full p-10 mx-auto h-auto absolute inset-0" /> -->
                        
					</div>

					<div class="md:basis-1/2 flex-col px-10 md:px-16 pt-10 md:pt-0">
						<h5 class="text-sm px-2 py-1 rounded-sm bg-slate-200 mb-2 inline-block tracking-tight text-slate-500"><?php echo get_post_meta( get_the_ID(), 'variant_title', true ); ?></h5>
			
                        <header class="entry-header">
		                    <?php the_title( '<h1 class="text-4xl font-bold mb-7">', '</h1>' ); ?>
	                    </header><!-- .entry-header -->
                        
                        <article class="prose prose-base text-gray-600 font-light text-justify">
                        	<?php the_content(); ?> 
						</article>

						<div class="flex justify-start items-center mt-12 md:mt-24 space-x-4 flex-1">
							<a class="bg-orange-400 rounded-md px-5 py-3 text-white text-sm hover:text-white focus:text-white visited:text-white flex justify-between items-center space-x-2 hover:opacity-90" href="#">
								<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.79785 4.09119H20.7979C21.8979 4.09119 22.7979 4.99119 22.7979 6.09119V18.0912C22.7979 19.1912 21.8979 20.0912 20.7979 20.0912H4.79785C3.69785 20.0912 2.79785 19.1912 2.79785 18.0912V6.09119C2.79785 4.99119 3.69785 4.09119 4.79785 4.09119Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M22.7979 6.09119L12.7979 13.0912L2.79785 6.09119" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							
								<span>Get Inquiry</span>
								
							</a>
							
							<?php
								$files = get_post_meta( get_the_ID(), 'variant_document', true );
								if (!empty($files)) : 
								foreach ((array) $files as $file => $doc_url ) : ?>
									<span>or</span>
									<a href="<?php echo wp_get_attachment_url($file); ?>"  class="bg-transparent rounded-md px-5 py-3 border border-gray-500 text-sm flex justify-between space-x-2 items-center">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M7 10L12 15L17 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M12 15V3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>		
									<span>Download Document</span>
									</a>
							<?php endforeach; endif; ?>
						</div>
					</div>

				</div>

				<div class="mt-20 px-10 md:px-0 pb-20 md:pb-0">
					<h1 class="text-2xl font-bold mb-5 border-b-[1px] border-gray-200 pb-3">Product Variants</h1>

						<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-10">
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
				



				





				

			