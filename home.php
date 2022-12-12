
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



<div class="row column">
  <h4 style="margin: 0;" class="text-center">LATEST STORIES</h4>
</div>

<hr>

<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

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

                /*
                * Include the Post-Type-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                */
                get_template_part( 'template-parts/content', "home" );

            endwhile;

            magazine_numeric_posts_nav();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>


    


  </div>

    <?php if ( is_active_sidebar( 'mag_sidebar' ) ) { ?>
    <div class="large-4 columns" data-sticky-container>
        <aside class="sticky" data-sticky data-anchor="content">
            <?php get_sidebar(); ?>
        </aside>
    </div>
    <?php } ?>
</div>

	<main id="primary" class="site-main">
		<div class="row" id="content">
            <div class="large-12 columns">
                
	    	</div>
	    </div>
	</main><!-- #main -->

<?php

get_footer();
