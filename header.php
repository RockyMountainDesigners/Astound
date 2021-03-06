				<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astound
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'astound' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
		<div class="site-branding col-md-12 col-lg-3">
			<?php if ( has_header_image() ){ ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-image" src="<?php echo(get_header_image());?>" alt="<?php echo(get_bloginfo('title'));?>"/></a>
			<?php }else{ ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-descrition"><?php bloginfo( 'description' ); ?></p>
			<?php } ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-md-12 col-lg-9" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<nav id="site-navigation-mobile" class="main-navigation col-md-12 col-lg-12" role="navigation">
			<span id="mobile-menu-button" class="fa fa-bars" aria-controls="primary-menu" aria-expanded="false" role="button"></span>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation-mobile -->
	</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
