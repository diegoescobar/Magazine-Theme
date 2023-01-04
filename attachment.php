<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _magazine
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="row align-center" id="content">
			<div class="small-12 medium-8 columns">
			<?php
			if ( have_posts() ) :


				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'attachment' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>
			<?php if ( is_active_sidebar( 'mag_sidebar' ) ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
