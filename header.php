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

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
	<!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.css"> -->
	
	<?php wp_head(); ?>
    
  </head>
  <body>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_mag' ); ?></a>

	<div data-sticky-container>
  <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%">
    <div class="title-bar-left"><!-- Content --></div>
    <div class="title-bar-right"><!-- Content --></div>
  </div>
</div>


<header id="masthead" class="site-header">
		<!-- Sub Navigation -->
		<div class="top-bar branding">
			<div class="top-bar-left">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					//<img src="https://via.placeholder.com//450x183&text=LOGO" alt="<?php bloginfo( 'name' ); ?>">
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<?php
				endif;
				$_mag_description = get_bloginfo( 'description', 'display' );
				if ( $_mag_description || is_customize_preview() ) :
					?>
					<div class="site-description"><?php echo $_mag_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
				<?php endif; ?>
			</div>
				
			<div class="top-bar-right">
				<div data-responsive-toggle="top-bar-menu" data-hide-for="medium">
					<button class="menu-icon" type="button" data-toggle></button>
					<div class="title-bar-title">Menu</div>
				</div>
			</div>
		</div>
		<div class="top-bar" id="top-bar-menu">
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
				<?php get_search_form(); ?>
			</div>
		</div>
	<!-- /Sub Navigation -->
</header>

<?php if (is_home() || is_front_page()) { ?>
	<section>
	<!-- logo and ad break -->
	<div class="row">
		<div class="medium-4 columns">
			<ul class="menu vertical medium-text-center" data-responsive-menu="drilldown medium-dropdown">
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
		<div class="small-12 medium-8 columns">
		<img src="https://via.placeholder.com//900x175&text=Responsive Ads - ZURB Playground/333" alt="advertisement for deep fried Twinkies">
		</div>
	</div>
	<!-- / logo and ad break -->
	<br>
	<div class="top-bar" id="main-menu">
		<ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">
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
</section>
<?php } ?>
<main id="primary" class="site-main grid-container">
	<div class="row  align-center" id="content">