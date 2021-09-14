<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MusicInc
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'musicinc' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <nav class="navbar navbar-fixed-top">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-navigation" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="container">
                <div class="header-logo">
                    <a href="<?php echo home_url() ?>">
                        <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/musicinclogo_sm300.png" />
                    </a>   
                </div><!-- .header-logo -->
                <div id="site-navigation" class="main-navigation navbar-collapse collapse">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'primary-menu', 
                            'menu_id' => 'primary-menu', 
                            'container' => false, 
                            'menu_class' =>'nav nav-menu navbar-nav navbar-right' ) 
                        ); 
                    ?>
                </div><!--/.nav-collapse -->
                <div id="header-top-links">
                    <a href="/register">Register</a>
                    <a href="/donate" style="display: inline-block;" class="donate-button">DONATE</a>
                </div>
            </div>
        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
