<article>

    <div class="row">
      <div class="large-6 columns">

      <?php _mag_post_thumbnail(); ?>
      </div>
      <div class="large-6 columns">
      <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
        <p>
          <span><i class="fi-torso"> <?php _mag_posted_by(); ?> &nbsp;&nbsp;</i></span>
          <span><i class="fi-calendar"> <?php echo get_the_date(); ?> &nbsp;&nbsp;</i></span>
          <?php /* <span><i class="fi-comments"> 6 comments</i></span> */?>
        </p>
        <?php 
        if (is_single()){
            the_content();
        } else {
            the_excerpt();
        }
        
        ?>
      </div>
    </div>

    <hr>

    </article>
    