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


if ( is_active_sidebar( 'mag_sidebar' )  && !has_post_format( 'gallery' ) ) { 
	$colSizes = "small-12 medium-8";
 } else {
	$colSizes = "small-12 medium-10";
 }

?>

	<main id="primary" class="site-main">
		<div class="row" id="content">
      	<div class="<?php echo $colSizes; ?> columns">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

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
