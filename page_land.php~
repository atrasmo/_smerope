<?php
/**
 * Template Name: LandPage
 *
 * @package _s
 * The template for displaying all pages.
 *
 * This is the template that displays home pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<div id ="pagecontainer" class="container">
 <div class="row">
    <div class="col l2 hide-on-med-and-down">
    <?php get_sidebar(); ?>
  </div>
  <div class="col l8 m12 s12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
     <header class="row"> 
      <?php get_sidebar('home-top'); ?> 
     </header>
     <hr class="separator">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'pageland' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
 </div><!--col-->
  <div class="col l2 hide-on-med-and-down">
  <?php get_sidebar('right');?>
</div>
</div><!-- #row-->
</div><!-- #row container-->
<?php get_footer(); ?>
