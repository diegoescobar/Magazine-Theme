<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _magazine
 */

?>
<article id="content post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_mag' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_mag' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<div class="callout">
		<ul class="menu simple">
			<div class="entry-meta">
			<?php
			_mag_posted_on();
			_mag_posted_by();
			?>
			</div><!-- .entry-meta -->
		</ul>
	</div>

	<footer class="entry-footer">
		<?php _mag_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->