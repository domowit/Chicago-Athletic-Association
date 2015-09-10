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
<div class="row span_6 center">
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
<div class="row span_6 center">
	<div class="row center addressPage"> 

			<?php the_field ('address'); ?>
	
		</div>
	
	<div class="row center">
		<?php the_field ('contact_form'); ?>
	</div>
</div>
<?php } elseif ( is_page('Library') ) { ?>

<div class="intro">
	<div class="introTitle">
		<?php the_title(); ?>
	</div>
</div>

<div class="row  center">
		<div class="row span_6 center"> 

			<?php the_field ('sound_cloud'); ?>
			<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/1947657&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		<hr/>	
		</div>
	
	<div class="row span_6 center">

			<br/><br/>
			<h3 align="center">This Months Playlist By Damon Carruesco</h3>
				<div class="col  span_6"><?php the_field ('spotify_playlist'); ?></div>
				<div class="col  span_6"> 
				<img src="http://localhost/wp-content/uploads/2015/08/by_zoranorlic-384x300.jpg">
				Damon Carruesco of Disappears curated our Monthly playlist for September. Come on by Tuesday night for a DJ set by our curator

				<br/><br/>
				<strong>ADD PAST PLAYLIST CHART HERE</strong>

				</div>
			
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

