<?php
    /* 
    Template Name: Company Page
    */

    get_header();
?>

<main id="primary" class="site-main">

		<div class="relative">


			<div class="w-full bg-[#FFF5EE] -z-10 top-0">
                <div class="max-w-7xl items-center mx-auto py-20">
                    <h1 class="text-4xl font-bold text-center text-[#B96D3C]">About Our Company</h1>
                </div>
            </div>
			
			<div class="relative top-28 overflow-hidden pb-40">
				<div class="max-w-5xl mx-auto px-20">

                        <?php
                            while ( have_posts() ) :
                                the_post(); ?>

<header class="entry-header">
		<?php the_title( '<h1 class="entry-title font-bold text-xl">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	
	<?php kr_post_thumbnail(); ?>

	<div class="entry-content prose prose-base">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->




                            <?php endwhile; // End of the loop.
                        ?>
                            

				</div>
			</div>

		</div>




	</main><!-- #main -->


<div>
    

</div>

<?php
    get_footer();