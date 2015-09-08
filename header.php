<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package shapeshifter
 * @since shapeshifter 1.0
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
     <header id="masthead" class="site-header" role="banner">
	<div class="top-bar">
     	<div class="nav-bar">
         	<div class="left-bar">
				  <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				  <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		 	</div>
		 	<div class="right-bar">
		 		<div class="site-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
		 	</div>
		</div>
	</div>
         <nav id="site-navigation" class="navigation main-navigation" role="navigation">
		      <h1 class="assistive-text"><?php _e( 'Menu', 'shapeshifter' ); ?></h1>
		      <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'shapeshifter' ); ?>"><?php _e( 'Skip to content', 'shapeshifter' ); ?></a></div>

		      <?php wp_nav_menu( array( 'theme_location' => 'primary-mobile', 'menu_class' => 'nav-menu-mobile' ) ); ?>
		 </nav><!-- .site-navigation .main-navigation -->
     </header><!-- #masthead .site-header -->
<div id="main" class="site-main">