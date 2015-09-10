<?php get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
 <a href="/events/categories/">
 <div class="seeAll">
	All Events <i class="fa fa-chevron-right"></i>
 </div>   
</a>
<div class="container">
	<?php
	global $post;
	$event = em_get_event($post->ID, 'post_id');
	?>
	
		<div class="row span_9 center">
			<div class="eventImage"> <a href="<?php echo $event->output('#_EVENTURL'); ?>"> 
				
<?php if ( has_post_thumbnail() ) {

	if ( wp_is_mobile() ) { ?>

		<?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?>

	<?php }

	else

	{ ?>

	<?php echo $event->output('#_CUSTOMEVENTIMAGEMEDIUM'); ?>

<?php }

} ?>
 </a> </div>


 <div class="moveAround">
  
 

  				<div class="gutters col span_7 aside aside-1" style="margin-top:15px;">
				<h2><?php echo $event->output('#_EVENTNAME'); ?></h2>
				<?php echo $event->output('#_ATT{event_description}'); ?>


<?php $the_query = new WP_Query( $args ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?> HI
<?php endwhile; ?>	
<?php wp_reset_postdata(); ?>
			


				
			</div>

			





  <div class="gutters col span_4 aside aside-2" >
				<hr/>
					<h4 align="center"> <?php echo $event->output('#F #j'); ?><br/> 
					<?php echo $event->output('#_12HSTARTTIME') ?> - <?php echo $event->output('#_12HENDTIME') ?></h4>
				<hr/>
				<h4 align="center" class="location"><a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a></h4>
				<hr/>
				


				<?php echo $event->output('<div class="ticketingForm">' . '#_BOOKINGFORM' . '</div>'); ?>

			
			

				
				
				
			
			</div>
			<div class="clear"></div>
			

			




  
</div>






		
			
			
		</div>
		<div class="clear"></div>
</div><!--END CONTAINER -->	
	<div class="row span_12" style="padding-top:50px; margin: 0 auto;">
	

<div class="intro">
<h2 align="center">Other Upcoming Events </h2>
</div>

		<div class="container">
<?php
global $post;
$EM_Event = em_get_event($post->ID, 'post_id');
?>
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit' => 9, 'offset' => 0));
foreach ( $events as $event ) 
{ ?>	
<article class="gutters col span_4">
<div class="eventContainerBoxed">
<div class="eventsThumb">
<a href="<?php echo $event->output('#_EVENTURL'); ?>"> <?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?> </a> 
</div>  

	<div class="eventContent">  
		<h4 align="center" class="location"> 
			<a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a>
		</h4>
		<h3 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h3> 
		<p align="center"> <?php echo $event->output('#F #j'); ?><br/> 
		<?php echo $event->output('#_EVENTTIMES') ?> </p>
			
		<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">MORE</div></a>
	</div>
</div>
</article>

 <?php }?>

</div> <!--END CONTAINER -->


<?php get_footer(); ?>




