<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory') ?>/images/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- JS HERE-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/respond.min.js"></script>
<script type="text/javascript" src="http://stickyjs.com/jquery.sticky.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/divPeek.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/modernizr.js"></script> <!-- Modernizr -->
<!--END JS-->

<!-- STYLE-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<!-- END STYLE-->
<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- END FONTS-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  data-animation="catch">

<wrapper>


<header>
        	
		<div class="container row">
								<div style="padding:20px;">
								<a href="http://melanie-f.com/en/">Example Site </a> | 
								<a href="http://jsfiddle.net/u5c51ubk/3/">jsfiddle</a> | 
								<a href="http://keithclark.co.uk/articles/pure-css-parallax-websites/demo3/">PARALAX</a>
								</div>
			<div class="nav-icon"><img src="<?php bloginfo('stylesheet_directory') ?>/images/logo-icon.png"></div>
			
			<nav>
			<label for="show-menu" class="show-menu"><i class="fa fa-bars"></i></label>
			<input type="checkbox" id="show-menu" role="button">
			 
				
					<?php

					$defaults = array(
						'menu_id'         => 'menu',
						'walker'          => ''
					);
					wp_nav_menu( $defaults );

				?>
				<div class="clear"></div>
				<ul id="menu">
					<div class="socialDropdown">
						<li>
							[Social Media]
						</li>
					</div>
				</ul>
				
			</nav>
		</div>
		
		
	
</header>    
 </wrapper>
  <div class="hidden"></div>  
    
    

	


         