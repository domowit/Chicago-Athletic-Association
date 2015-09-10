<?php 

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
ARCHIVE HI



<?php
global $EM_Category;
EM_Events::output( array('category' => $EM_Category->slug) )
?>

<div class="intro">
<div class="introText">Showing: <?php echo $EM_Category->output('#_CATEGORYNAME'); ?></div>
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
			<a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a>
		</h4>
		<h3 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h3> 
		<p align="center"> <?php echo $event->output('#F #j'); ?><br/>  
		<?php echo $event->output('#_EVENTTIMES') ?> </p>
			
		<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">MORE</div></a>
	</div>
</div>
</article>



</div> <!--END CONTAINER -->











		
		


<?php get_footer(); ?>


