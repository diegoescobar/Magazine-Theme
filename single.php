<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _magazine
 */


if ( is_active_sidebar( 'mag_sidebar' )  && !has_post_format( 'gallery' ) ) { 
	$colSizes = "small-12 medium-8";
} else {
	$colSizes = "small-12 medium-10";
}

get_header();
?>

	<div class="row <?php echo $colSizes; ?> columns">	
		<?php
		while ( have_posts() ) :

			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', '_mag' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', '_mag' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>

	
	<?php if ( is_active_sidebar( 'mag_sidebar' )  && !has_post_format( 'gallery' ) ) { ?>
		<?php get_sidebar(); ?>
	<?php } ?>

<?php
get_footer();
