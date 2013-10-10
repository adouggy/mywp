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

				

<!-- Title end -->
<!--
<div id="page" class="hfeed site">
-->
	<!--
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>
	-->
	<!-- #site-navigation -->
	<!--
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header>
	-->
	<!-- #masthead -->
<!--
	<div id="main" class="wrapper"> -->