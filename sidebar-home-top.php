<?php
/**
 * The Footer Sidebar
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-home-top' ) ) {
	return;
}
?>
		<?php dynamic_sidebar( 'sidebar-home-top' ); ?>
