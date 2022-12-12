
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


<?php /** HERO *//*?>
<div class="row">
  <div class="medium-8 columns">
    <p><img src="https://via.placeholder.com//900x450&text=Promoted Article" alt="main article image"></p>
  </div>
  <div class="medium-4 columns">
    <p><img src="https://via.placeholder.com//400x200&text=Other cool article" alt="article promo image" alt="advertisement for deep fried Twinkies"></p>
    <p><img src="https://via.placeholder.com//400x200&text=Other cool article" alt="article promo image"></p>
  </div>
</div>
<?php *//** HERO */?>
<hr>


<?php /** News *//*?>
<div class="row column">
  <h4 style="margin: 0;" class="text-center">BREAKING NEWS</h4>
</div>

<hr>

<div class="row small-up-3 medium-up-4 large-up-5">

  <div class="column">
    <img src="https://via.placeholder.com//400x370&text=Look at me!" alt="image for article">
  </div>

  <div class="column">
    <img src="https://via.placeholder.com//400x370&text=Look at me!" alt="image for article">
  </div>

  <div class="column">
    <img src="https://via.placeholder.com//400x370&text=Look at me!" alt="image for article">
  </div>

  <div class="column show-for-medium">
    <img src="https://via.placeholder.com//400x370&text=Look at me!" alt="image for article">
  </div>

  <div class="column show-for-large">
    <img src="https://via.placeholder.com//400x370&text=Look at me!" alt="image for article">
  </div>

</div>
<?php *//** News */?>
<hr>

<div class="row column">
  <h4 style="margin: 0;" class="text-center">LATEST STORIES</h4>
</div>

<hr>

<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

  <article>

    <div class="row">
      <div class="large-6 columns">
        <p><img src="https://via.placeholder.com//600x370&text=Look at me!" alt="image for article" alt="article preview image"></p>
      </div>
      <div class="large-6 columns">
        <h5><a href="#">'Death Star' Vaporizes Its Own Planet</a></h5>
        <p>
          <span><i class="fi-torso"> By Thadeus &nbsp;&nbsp;</i></span>
          <span><i class="fi-calendar"> 11/23/16 &nbsp;&nbsp;</i></span>
          <span><i class="fi-comments"> 6 comments</i></span>
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit beatae, ipsum delectus aperiam nesciunt magni facilis ullam.</p>
      </div>
    </div>

    <hr>

    <ul class="pagination" role="navigation" aria-label="Pagination">
      <li class="disabled">Previous <span class="show-for-sr">page</span></li>
      <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
      <li><a href="#" aria-label="Page 2">2</a></li>
      <li><a href="#" aria-label="Page 3">3</a></li>
      <li><a href="#" aria-label="Page 4">4</a></li>
      <li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>

      <?php //wp_pagenavi(); ?>
      <?php magazine_numeric_posts_nav(); ?>
    </ul>

    </article>

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
                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
	    	</div>
	    </div>
	</main><!-- #main -->

<?php

get_footer();
