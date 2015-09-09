<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content" alt="skip to content" ><?php esc_html_e( 'Vai al contenuto', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding cf">
          <a id="logo" class ="s" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Ritorna alla homepage">
            <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/_smerope/images/logomerope.jpeg" alt="logo della scuola" />
          </a>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title s"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="site-title s"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
			<p class="site-description s"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

    <nav role="navigation" class="main-navigation indigo darken-4 bloccato">
    <div class="nav-wrapper container">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' , 'container' =>'' , 'menu_class' =>'left hide-on-med-and-down')); ?> 

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'menu_globale', 'menu_id' => 'menu_globale' ,'items_wrap'=>'<ul id="nav-mobile" class="side-nav right-aligned">%3$s</ul>', 'container' =>'')); ?> 
  		
      <a href="#" data-activates="nav-mobile" class="button-collapse"><span class="material-icons" role="presentation">menu</span></a>

    </div>
    <?php get_search_form(); ?>
		</nav><!-- #site-navigation -->
    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
