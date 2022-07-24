<div class="shadow-lg bg-white rounded-xl p-20">
				<div class="flex justify-between space-x-10">
					<div class="basis-1/2 bg-white relative rounded-xl p-10">

                        <?php kr_post_thumbnail(); ?>
					
                            <!-- <img src="http://localhost:8000/wp-content/uploads/2022/07/removal.ai_tmp-62c93604aa635.png" class="w-full p-10 mx-auto h-auto absolute inset-0" /> -->
                        
					</div>

					<div class="basis-1/2 flex-col px-16">
						<!-- <h5 class="text-sm px-2 py-1 rounded-sm bg-slate-200 mb-2 inline-block tracking-tight text-slate-500">Category</h5> -->
						                     
						<?php
						the_archive_title( '<h5 class="text-sm px-2 py-1 rounded-sm bg-slate-200 mb-2 inline-block tracking-tight text-slate-500">', '</h5>' );
						
						?>
			
                        <header class="entry-header">
		                    <?php the_title( '<h1 class="text-4xl font-bold mb-7">', '</h1>' ); ?>
	                    </header><!-- .entry-header -->
                        
                        <article class="prose prose-base text-gray-600">
                        	<?php the_content(); ?> 
						</article>

						<div class="flex justify-start items-center mt-24 space-x-4">
							<button class="bg-orange-400 rounded-md px-5 py-3 text-white text-sm">Get Inquiry</button>
							<span>or</span>
							<button class="bg-transparent rounded-md px-5 py-3 border border-gray-500 text-sm">Download Brocure</button>
						</div>
					</div>

				</div>

				<div class="mt-20">
					<h1 class="text-2xl font-bold mb-5">Product Variant</h1>

					<table class="table-fixed text-sm text-gray-600 border-collapse">
						<thead>
							<tr class="bg-gray-200">
								<th class="border border-gray-200 py-2">Name</th>
								<th class="border border-gray-200">Grade</th>
								<th class="border border-gray-200">Size & Length</th>
								<th class="border border-gray-200">Origin</th>
								<th class="border border-gray-200">Qualities</th>
								<th class="border border-gray-200">Moisture</th>
								<th class="border border-gray-200">Admixture</th>
								<th class="border border-gray-200">Color</th>
							</tr>
						</thead>

						<?php
							echo '<tbody>';
							$entries = get_post_meta( get_the_ID(), 'table_group_id', true);

							foreach ( (array) $entries as $key => $entry ) {
								echo '<tr class="text-center">';
								echo '<td class="border border-gray-200 font-bold p-2">' . ($entry['product_name']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['grade']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['size']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['origin']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['quality']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['moisture']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['admixture']) . '</td>';
								echo '<td class="border border-gray-200">' . ($entry['color']) . '</td>';
								echo '</tr>';
							}

							echo '</tbody>';
						?>
						

						<!-- <tbody>
							<tr class="text-center">
								<td class="border border-gray-200 font-bold">Sincin Stick</td>
								<td class="border border-gray-200">Premium</td>
								<td class="border border-gray-200 p-2">6 CM / 7 CM / 8 CM / 12 CM & 25 CM</td>
								<td class="border border-gray-200">Indonesia</td>
								<td class="border border-gray-200">A & AA </td>
								<td class="border border-gray-200">13.5%</td>
								<td class="border border-gray-200">0.5% Maximum</td>
								<td class="border border-gray-200">Natural / Smooth Touch</td>
							</tr>
							<tr class="text-center">
								<td class="border border-gray-200 font-bold">Sincin Stick</td>
								<td class="border border-gray-200">Premium</td>
								<td class="border border-gray-200 p-2">6 CM / 7 CM / 8 CM / 12 CM & 25 CM</td>
								<td class="border border-gray-200">Indonesia</td>
								<td class="border border-gray-200">A & AA </td>
								<td class="border border-gray-200">13.5%</td>
								<td class="border border-gray-200">0.5% Maximum</td>
								<td class="border border-gray-200">Natural / Smooth Touch</td>
							</tr>
							<tr class="text-center">
								<td class="border border-gray-200 font-bold">Sincin Stick</td>
								<td class="border border-gray-200">Premium</td>
								<td class="border border-gray-200 p-2">6 CM / 7 CM / 8 CM / 12 CM & 25 CM</td>
								<td class="border border-gray-200">Indonesia</td>
								<td class="border border-gray-200">A & AA </td>
								<td class="border border-gray-200">13.5%</td>
								<td class="border border-gray-200">0.5% Maximum</td>
								<td class="border border-gray-200">Natural / Smooth Touch</td>
							</tr>
						</tbody> -->
					</table>

					<div class="h-40 w-full"></div>

				</div>
				
				<div class="mt-20">
					<h1 class="text-2xl font-bold mb-5">Related Products</h1>

					<div class="grid grid-cols-3 gap-5">
						<div class="bg-slate-300 h-[200px] w-full"></div>
						<div class="bg-slate-300 h-[200px] w-full"></div>
						<div class="bg-slate-300 h-[200px] w-full"></div>
					</div>
				</div>

			</div>