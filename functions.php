<?php
/**
 * PiedmontGlobal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PiedmontGlobal
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
function pg_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on PiedmontGlobal, use a find and replace
		* to change 'pg' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pg', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pg' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pg_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
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
add_action( 'after_setup_theme', 'pg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pg_content_width', 640 );
}
add_action( 'after_setup_theme', 'pg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pg_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pg' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pg_scripts() {
	// Tailwind CSS
	$tailwind_path = get_template_directory() . '/assets/css/output.css';
	$tailwind_uri  = get_template_directory_uri() . '/assets/css/output.css';

	if ( file_exists( $tailwind_path ) ) {
		wp_enqueue_style(
			'pg-tailwind',
			$tailwind_uri,
			array(),
			filemtime( $tailwind_path )
		);
	} else {
		if ( WP_DEBUG ) {
			error_log( 'Missing Tailwind CSS: ' . $tailwind_path );
		}
	}

	// Alpine.js (self-hosted)
	$alpine_path = get_template_directory() . '/assets/js/alpine.min.js';
	$alpine_uri  = get_template_directory_uri() . '/assets/js/alpine.min.js';

	if ( file_exists( $alpine_path ) ) {
		wp_enqueue_script(
			'pg-alpine',
			$alpine_uri,
			array(),
			filemtime( $alpine_path ),
			true // footer
		);
	} else {
		if ( WP_DEBUG ) {
			error_log( 'Missing Alpine JS: ' . $alpine_path );
		}
	}

	// Navigation JS
	$nav_path = get_template_directory() . '/js/navigation.js';
	$nav_uri  = get_template_directory_uri() . '/js/navigation.js';

	if ( file_exists( $nav_path ) ) {
		wp_enqueue_script(
			'pg-navigation',
			$nav_uri,
			array( 'pg-alpine' ), // Depend on Alpine
			filemtime( $nav_path ),
			true // footer
		);
	} else {
		if ( WP_DEBUG ) {
			error_log( 'Missing Navigation JS: ' . $nav_path );
		}
	}

	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pg_scripts' );



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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
