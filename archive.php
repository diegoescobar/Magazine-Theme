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

	<main id="primary" class="site-main">
		<div class="row" id="content">
      	<div class="medium-8 columns">
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

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'home' );

			endwhile;

			the_posts_navigation();

		 	magazine_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		<?php if ( is_active_sidebar( 'mag_sidebar' ) ) { ?>
		<div class="medium-3 columns" data-sticky-container>
			<div class="sticky" data-sticky data-anchor="content">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php } ?>
	</main><!-- #main -->

<?php
get_footer();
