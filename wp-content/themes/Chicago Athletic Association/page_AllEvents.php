<?php 
/**
Template Name: All Events
 */

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>

<div class="intro">
<div class="introText">View By Category</div>

<?php echo do_shortcode('[categories_list]');?>
<?php // echo $event->output('#_CATEGORYLINK'); ?>
</div>

<div class="container">



<?php
global $post;
$EM_Event = em_get_event($post->ID, 'post_id');
?>
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit' => 0, 'offset' => 0));
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
		<?php echo $event->output('#_12HSTARTTIME') ?> - <?php echo $event->output('#_12HENDTIME') ?></p>
			
		<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">MORE</div></a>
	</div>
</div>
</article>

 <?php }?>

</div> <!--END CONTAINER -->











		
		


<?php get_footer(); ?>


