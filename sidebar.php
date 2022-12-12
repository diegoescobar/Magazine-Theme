<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _magazine
 */

if ( ! is_active_sidebar( 'mag_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'mag_sidebar' ); ?>
</aside><!-- #secondary -->
