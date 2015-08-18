<?php 

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
SINGLE CAT





<div class="intro">
<div class="introText">Showing: <?php echo do_shortcode('[categories_list]');?></div>
	<?php echo do_shortcode('[categories_list]');?>
</div>


<div class="container">




<article class="gutters col span_4">
<div class="eventContainerBoxed">
<div class="eventsThumb"> 
<a href="<?php echo $event->output('#_EVENTURL'); ?>"> <?php echo $event->output('#_CUSTOMEVENTIMAGETHUMB'); ?> </a> 
</div>  

	<div class="eventContent">  
		<h4 align="center" class="location"> 
		<?php echo do_shortcode('[categories_list]');?>
			<a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a>
		</h4>
		<h3 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h3> 
		<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?><br/> 
		<?php echo $event->output('#_EVENTTIMES') ?> </p>
			
		<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">FREE-RSVP</div></a>
	</div>
</div>
</article>



</div> <!--END CONTAINER -->











		
		


<?php get_footer(); ?>


