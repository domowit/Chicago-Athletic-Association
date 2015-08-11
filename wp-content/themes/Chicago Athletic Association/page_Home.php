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
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit' => 7, 'offset' => 0));
foreach ( $events as $event ) 
{ ?>


<article class="cd-section">
<div class="eventsContainer">
<div class="scrollfx5"><div class="content-block"><hr/></div></div>
	<div class="eventsThumb span_6">
		<a href="<?php echo $event->output('#_EVENTURL'); ?>"> <?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?> </a> 
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
	



<div>
<div class="clear"></div>
</article>
<?php }?>








<?php
global $post;
$EM_Event = em_get_event($post->ID, 'post_id');
?>
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit' => 7, 'offset' => 0));
foreach ( $events as $event ) 
{ ?>	
<article class="gutters col span_4"><div class="eventContainer">
<div class="eventsThumb">
<a href="<?php echo $event->output('#_EVENTURL'); ?>"> <?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?> </a> 
</div>  
<div class="clear"></div>  
<p align="center"><?php echo $event->output('#_LOCATIONNAME'); ?></p>
		<h3 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h3> 
		<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?></p> 
		<p align="center"> <?php echo $event->output('#_EVENTTIMES') ?> </p>
			</br></br>
		<p align="center"> <a href="<?php echo $event->output('#_EVENTURL'); ?>">RSVP</a></p>

</div>
</article>


 <?php }?>













		
		
</main>
<?php get_footer(); ?>


