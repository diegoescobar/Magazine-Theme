<?php
/**
 * _magazine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _magazine
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function _mag_setup() {

	load_theme_textdomain( '_mag', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support ( 'post-formats',  array( 'video', 'gallery' ) );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );

	register_nav_menus(
		array(
			'main-menu' 	=> esc_html__( 'Primary', '_mag' ),
			'top-menu'		=> esc_html__( 'Top Menu', '_mag' ),
			'legal-menu'	=> esc_html__( 'Legal Menu', '_mag' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// // Set up the WordPress core custom background feature.
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'_mag_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', '_mag_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _mag_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_mag_content_width', 640 );
}
add_action( 'after_setup_theme', '_mag_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _mag_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_mag' ),
			'id'            => 'mag_sidebar',
			'description'   => esc_html__( 'Add widgets here.', '_mag' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
	register_sidebar( 
		array(
			'name'          => esc_html__( 'Footer', '_mag' ),
			'id'            => 'mag_footerbar',
			'description'   => esc_html__( 'Add widgets here.', '_mag' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s small-12 large-4 columns">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar( 
		array(
			'name'          => esc_html__( 'Front Page', '_mag' ),
			'id'            => 'mag_front_sidebar',
			'description'   => esc_html__( 'Add widgets here.', '_mag' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s large-4 columns">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	
}
add_action( 'widgets_init', '_mag_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _mag_scripts() {
	// wp_enqueue_style( '_mag-extended', get_template_directory_uri() . '/foundation/foundation.css', array(), _S_VERSION );
	wp_enqueue_style( '_mag-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_enqueue_style( '_mag-extended', get_template_directory_uri() . '/css/magazine.css', array(), _S_VERSION );
	// wp_style_add_data( '_mag-style', 'rtl', 'replace' );

	wp_enqueue_script( '_mag-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( '_mag-reading-time', get_template_directory_uri() . '/js/reading-time.js', array(), _S_VERSION, true );

	wp_enqueue_script( '_mag-load-more',  get_template_directory_uri() . '/js/loadmore.js', array(), _S_VERSION, true );

	// wp_enqueue_script( '_mag-bionic-reader', get_template_directory_uri() . '/js/bionical-reader.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_mag_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
	// require get_template_directory() . '/inc/jetpack.php';
// }

require_once get_template_directory() . '/inc/common-functions.php';

// require_once get_template_directory() . '/updates/plugin_init.php';
require_once TEMPLATEPATH . '/updates/init.php';


require_once get_template_directory() . '/inc/custom-gallery.php';



function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
	if ( is_tag() ){
		$title = single_tag_title( '', false );
	}
    return $title;
}
// add_filter( 'get_the_archive_title', 'prefix_category_title' );