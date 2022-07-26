<?php
    /* 
    Template Name: Contact Page
    */

    get_header();
?>

<main id="primary" class="site-main">

		<div class="relative">
			<div class="w-full bg-[#FFF5EE] -z-10 top-0">
                <div class="max-w-7xl items-center mx-auto py-20">
                    <h1 class="text-4xl font-bold text-center text-[#B96D3C]">Contact Us</h1>
                </div>
            </div>
			
			<div class="relative top-28 overflow-hidden pb-40">
				<div class="max-w-7xl mx-auto px-20">

					<?php
						while ( have_posts() ) :
							the_post(); ?>

							<div class="grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-5">
								<div class="bg-slate-500 p-10 shadow-xl rounded-lg">
									<svg class="mb-10" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M38.5 18.3335C38.5 31.1668 22 42.1668 22 42.1668C22 42.1668 5.5 31.1668 5.5 18.3335C5.5 13.9574 7.23839 9.76058 10.3327 6.66623C13.4271 3.57188 17.6239 1.8335 22 1.8335C26.3761 1.8335 30.5729 3.57188 33.6673 6.66623C36.7616 9.76058 38.5 13.9574 38.5 18.3335Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M22 23.8335C25.0376 23.8335 27.5 21.3711 27.5 18.3335C27.5 15.2959 25.0376 12.8335 22 12.8335C18.9624 12.8335 16.5 15.2959 16.5 18.3335C16.5 21.3711 18.9624 23.8335 22 23.8335Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<h1 class="text-3xl font-bold text-white">Our Office Location</h1>
									<h5 class="text-base font-normal text-white mt-7">PT Sinergi Agro, Ruko Prominence, Blok 38G No 52 - Alam Sutera, Tangerang</h5>
									<h5 class="text-base font-normal text-white mt-2">+62 29222883</h5>
								</div>

								<div class="entry-content prose prose-base">
									<?php
									the_content();

									?>
								</div><!-- .entry-content -->


							</div>

                        <?php endwhile; // End of the loop.
                    ?>        

				</div>
			</div>
		</div>
	</main><!-- #main -->


<?php
    get_footer();