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
	<header class="entry-header">
	
	</header><!-- .entry-header -->

	

	<div class="entry-content">

        <div class="entry-attachment">
            <?php
            $image_size = apply_filters( 'wporg_attachment_size', 'large' );
            echo wp_get_attachment_image( get_the_ID(), $image_size );
            ?>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-caption -->
            <?php endif; ?>
        </div><!-- .entry-attachment -->

		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_mag' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<div class="callout">
        <?php
            if ( is_singular() ) :
                the_title( '<p class="entry-title">', '</p>' );
            else :
                the_title( '<p class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</p>' );
            endif;
        ?>

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
</article>#post-<?php the_ID(); ?>