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
?><!DOCTYPE html>
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
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-43326950-1', 'promenade.me');
  ga('send', 'pageview');
</script>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
	<!-- Title -->
	<div class="title">
		<div class="title-top">
		<div class="title-left">
		<div class="title-right">
		<div class="title-bottom">
		<div class="title-top-left">
		<div class="title-bottom-left">
		<div class="title-top-right">
		<div class="title-bottom-right">
			<div class="ade">
				<h1 class="ade"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go to homepage"><span>promenade.me</span></a></h1>
			</div>
			<p>ade是个码农兼孩儿他爹，ade立志做个贤妻良母&hellip;</p>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</div>

	<hr class="noscreen" />

	<div class="content">
	<div class="column-left">

		<!--<h3>Menu</h3>-->
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<div class="ade">
			<ul class="menu">
				<!--class="active"-->
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" >home sweet home</a></li>
				<?php wp_list_pages('title_li='); ?>
				<li ><a href="http://www.sissifox.com" target="newWindow">hi, Sissi</a></li>
				<li ><a href="http://gathering.promenade.me" target="newWindow">highSchool gathering</a></li>


				 <?php $args = array(
				    'smallest'                  => 8, 
				    'largest'                   => 22,
				    'unit'                      => 'pt', 
				    'number'                    => 45,  
				    'format'                    => 'flat',
				    'separator'                 => " ",
				    'orderby'                   => 'name', 
				    'order'                     => 'ASC',
				    'exclude'                   => null, 
				    'include'                   => null, 
				    'topic_count_text_callback' => default_topic_count_text,
				    'link'                      => 'view', 
				    'taxonomy'                  => 'post_tag', 
				    'echo'                      => true,
				     'child_of'                   => null
				); ?>
				<li><h4>per tag blog</h4><br />
				<?php wp_tag_cloud( $args ); ?> 
				</li>

				<li>
				 <?php get_search_form(); ?> 
				</li>


			</ul>
		</div>
		</div>
		
		<div id="skip-menu"></div>
		<div class="column-right" >
			<div class="box">
				<div class="box-top"></div>


				<div class="box-in" id="main-content">
					<div id="main" class="wrapper">				

				

