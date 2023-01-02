<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _magazine
 */

?>
	</div>
</main><!-- #main -->

<footer>
  <div class="row expanded callout">

<?php if ( is_active_sidebar( 'mag_footerbar' ) ) : ?>
    <?php dynamic_sidebar( 'mag_footerbar' ); ?>
<?php endif; ?>

  </div>
  <div class="row expanded">
    <div class="medium-6 columns">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'legal-menu',
            'menu_id'        => 'legal-menu',
            'container'		=> 'ul',
            'items_wrap'      => '<ul class="menu">%3$s</ul>',
          )
        );
      ?>
    </div>

    <div class="medium-6 columns">
      <ul class="menu align-right">
        <li class="menu-text">Copyright © <?php echo date('Y');?> <?php bloginfo( 'name' ); ?></li>
      </ul>
    </div>
  </div>
</footer>

    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
