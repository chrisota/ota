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

<meta name="author" content="Chris Ota" />
<meta name="google-site-verification" content="YZw8z7wqvlCFY0S9op28LZVeBC16nxOOjueuaVZb844" />
<meta name="description" content="I am Chris Ota, a Hawaii web designer, instructor and AIGA board member. I am passionate about user interfaces, front end development & SEO.
Let's work together to build a website that is pixel perfect." />
<meta name="keywords" content="hawaii web design, web design, otadesigns, ota designs, honolulu, chris ota, hawaii web designer, photoshop, SEO, HTML, CSS, user interface, web standards, web design blog, otadesign, ota design, AIGA, KCC" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>
/js/scripts.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:300,300italic,700' rel='stylesheet' type='text/css'>


</head>

<body <?php body_class(); ?>>

<?php if (is_front_page() && !is_paged()) : ?>
<header id="intro">
	<div class="container">
    	<div class="sixteen columns">
             <section>        
                <div class="head-dev hidden-phone" id="head-dev-mon"></div>
                <div class="head-dev hidden-phone" id="head-dev-lap"></div>
                <div class="head-dev head-dev-white hidden-phone" id="head-dev-mini">
                	<span>&bull;</span>
                </div>
                <div class="head-dev hidden-phone" id="head-dev-pho">
                	<span>&bull;</span>
                </div>
                <div class="head-dev head-dev-white" id="head-dev-main">
                	<span class="hidden-phone">&bull;</span>
                    <blockquote>
                        <p>Design depends largely on constraints</p>
                        <span>-</span>
                        <footer>Charles Eames</footer>
                    </blockquote>
                </div>
            </section>
        </div>    
    </div>
</header>
<?php endif; ?>

<div id="main-nav-wrapper">
	<div id="main-nav">
        <nav class="container">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> | Hawaii Web Design | User Interface Designer" rel="home"><span><?php bloginfo( 'name' ); ?>Home - Hawaii Web Design - User Interface Designer</span><span class="icons">&#8962;</span></a></h1>
            <div class="nav">
              <input type='checkbox' id='toggle'/>
              <label for='toggle' class='toggle' data-open='&#9776;' data-close='☰'></label>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?>
            </div>
        </nav>
	</div>
</div>

<!-- Begin Page -->
<div class="wrapper hfeed" id="wrapper-01">
	<div class="container">