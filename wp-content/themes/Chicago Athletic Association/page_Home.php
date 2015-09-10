<?php 
/**
Template Name: Home Page
 */

get_header(); ?>
<?php // GET QUERIES TO PULL IN OTHER PAGES ?>










<div class="intro home">
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
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit' => 4, 'offset' => 0));
foreach ( $events as $event ) 
{ ?>

	<article class="cd-section">
		<div class="eventsContainer">
		
<div class="logoAnimation">
	<div class="containerAnimation">
		<div class="left"><div class="scrollfx5 growLeft"><div class="content-block"></div></div></div>
		<div class="middle">&nbsp;</div>
		<div class="right"><div class="scrollfx5 growRight"><div class="content-block"></div></div></div>
	</div>
</div>

<div class="clear"></div>
			
			<div class="eventsThumb span_6">
				<a href="<?php echo $event->output('#_EVENTURL'); ?>"> 
			
				<?php echo $event->output('#_CUSTOMEVENTIMAGEFEATURED'); ?> 
		
				</a> 
			</div>
			<div class="eventsMeta span_6">
				<h4 align="center" class="location"> 
					<a href="<?php echo $event->output('#_LOCATIONURL'); ?>"> - <?php echo $event->output('#_LOCATIONNAME'); ?> - </a>
				</h4>
				<h2 align="center">  <?php echo $event->output('#_EVENTLINK'); ?></h2> 
				<p align="center"> <?php echo $event->output('#_EVENTDATES'); ?><br/> 
				<?php echo $event->output('#_EVENTTIMES') ?> </p>
					
				<a href="<?php echo $event->output('#_EVENTURL'); ?>" style="margin: 0 auto;"><div class="rsvp">MORE</div></a>
			</div>
			
		
		
	<div class="clear"></div>	
		<div>
	
	</article>
<?php }?>
	
</div><!--parallax -->
</div> <!--parallaxContainer -->





<div class="otherUpcoming">

	<div class="intro otherheader">
		<h2 align="center">Library</h2>
	</div>
<div class="library">
	<div class="carousel info">
		<div class="overlay-info">
			<div class="info">

				<u>Info about Podcasts here</u><br/>
				We record semi-weekly blah blah blah
				check out all are podcasts here.</br/><br/>
				<i class="fa fa-headphones" style="font-size:30px;"></i>
			</div>
		</div>
	</div>
</div>

<div class="playList">

<div class="logo"><img src="<?php bloginfo('stylesheet_directory') ?>/images/PlayList.jpg"></div>
<div class="cover"><a href="https://open.spotify.com/user/djcarruesco/playlist/6vfP7YFM4GRP5zH5xDLzCN"><img src="<?php bloginfo('stylesheet_directory') ?>/images/spotifyIMG.png"></a></div>
<div class="text">
	<a href="https://open.spotify.com/user/djcarruesco/playlist/6vfP7YFM4GRP5zH5xDLzCN"> <h3>Damon Carruesco: Playlist</h3></a> <p>This Month Damon Carruesco, From chicago Band Disappears Currates and eccletic blak blah blah</p>
	<a href="https://open.spotify.com/user/djcarruesco/playlist/6vfP7YFM4GRP5zH5xDLzCN"><div class="rsvp">LISTEN</div></a>
</div>

</div>





<div class="intro otherheader">
<h2 align="center">Other Upcoming Events </h2>
</div>

<div class="container">



<?php
global $post;
$EM_Event = em_get_event($post->ID, 'post_id');
?>
<?php $events = EM_Events::get(array('orderby'=>'event_start_date,event_start_time', 'limit'=>12, 'offset'=>4, 'pagination'=>1));
foreach ( $events as $event ) 
{ ?>	
<article class="col span_4">
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
</div> <!--END CONTAINER -->











		
		


<?php get_footer(); ?>


