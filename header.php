<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _magazine
 */

?>

<head>

	
	

	
</head>


<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
  <body>
<style>
  /*icon styles*/
  .fi-social-facebook {
    color: dodgerblue;
    font-size: 2rem;
  }
  .fi-social-youtube {
    color: red;
    font-size: 2rem;
  }
  .fi-social-pinterest {
    color: darkred;
    font-size: 2rem;
  }
  i.fi-social-instagram {
    color: brown;
    font-size: 2rem;
  }
  i.fi-social-tumblr {
    color: navy;
    font-size: 2rem;
  }
  .fi-social-twitter {
    color: skyblue;
    font-size: 2rem;
  }
</style>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_mag' ); ?></a>

	<header id="masthead" class="site-header">
  <!-- Sub Navigation -->
  <div class="top-bar">
    <div class="top-bar-left">
	  <?php
		wp_nav_menu(
			array(
				'theme_location' => 'top-menu',
				'menu_id'        => 'top-menu',
				'container'		=> 'ul',
				'items_wrap'      => '<ul class="menu">%3$s</ul>',
			)
		);
		?>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Search"></li>
        <li><button type="button" class="button">Search</button></li>
      </ul>
    </div>
  </div>
  <!-- /Sub Navigation -->

  <!-- logo and ad break -->
  <div class="row">
    <div class="medium-4 columns">
	<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			//<img src="https://via.placeholder.com//450x183&text=LOGO" alt="<?php bloginfo( 'name' ); ?>">
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$_mag_description = get_bloginfo( 'description', 'display' );
		if ( $_mag_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $_mag_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
      
    </div>
    <div class="medium-8 columns">
      <img src="https://via.placeholder.com//900x175&text=Responsive Ads - ZURB Playground/333" alt="advertisement for deep fried Twinkies">
    </div>
  </div>
  <!-- / logo and ad break -->

  <br>

  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
  </div>

  <div class="top-bar" id="main-menu">
    <ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">
      <?php /*<li class="has-submenu"><a href="#">Tech</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>*/?>
	  <?php
		wp_nav_menu(
			array(
				'theme_location' => 'main-menu',
				'menu_id'        => 'primary-menu',
			)
		);
		?>

    </ul>
  </div>

</header>
