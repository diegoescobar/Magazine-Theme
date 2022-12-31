
<?php
/**
 * The home template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _magazine
 */

get_header();
?>



<hr>

<div class="container">
  <div class="row" style="border-right: 1px solid #E3E5E8;">

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

                get_template_part( 'template-parts/content', "home" );

            endwhile;

            ?>
    </div>
    
    <?php
            magazine_numeric_posts_nav();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
    ?>



    <?php /* if ( is_active_sidebar( 'mag_sidebar' ) ) { ?>
    <div class="large-3 columns" data-sticky-container>
        <aside class="sticky" data-sticky data-anchor="content">
            <?php dynamic_sidebar( 'mag_sidebar' ); ?>
        </aside>
    </div>
    <?php } */ ?>
</div>

<?php

get_footer();
