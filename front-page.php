
<?php
/**
 * The Front Page template file
 *

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _magazine
 */

get_header();
?>


<?php if ( is_active_sidebar( 'mag_front_sidebar' ) ) { ?>
    <div id="content" class="large-8 columns">
<?php } else { ?>
    <div id="content" class="large-12 columns">
<?php } ?>    
<?php
    if ( have_posts() ) :
        if ( is_home() && ! is_front_page()  && !is_paged()) :
            ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
            <?php
        endif;

        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'front');

        endwhile;

        echo '<hr>';

        magazine_numeric_posts_nav();

    else :
        get_template_part( 'template-parts/content', 'none' );
    endif;
?>
</div>

    <?php if ( is_active_sidebar( 'mag_front_sidebar' ) ) { ?>
        <div class="large-4 columns">
            <?php dynamic_sidebar( 'mag_front_sidebar' ); ?>
        </div>
    <?php } ?>
</div>

<?php

get_footer();
