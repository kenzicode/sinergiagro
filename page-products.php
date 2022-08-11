<?php
    /* 
    Template Name: Products Page
    */

    get_header();
?>

<main id="primary" class="site-main">

		<div class="relative">


			<div class="w-full bg-[#FFF5EE] -z-10 top-0">
                <div class="max-w-7xl items-center mx-auto py-20">
                    <h1 class="text-4xl font-bold text-center text-[#B96D3C]">Products Page</h1>
                </div>
            </div>

            <div class="tab-wrapper" x-data="{ activeTab: 0}">
                <div class="relative top-10 md:top-20 overflow-hidden pb-40 px-10 md:px-0">
                    <div class="mx-auto max-w-3xl items-center flex justify-center md:pb-20 pb-10">
                        <button 
                            class="px-4 py-2 text-sm rounded-l-3xl tab-button" 
                            @click="activeTab = 0" 
                            :class="{'active': activeTab === 0}">
                            Exotic Spices
                        </button>
                        <button 
                            class="px-4 py-2 text-sm rounded-r-3xl tab-button" 
                            @click="activeTab = 1" 
                            :class="{'active': activeTab === 1}">
                            Natural Output
                        </button>
                    </div>

                    <div class="tab-panel" 
                        :class="{ 'active': activeTab === 0 }" 
                        x-show="activeTab === 0"  
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1">
                        <div class="max-w-7xl mx-auto">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                            
                                <?php 
                                    $prodData = new WP_Query(array(
                                        'post_type' => 'product',
                                        'orderby'   => 'title',
                                        'order' => 'ASC',
                                        'posts_per_page' => '-1',
                                        'tax_query' => array(
                                            array (
                                                'taxonomy' => 'type',
                                                'field' => 'slug',
                                                'terms' => 'Casava'
                                            )
                                        )
                                    ));

                                    while ($prodData->have_posts()) : $prodData->the_post();

                                    $product_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'med-thumbnail', false, '');

                                    ?>

                                    <a class="shadow-lg bg-white rounded-xl p-10" href="<?php the_permalink(); ?>" >

                                        <p class="text-[#B96D3C] font-normal"><?php echo get_post_meta( get_the_ID(), 'variant_title', true ); ?></p>
                                        <header class="entry-header">
                                            <?php the_title( '<h1 class="text-4xl font-bold mb-7 text-[#B96D3C]">', '</h1>' ); ?>
                                        </header><!-- .entry-header -->

                                        <div class="bg-[#fdf9f7] w-full rounded-xl p-5">
                                            <img src="<?php echo esc_url($product_img[0]); ?>" class="mx-auto" />
                                        </div>

                                        <article class="prose prose-base text-gray-600 font-light mt-10 text-justify">
                                            <?php the_excerpt(); ?> 
                                        </article>

                                    </a>

                                <?php endwhile; ?>

                                <?php wp_reset_postdata(); ?>
                            </div>

                        </div>
                    </div>
                    
                    <div class="tab-panel" 
                        :class="{ 'active': activeTab === 1 }" 
                        x-show="activeTab === 1"  
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1">
                        <div class="max-w-7xl mx-auto">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                            
                                <?php 
                                    $prodData = new WP_Query(array(
                                        'post_type' => 'product',
                                        'orderby'   => 'title',
                                        'order' => 'ASC',
                                        'posts_per_page' => '-1',
                                        'tax_query' => array(
                                            array (
                                                'taxonomy' => 'type',
                                                'field' => 'slug',
                                                'terms' => 'chili'
                                            )
                                        )
                                    ));

                                    while ($prodData->have_posts()) : $prodData->the_post();

                                    $product_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'med-thumbnail', false, '');

                                    ?>

                                    <a class="shadow-lg bg-white rounded-xl p-10" href="<?php the_permalink(); ?>" >

                                        <p class="text-[#B96D3C] font-normal"><?php echo get_post_meta( get_the_ID(), 'variant_title', true ); ?></p>
                                        <header class="entry-header">
                                            <?php the_title( '<h1 class="text-4xl font-bold mb-7 text-[#B96D3C]">', '</h1>' ); ?>
                                        </header><!-- .entry-header -->

                                        <div class="bg-[#fdf9f7] w-full rounded-xl p-5">
                                            <img src="<?php echo esc_url($product_img[0]); ?>" class="mx-auto" />
                                        </div>

                                        <article class="prose prose-base text-gray-600 font-light mt-10 text-justify">
                                            <?php the_excerpt(); ?> 
                                        </article>

                                    </a>

                                <?php endwhile; ?>

                                <?php wp_reset_postdata(); ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="tab-wrapper" x-data="{ activeTab:  0 }">
                <div class="flex">
                    <label
                    @click="activeTab = 0"
                    class="tab-control"
                    :class="{ 'active': activeTab === 0 }"
                    >Tab 1</label>
                    <label
                    @click="activeTab = 1"
                    class="tab-control"
                    :class="{ 'active': activeTab === 1 }"
                    >Tab 2</label>
                    <label
                    @click="activeTab = 2"
                    class="tab-control"
                    :class="{ 'active': activeTab === 2 }"
                    >Tab 3</label>
                </div>

                <div class="tab-panel" :class="{ 'active': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">
                    <p>This is the example content of the first tab.</p>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 1 }" x-show.transition.in.opacity.duration.600="activeTab === 1">
                    <p>The second tab’s example content.</p>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 2 }" x-show.transition.in.opacity.duration.600="activeTab === 2">
                    <p>The content of the third and final tab in this set.</p>
                </div>
            </div> -->

		</div>


	</main><!-- #main -->


<div>
    

</div>

<?php
    get_footer();