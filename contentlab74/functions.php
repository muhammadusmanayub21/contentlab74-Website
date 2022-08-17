<?php
/**
 * ContentLab74 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ContentLab74
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function contentlab74_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ContentLab74, use a find and replace
		* to change 'contentlab74' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'contentlab74', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'contentlab74' ),
		)
	);
}
add_action( 'after_setup_theme', 'contentlab74_setup' );


function contentlab47_widgets_init() {
 
	register_sidebar( array(
	  'name'          => __( 'footer Widget 1', 'contentlab47' ),
	  'id'            => 'footer-1',
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h3 class="widget-title">',
	  'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
	'name'          => __( 'footer widget 2', 'contentlab47' ),
	'id'            => 'footer-2',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
	'name'          => __( 'footer widget 3', 'contentlab47' ),
	'id'            => 'footer-3',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
  ) );
  }
  add_action( 'widgets_init', 'contentlab47_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function contentlab74_scripts() {

	wp_enqueue_script( 'contentlab74-navigation', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'contentlab74_scripts' );

