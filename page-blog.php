<?php
    /* 
    Template Name: Blog Page
    */

    get_header();
?>

<main id="primary" class="site-main">

        <?php
            while ( have_posts() ) :
            the_post(); 
        ?>

		<div class="relative">
			<div class="w-full bg-[#FFF5EE] -z-10 top-0">
                <div class="max-w-7xl items-center mx-auto py-20">
                    <header class="entry-header">
                        <?php the_title( '<h1 class="text-4xl font-bold text-center text-[#B96D3C]">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                </div>
            </div>
			
            <div class="relative top-28 overflow-hidden pb-40 px-2 md:px-0">
				<div class="max-w-7xl mx-auto">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        
                    <?php 
                        $blogData = new WP_Query(array(
                            'post_type' => 'blog',
                            'post_per_page' => '-1',
                            
                        ));

                        while ($blogData->have_posts()) : $blogData->the_post();

                        $blog_img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'med-thumbnail', false, '');

                        ?>
                        
                        <div class="shadow-lg bg-white rounded-xl p-5 md:p-10">
            
                            <a href="<?php the_permalink(); ?>" >
    
                                <header class="entry-header">
                                    <?php the_title( '<h1 class="text-2xl md:text-3xl font-bold mb-7 text-[#B96D3C] hover:text-opacity-75">', '</h1>' ); ?>
                                </header><!-- .entry-header -->

                            </a>

                            <div class=" mb-4 text-gray-400 italic">
                                <?php
                                kr_posted_on();
                                ?>
                            </div><!-- .entry-meta -->

                            <article class="prose prose-base text-gray-600 font-light">
                                <?php the_excerpt(); ?> 
                            </article>

                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
             
                    </div>

				</div>
			</div>

		</div>

        <?php endwhile; // End of the loop.
                    ?>
</main><!-- #main -->

<?php
    get_footer();