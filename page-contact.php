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

							<div class="grid md:grid-cols-2 grid-cols-1">
								<div class="bg-[#B96D3C] p-10 shadow-xl rounded-tl-md rounded-bl-md">
									<svg class="mb-10" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M38.5 18.3335C38.5 31.1668 22 42.1668 22 42.1668C22 42.1668 5.5 31.1668 5.5 18.3335C5.5 13.9574 7.23839 9.76058 10.3327 6.66623C13.4271 3.57188 17.6239 1.8335 22 1.8335C26.3761 1.8335 30.5729 3.57188 33.6673 6.66623C36.7616 9.76058 38.5 13.9574 38.5 18.3335Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M22 23.8335C25.0376 23.8335 27.5 21.3711 27.5 18.3335C27.5 15.2959 25.0376 12.8335 22 12.8335C18.9624 12.8335 16.5 15.2959 16.5 18.3335C16.5 21.3711 18.9624 23.8335 22 23.8335Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
									<h1 class="text-3xl font-bold text-white">Office Location</h1>
									<h5 class="text-base font-light text-white mt-7">PT Sinergi Agro, Ruko Prominence, Blok 38G No 52 - Alam Sutera, Tangerang</h5>
									<h5 class="text-base font-light text-white mt-2">+62 29222883</h5>
									<h5 class="text-base font-light text-white mt-2">support@example.com</h5>
								</div>

								<div class="">
									<?php
									the_content();

									?>
									
									

									<!-- <form>
										<div class="shadow-xl overflow-hidden rounded-tr-md rounded-br-md px-6">
										<h1 class="text-2xl font-normal text-slate-600 px-6 py-5">Contact Sales Support</h1>
											<div class="px-4 py-5 bg-white sm:p-6">
												<div class="grid grid-cols-6 gap-6">
													<div class="col-span-6 sm:col-span-3">
														<label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
														<input type="text" name="first-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md p-2">
													</div>

													<div class="col-span-6 sm:col-span-3">
														<label for="first-name" class="block text-sm font-medium text-gray-700">Last Name</label>
														<input type="text" name="first-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md p-2">
													</div>

													<div class="col-span-6 sm:col-span-3">
														<label for="first-name" class="block text-sm font-medium text-gray-700">Email</label>
														<input type="text" name="first-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md p-2">
													</div>

													<div class="col-span-6 sm:col-span-3">
														<label for="first-name" class="block text-sm font-medium text-gray-700">Company</label>
														<input type="text" name="first-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md p-2">
													</div>

													<div class="col-span-6 sm:col-span-5">
														<label for="first-name" class="block text-sm font-medium text-gray-700">Subject</label>
														<input type="text" name="first-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md p-2">
													</div>

													<div class="col-span-6 sm:col-span-6">
														<label for="about" class="block text-sm font-medium text-gray-700"> Message </label>
														<div class="mt-1">
															<textarea id="about" name="about" rows="3" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
														</div>
													</div>

												</div>
													<div class="py-6">
														<button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#F18638] hover:bg-[#984d17] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-[#F18638]">Submit</button>
													
													</div>

												
											</div>
										</div>
									</form> -->

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