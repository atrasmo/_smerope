
<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	<div id="sidebar-right" class="sidebar-right widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-right' ); ?>
	</div><!-- #sidebar-right -->
	<?php endif; ?><!-- #secondary-right -->
