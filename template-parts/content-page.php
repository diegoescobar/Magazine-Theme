<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _magazine
 */

?>


    <!-- We can now combine rows and columns when there's only one column in that row -->
    <div class="row medium-8 large-7 columns">
      <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	  	<header class="entry-header">
        	<h3><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h3>
		</header><!-- .entry-header -->
        <?php _mag_post_thumbnail(); ?>
        <?php the_content(); ?>
        <div class="callout">
          <ul class="menu simple">
		  <?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', '_mag' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>

				<?php

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_mag' ),
						'after'  => '</div>',
					)
				);
				?>

			</footer><!-- .entry-footer -->
		<?php endif; ?>
          </ul>
        </div>
		</article>
    </div>

	


