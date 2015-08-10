<?php get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
<div class="container row body">
<main class="row" style="padding-top:50px;">
		
				<?php $the_query = new WP_Query( $args ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				<?php wp_reset_postdata(); ?>
		
		
</main>
<?php get_footer(); ?>

