<?php 
/**
Template Name: Home Page
 */

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>

<div class="placeholder">FEATURED CONTENT PLACE HOLDER</div>

<p align="center"> <a href="/">List View</a> | <a href="/calendar/">Calender View</a> </p>
<div class="container row body">
<main class="row">
		
				<?php $the_query = new WP_Query( $args ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				<?php wp_reset_postdata(); ?>
		
		
</main>
<?php get_footer(); ?>

