<?php 


get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
<?php $the_query = new WP_Query( $args ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if ( is_page( 'FAQ' )  ) { ?>

<div class="intro">
	<div class="introTitle">
		<?php the_title(); ?>
	</div>
</div>
<div class="row span_8 center">
	<?php
						if( have_rows('main_field') ):
						while ( have_rows('main_field') ) : the_row();
						if( get_row_layout() == 'add_row' ): ?>
	<div class="faq">
		<h3 class="faq">
			<?php the_sub_field('question'); ?>
		</h3>
		<p class="answer">
			<?php the_sub_field('answer'); ?>
		</p>
	</div>
	<?php 
						endif; endwhile;
						else :
						// no layouts found
						endif;
						?>
</div>
<!--END CONTAINER -->

<?php } elseif ( is_page('Contact') ) { ?>
<div class="intro">
	<div class="introTitle">
		<?php the_title(); ?>
	</div>
</div>

<!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
<div id="map"></div>
<div class="row span_9 center">
	<div class="col guttler span_5"> <a href=" https://www.google.com/maps/place/Chicago+Athletic+Association/@41.8816255,-87.6249418,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x17c961dc3e2ea52a" target="_blank">
		<h3>
			<?php the_field ('address'); ?>
		</h3>
		</a> </div>
	<div class="gutters col span_1">&nbsp</div>
	<div class="gutters col span_7">
		<?php the_field ('contact_form'); ?>
	</div>
</div>
<?php 
} else {
the_title();
the_content();
} 
?>
<?php endwhile; // end of the loop. ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
<?php get_footer(); ?>
