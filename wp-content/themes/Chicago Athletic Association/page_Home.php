<?php 
/**
Template Name: Home Page
 */

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>










<div class="intro">
<div class="introText">WHERE EVERYONE BELONGS AND</div>
<div class="introTitle">Events Calendar</div>
<div class="introText" style="margin-top:10px;">THE SPIRIT OF PLAY NEVER WANES</div>
<div class="clear"></div>	
</div>

<div class="parallaxContainer">
<div class="parallax">
<?php
global $post;
$EM_Event = em_get_event($post->ID, 'post_id');
?>
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit' => 5, 'offset' => 0));
foreach ( $events as $event ) 
{ ?>

	<article class="cd-section">
		<div class="eventsContainer">
		
<div class="logoAnimation">
	<div class="container">
		<div class="left"><div class="scrollfx5 growLeft"><div class="content-block"></div></div></div>
		<div class="middle">&nbsp;</div>
		<div class="right"><div class="scrollfx5 growRight"><div class="content-block"></div></div></div>
	</div>
</div>

<div class="clear"></div>
			
			<div class="eventsThumb span_6">
				<a href="<?php echo $event->output('#_EVENTURL'); ?>"> 
			
				<?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?> 
		
				</a> 
			</div>
			<div class="eventsMeta span_6">
				<h4 align="center" class="location"> 
					<a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a>
				</h4>
				<h2 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h2> 
				<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?><br/> 
				<?php echo $event->output('#_EVENTTIMES') ?> </p>
					
				<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">FREE-RSVP</div></a>
			</div>
			
		
		
	<div class="clear"></div>	
		<div>
	
	</article>
<?php }?>
	
</div><!--parallax -->
</div> <!--parallaxContainer -->
<div class="otherUpcoming">
<div class="container">


<br>
<h2 align="center">Other Upcoming Events </h2>
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
		<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?><br/> 
		<?php echo $event->output('#_EVENTTIMES') ?> </p>
			
		<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">FREE-RSVP</div></a>
	</div>
</div>
</article>

 <?php }?>

</div> <!--END CONTAINER -->
</div> <!--END CONTAINER -->











		
		


<?php get_footer(); ?>


