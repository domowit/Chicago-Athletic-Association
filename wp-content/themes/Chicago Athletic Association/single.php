<?php get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
<div class="container row body">
<main class="row span_9" style="padding-top:50px; margin: 0 auto;">
		<article>
				<?php $the_query = new WP_Query( $args ); ?>
					<?php while ( have_posts() ) : the_post(); ?>				
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				<?php wp_reset_postdata(); ?>
				
		</article>

<?php
// The Query ADDING SCHEDULE HERE
$the_query = new WP_Query( 'pagename=Upcoming');
// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post();
	the_content();
	endwhile;
// Reset Post Data
wp_reset_postdata();
?>



		
</main>
<?php get_footer(); ?>