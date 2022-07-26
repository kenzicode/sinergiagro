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
			
			<div class="relative top-28 overflow-hidden pb-40">
				<div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-3 gap-10">
                        
                            <?php 
                                $prodData = new WP_Query(array(
                                    'post_type' => 'product',
                                    'orderby'   => 'rand',
                                    'post_per_page' => '-1',
                                    
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

                                </a>

                            <?php endwhile; ?>
                    </div>
				</div>
			</div>

		</div>




	</main><!-- #main -->


<div>
    

</div>

<?php
    get_footer();