<?php get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>

<div class="container">
	<?php
	global $post;
	$event = em_get_event($post->ID, 'post_id');
	?>
	
		<div class="row span_9 center">
			<div class="col eventImage"> <a href="<?php echo $event->output('#_EVENTURL'); ?>"> <?php echo $event->output('#_CUSTOMEVENTIMAGEMEDIUM'); ?> </a> </div>
		
			<div class="gutters col span_4">
				<hr/>
				<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?><br/>
					<?php echo $event->output('#_EVENTTIMES') ?> </p>
				<hr/>
				<p align="center"><a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a></p>
				<hr/>
				<div class="ticketingForm"> <?php echo $event->output('#_BOOKINGFORM'); ?> </div>
			</div>
			<div class="gutters col span_1">&nbsp</div>
			<div class="gutters col span_7">
				<h2><?php echo $event->output('#_EVENTNAME'); ?></h2>
				<?php echo $event->output('#_ATT{event_description}'); ?> 
			</div>
		</div>
		<div class="clear"></div>
	
	<div class="row span_12" style="padding-top:50px; margin: 0 auto;">
		<hr/>
		<h3 align="center">Other Upcoming events</h3>
		<br>
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
	</div>
</div><!--END CONTAINER -->

<?php get_footer(); ?>




