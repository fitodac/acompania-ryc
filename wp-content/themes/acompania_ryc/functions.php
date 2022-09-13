<?php
defined( 'ABSPATH' ) || exit;

/**
 * acompania_ryc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package acompania_ryc
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	// define( '_S_VERSION', '1.0.0' );
	define( '_S_VERSION', rand() );
}

if ( ! function_exists( 'acompania_ryc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function acompania_ryc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on acompania_ryc, use a find and replace
		 * to change 'acompania_ryc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'acompania_ryc', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'acompania_ryc' ),
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
				'acompania_ryc_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'acompania_ryc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function acompania_ryc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'acompania_ryc_content_width', 640 );
}
add_action( 'after_setup_theme', 'acompania_ryc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function acompania_ryc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'acompania_ryc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'acompania_ryc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'acompania_ryc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function acompania_ryc_scripts() {
	wp_enqueue_style( 'acompania_ryc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'acompania_ryc-style', 'rtl', 'replace' );

	wp_enqueue_style( 'fonts-google', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', ['acompania_ryc-style'], _S_VERSION, 'screen');

	wp_enqueue_style('block-modal', get_template_directory_uri().'/assets/css/block-modal.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('material-icons', get_template_directory_uri().'/assets/vendors/material-icons/material-icons.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendors/bootstrap/bootstrap.min.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('bsnav', get_template_directory_uri().'/assets/vendors/bsnav/bsnav.min.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('slick', get_template_directory_uri().'/assets/vendors/slick/slick.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('simple-lightbox', get_template_directory_uri().'/assets/vendors/simple-lightbox/simple-lightbox.min.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('nitro', get_template_directory_uri().'/assets/vendors/nitro/nitro.min.css', ['acompania_ryc-style'], _S_VERSION, 'screen');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', ['acompania_ryc-style', 'bsnav'], _S_VERSION, 'screen');
	wp_enqueue_style('ryc', get_template_directory_uri().'/assets/css/ryc.css', ['acompania_ryc-style', 'bsnav'], _S_VERSION, 'screen');

	wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/vendors/jquery/jquery.2.1.4.min.js', [], _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/vendors/slick/slick.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'jarallax', get_template_directory_uri().'/assets/vendors/jarallax/jarallax.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'bsnav', get_template_directory_uri().'/assets/vendors/bsnav/bsnav.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'bsnav', get_template_directory_uri().'/assets/vendors/bsnav/bsnav.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/vendors/bootstrap/bootstrap.bundle.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'shuffle', get_template_directory_uri().'/assets/vendors/shuffle/shuffle.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'simple-lightbox', get_template_directory_uri().'/assets/vendors/simple-lightbox/simple-lightbox.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'base', get_template_directory_uri().'/assets/js/base.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'nitro', get_template_directory_uri().'/assets/vendors/nitro/nitro.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.ryc.js', ['jquery'], _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'acompania_ryc_scripts' );



add_filter( 'style_loader_tag', 'add_id_to_script', 10, 3 );

function add_id_to_script( $tag, $handle, $source ) {
	if( 'fonts-google' === $handle ){
		$tag = '<link rel="preconnect" href="https://fonts.googleapis.com">'
			.'<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'
			.'<link id="fonts-google-css" href="' . $source . '" rel="stylesheet">';
	}

	return $tag;
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';



function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );