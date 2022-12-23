<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _magazine
 */

get_header();
?>
      	<div class="small-12 medium-8 columns">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			// the_posts_navigation();

		 	magazine_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		<?php if ( is_active_sidebar( 'mag_sidebar' ) ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
	

<?php
get_footer();
