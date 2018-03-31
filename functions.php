<?php
/**
 * amica_ev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package amica_ev
 */

if ( ! function_exists( 'amica_ev_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function amica_ev_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on amica_ev, use a find and replace
		 * to change 'amica_ev' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'amica_ev', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'amica_ev' ),
			'header' => esc_html__( 'Header', 'amica_ev' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'amica_ev_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


		// add a new image size for the big content slider
		add_image_size( 'slider_image_big', 1000, 500, true );
	}
endif;
add_action( 'after_setup_theme', 'amica_ev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amica_ev_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'amica_ev_content_width', 640 );
}

add_action( 'after_setup_theme', 'amica_ev_content_width', 0 );
remove_filter( 'the_content', 'wpautop' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

// Register Footer Areas
function amica_ev_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'First Footer Widget Area', 'amica_ev' ),
		'id'            => 'first-footer-widget-area',
		'description'   => esc_html__( 'Add first footer widgets here.', 'amica_ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Second Footer Widget Area', 'amica_ev' ),
		'id'            => 'second-footer-widget-area',
		'description'   => esc_html__( 'Add Second footer widgets here.', 'amica_ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Third Footer Widget Area', 'amica_ev' ),
		'id'            => 'third-footer-widget-area',
		'description'   => esc_html__( 'Add Third footer widgets here.', 'amica_ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'First Footer Second Layer Widget Area', 'amica_ev' ),
		'id'            => 'first-footer-second-layer-widget-area',
		'description'   => esc_html__( 'Add First footer widgets for the Second Layer here.', 'amica_ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Second Footer Second Layer Widget Area', 'amica_ev' ),
		'id'            => 'second-footer-second-layer-widget-area',
		'description'   => esc_html__( 'Add Second footer widgets for the Second Layer here.', 'amica_ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Third Footer Second Layer Widget Area', 'amica_ev' ),
		'id'            => 'third-footer-second-layer-widget-area',
		'description'   => esc_html__( 'Add third footer widgets for the Second Layer here.', 'amica_ev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'amica_ev_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amica_ev_scripts() {
	wp_enqueue_script( 'amica_ev-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// add bootstrap 4 to the amica.
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_style( 'bootstrap-css' );
	// add font awesom to amica.
	wp_register_style( 'font-awesom-css', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style( 'font-awesom-css' );
	// Add vendor JS scripts to the template.
	wp_register_script( 'jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array( 'jquery' ), '1.4.1', true );
	wp_enqueue_script( 'jquery-easing' );
	wp_register_script( 'scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'scrollreveal' );
	wp_register_script( 'magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );
	wp_enqueue_script( 'magnific-popup' );
	// add the main amica js file to the template.
	wp_register_script( 'amica_main_js', get_template_directory_uri() . '/js/amica_ev.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'amica_main_js' );
	// add the main theme style at last point - override some other stuff.
	wp_enqueue_style( 'amica_ev-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'amica_ev_scripts' );


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
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' ) ) {
	require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}
