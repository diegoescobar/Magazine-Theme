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

$stickyAside = get_option( 'sticky_aside', false );

?>
	<div class="small-12 medium-3 columns" <?php if ($stickyAside) echo "data-sticky-container"; ?>>
		<div class="sticky"  <?php if ($stickyAside) echo 'data-sticky data-anchor="content"'; ?>>
			<aside id="secondary" class="widget-area">
				<?php dynamic_sidebar( 'mag_sidebar' ); ?>
			</aside><!-- #secondary -->
		</div>
	</div>

