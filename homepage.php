<?php
/* 
    Template Name: Homepage
*/

get_header();

?>


<main id="content" class="relative">

    <!-- Hero -->
    <div class="relative mb-32">

        <div class="relative"><!-- Hero -->
            <div class="bg-[#FFF5EE] h-[709px]">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 items-center pt-20 pb-5">
                        <div class="hero space-y-7 pt-20 pb-5 z-20 w-3/5">
                            <h1 class="text-7xl font-bold text-slate-700">Synergising Agro Outputs Ecosystem</h1>
                            <h5 class="text-2xl font-light">Uplifting Farmers & Connecting to Commerce</h5>

                            <div class="relative">
                                <button class="py-3 px-7 text-white rounded-md bg-[#F18638]">Learn more</button>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3">
                        <div></div>
                        <div class="col-span-2 h-28 w-full z-20">
                            <div class="grid grid-cols-2 gap-16">
                                <div class="bg-white rounded-xl shadow-xl flex items-center justify-between">
                                    <div class="relative w-[350px] h-auto">
                                        <img src="http://localhost:8000/wp-content/uploads/2022/07/removal.ai_tmp-62c931f780028.png" class="absolute inset-0 -left-10 -top-12" />
                                    </div>
                                    <div class="pr-2 w-full py-4">
                                        <h3 class="text-xl font-bold">Beetlenut</h3>
                                        <h5 class="text-base text-slate-600 font-light mb-5">Origin from Indonesia</h5>
                                        <a href="#" class="text-sm text-slate-400">Learn more</a>
                                    </div>
                                </div>
                                <div class="bg-white rounded-xl shadow-xl flex items-center justify-between">
                                    <div class="relative w-[350px] h-auto">
                                        <img src="http://localhost:8000/wp-content/uploads/2022/07/clover.png" class="absolute inset-0 -left-10 -top-12" />
                                    </div>
                                    <div class="pr-2 w-full py-4">
                                        <h3 class="text-xl font-bold">Clover</h3>
                                        <h5 class="text-base text-slate-600 font-light mb-5">Origin from Indonesia</h5>
                                        <a href="#" class="text-sm text-slate-400">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="absolute top-0 right-0">
                <img src="http://localhost:8000/wp-content/uploads/2022/07/hero-bg1.png" />
            </div>
           
        </div><!-- Hero End -->
        
            <div class="relative">
                <div class="max-w-7xl mx-auto">
                    <div class="py-20">
                        <h3 class="text-4xl font-bold mb-10 text-[#B96D3C]">About PT Sinergi Agricom</h3>
                        <div class="flex justify-between mx-auto items-center space-x-16 text-gray-500 leading-7">
                            <p>The company started operating in 2022  when it was officially registered under Indonesian Companies Act. The Company is Located and operates in Tangerang, Indonesia with Warehouse Units located at Tangerang and Medan regions.</p>
                            <p>The company value proposition consists of creative initiatives driven by team of young dynamic experts who belong from different sectors which makes the company more stronger than the existing competitors of market.</p>
                            <p>PT.SINERGI AGRICOM, stands fully equipped to meet the advanced strategic ways to cater the needs of global market having sufficient supply strength to deliver the market in a sustainable form. PT.SINERGI AGRICOM, has been concentrating to niche markets like Fast Food Chain Markets, Hotel Chains, Food processing Industry.</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="relative">
                
                <div class="max-w-7xl mx-auto">
                    <div class="py-20">
                        <div class="grid grid-cols-4">
                            <div class="flex-col pr-10 pt-20">
                                <h3 class="text-3xl font-bold mb-10 text-[#B96D3C]">Product Section</h3>
                                <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare ne.</p>
                            </div>

                            <div class="col-span-3 bg-[#FCFCFA] p-1">
                                <div class="grid grid-cols-3">

                                <?php 
                                $prodData = new WP_Query(array(
                                    'post_type' => 'product',
                                    'orderby'   => 'rand',
                                    'post_per_page' => '-1',
                                    
                                ));

                                while ($prodData->have_posts()) : $prodData->the_post();

                                $product_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'med-thumbnail', false, '');

                                ?>

                                    <a class="h-80 w-80 p-3" href="<?php the_permalink(); ?>" >
                                        <div class="bg-slate-50 w-full p-5 h-full rounded-lg border-t-[12px] border-l-[1px] border-r-[1px] border-b-[1px] border-t-orange-200">
                                            

                                            <img src="<?php echo esc_url($product_img[0]); ?>" />
                                            
                                            <header class="entry-header text-center mt-10">
                                                <?php the_title( '<h1 class="text-2xl font-bold text-[#B96D3C]">', '</h1>' ); ?>
                                            </header><!-- .entry-header -->

                                        </div>
                                    </a>

                                    <?php endwhile; ?>

                                    <!-- <div class="h-80 w-80 p-3">
                                        <div class="bg-slate-200 w-full h-full rounded-lg"></div>
                                    </div>

                                    <div class="h-80 w-80 p-3">
                                        <div class="bg-slate-200 w-full h-full rounded-lg"></div>
                                    </div>

                                    <div class="h-80 w-80 p-3">
                                        <div class="bg-slate-200 w-full h-full rounded-lg"></div>
                                    </div>

                                    <div class="h-80 w-80 p-3">
                                        <div class="bg-slate-200 w-full h-full rounded-lg"></div>
                                    </div>

                                    <div class="h-80 w-80 p-3">
                                        <div class="bg-slate-200 w-full h-full rounded-lg"></div>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- Product End -->

            <div class="relative">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-orange-300 rounded-lg">    
                        <div class="p-10 py-14">
                            <div class="flex justify-between items-center">
                                <div class="w-4/5">
                                    <h3 class="text-4xl font-bold mb-5">
                                        Want to collaborate with us?
                                    </h3>
                                    <h5 class="text-xl font-light">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    </h5>
                                </div>

                                <div class="flex-col space-y-5 w-1/5">
                                    <button class="bg-white px-7 py-4 text-slate-600 text-lg rounded-lg w-full">Contact Us</button>
                                    <button class="bg-transparent border-1 border-white px-7 py-4 text-white text-lg rounded-lg w-full">See Our Company</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        
    </div>

</main>

<?php 
    get_footer();