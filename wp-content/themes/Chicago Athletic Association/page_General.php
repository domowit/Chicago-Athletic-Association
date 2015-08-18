<?php 
/**
Template Name: General Template
 */

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
 



    
    

    




 


<div class="container">

<?php $the_query = new WP_Query( $args ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						
							<?php the_title(); ?>
							<?php the_content(); ?>
						
					<?php endwhile; // end of the loop. ?>
				<?php wp_reset_postdata(); ?>
				

</div> <!--END CONTAINER -->











		
		


<?php get_footer(); ?>




