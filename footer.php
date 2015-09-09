<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Orgogliosamente motorizzato con %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
        <?php printf( esc_html__( 'Tema: %1$s by %2$s', '_smerope' ), '_s', '<a href="http://www.genitorimerope.it" rel="designer">Comitato Genitori Ic Via Merope</a>' );?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>

  <script>
    $( document ).ready(function() {
          $(".button-collapse").sideNav({
                                          menuWidth: 320,
                                          edge: 'right',
                                          closeOnClick: true
    });
    });
    $( document ).ready(function() {
          $(".button-collapse-left").sideNav({
                                          menuWidth: 240,
                                          edge: 'left',
                                          closeOnClick: true
    });
    });
  </script>
</body>
</html>
