<?php
    /* 
    Template Name: Company Page
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
	
	<div class="relative top-7 md:top-16 overflow-hidden pb-12 md:pb-40 px-10 md:px-0">
		<div class="max-w-7xl mx-auto">
			
		

			<article class="prose prose-base text-gray-600 mx-auto">

				<?php the_content(); ?>
				
			</article>

			

		</div>
	</div>

</div>

<?php endwhile; // End of the loop.
			?>


</main><!-- #main -->

<?php
    get_footer();