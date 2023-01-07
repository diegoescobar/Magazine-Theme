<?php
/**
 * The template for displaying archive pages
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
    <div class="<?php echo $colSizes; ?> columns">
		<?php if ( have_posts() ) : 
			if ( is_home() && ! is_front_page() ) :
			?>			 
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php endif; ?>
			<div class="row content-row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'archive' );

			endwhile;
			?></div><?php
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
