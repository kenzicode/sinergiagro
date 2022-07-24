<?php
    /* 
    Template Name: Products Page with Table
    Template Post Type: product
    */

    get_header();
?>


<main id="primary" class="site-main">

<div class="relative">
    
    <div class="relative top-28 overflow-hidden pb-40">
        <div class="max-w-7xl mx-auto">

            <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'productwithtable' );

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kr' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kr' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
            ?>
            
        </div>
    </div>

    <div class="absolute h-[250px] w-full bg-[#FFF5EE] -z-10 top-0"></div>
</div>


<div class="pt-40">

    
</div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
