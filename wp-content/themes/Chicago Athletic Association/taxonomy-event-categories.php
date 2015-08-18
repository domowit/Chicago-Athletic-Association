<?php 


get_header(); ?>


       
 
                        
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>
 
<div class="intro">
<?php //get the taxonomy object and convert it to EM_Category for output
$taxonomy = get_queried_object();
$EM_Category = em_get_category($taxonomy->term_id);
{?>
	<div class="introText">Showing: <?php echo $EM_Category->output('#_CATEGORYNAME'); ?></div>

<?php } ?>

<?php echo do_shortcode('[categories_list]');?>
	
</div>



    
    





 




<?php //get the taxonomy object and convert it to EM_Category for output
$taxonomy = get_queried_object();
$EM_Category = em_get_category($taxonomy->term_id);
{ ?>



		<?php echo $EM_Category->output_single(); ?>
		
	<?php } ?>	
	














		
		


<?php get_footer(); ?>