<?php 
/**
Template Name: Home Page
 */

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>




<div class="container row body">
<main class="row">


<?php
global $post;
$EM_Event = em_get_event($post->ID, 'post_id');
?>
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time'));
foreach ( $events as $event ) 
{ ?>


<article>
<div class="eventsContainer">

	<div class="eventsThumb span_6">
		<a href="<?php echo $event->output('#_EVENTURL'); ?>"> <?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?> </a> 
	</div>
	<div class="eventsMeta span_6">
		<p align="center"><?php echo $event->output('#_LOCATIONNAME'); ?></p>
		<h3 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h3> 
		<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?></p> 
		<p align="center"> <?php echo $event->output('#_EVENTTIMES') ?> </p>
			</br></br>
		<p align="center"> <a href="<?php echo $event->output('#_EVENTURL'); ?>">RSVP</a></p>
	</div>
	


<div class="clear"></div>
<div>
</article>
	


 <?php }?>

















		
		
</main>
<?php get_footer(); ?>


