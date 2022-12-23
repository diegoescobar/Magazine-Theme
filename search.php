<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _magazine
 */

get_header();
?>

	
<div class="small-12 medium-7 columns">

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', '_mag' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</header><!-- .page-header -->

	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/**
		 * Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called content-search.php and that will be used instead.
		 */
		get_template_part( 'template-parts/content', 'search' );

	endwhile;

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
