<?php
/**
 * Best Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Best_Theme
 */

if ( ! function_exists( 'best_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function best_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'footer' => esc_html( 'Footer Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // best_setup
add_action( 'after_setup_theme', 'best_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function best_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'best_content_width', 640 );
}
add_action( 'after_setup_theme', 'best_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function best_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'best_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function best_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'best_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function best_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	// font awesome//
	wp_enqueue_style('best-fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');

	wp_enqueue_style('best-hamburger', 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.css');

	wp_enqueue_script( 'best-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'best-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	// Add Custom Script
	wp_enqueue_script('best-scripts', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), '', true);
	// wp_enqueue_script('best-custom-scripts', get_template_directory_uri() . 'Assets/vector-icons/icons/chevrons/down.svg');
	// wp_localize_script('best-custom-scripts', 'bestCustomScripts', array('theme_directory' => get_template_directory_uri()));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'best_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
