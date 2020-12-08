<?php
/**
 * kenhcuoi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kenhcuoi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kenhcuoi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kenhcuoi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kenhcuoi, use a find and replace
		 * to change 'kenhcuoi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kenhcuoi', get_template_directory() . '/languages' );

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
				'menu_left' => esc_html__( 'Menu Left', 'kenhcuoi' ),
				'menu_right' => esc_html__( 'Menu Right', 'kenhcuoi' ),
				'menu_bo_suu_tap' => esc_html__( 'Menu Bo Suu Tap', 'kenhcuoi' ),
				'menu_copyright' => esc_html__( 'Menu Copyright Footer', 'kenhcuoi' ),
				'menu_top' => esc_html__( 'Menu Top', 'kenhcuoi' ),
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
				'kenhcuoi_custom_background_args',
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
add_action( 'after_setup_theme', 'kenhcuoi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kenhcuoi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kenhcuoi_content_width', 640 );
}
add_action( 'after_setup_theme', 'kenhcuoi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kenhcuoi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kenhcuoi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kenhcuoi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="box-title-1"> <h4 class="widget-title text-uppercase text-accent">',
			'after_title'   => '</h4> </div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'kenhcuoi' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'kenhcuoi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s col-sm-4 col-md-4">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title text-uppercase">',
			'after_title'   => '</h3><div class="margin-box"></div>',
		)
	);
}
add_action( 'widgets_init', 'kenhcuoi_widgets_init' );

// shortcode
require('inc/custom-widgets.php');
require('inc/widgets/widget-info.php');
require('inc/widgets/widget-service.php');
require('inc/widgets/widget-connect.php');
require('inc/shortcodes/wpp-popular-shortcode.php');
require('inc/shortcodes/post-custom-tax.php');
require('inc/shortcodes/popular-tags.php');

add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'widget_title', 'do_shortcode' );


/**
 * Enqueue scripts and styles.
 */
function kenhcuoi_scripts() {
	wp_enqueue_style( 'kenhcuoi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kenhcuoi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kenhcuoi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// styles
	wp_enqueue_style( 'kenhcuoi-main', get_template_directory_uri() . '/src/assets/css/main.css', array(), _S_VERSION);
	wp_enqueue_style( 'kenhcuoi-custom', get_template_directory_uri() . '/src/custom/custom.css', array(), _S_VERSION);
	wp_enqueue_style( 'kenhcuoi-mmenu', get_template_directory_uri() . '/src/assets/css/0-tools/mmenu/jquery.mmenu.all.css', array(), _S_VERSION);

	// scripts
	wp_enqueue_script( 'kenhcuoi-jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-bootstrap', get_template_directory_uri() . '/src/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-jquery.easing', get_template_directory_uri() . '/src/assets/js/jquery.easing.1.3.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-mmenu', get_template_directory_uri() . '/src/assets/js/jquery.mmenu.all.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-mmenu-bootstrap', get_template_directory_uri() . '/src/assets/js/jquery.mmenu.bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-owl.carousel', get_template_directory_uri() . '/src/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-countdown', get_template_directory_uri() . '/src/assets/js/jquery.countdown.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-bootstrap-select', get_template_directory_uri() . '/src/assets/js/bootstrap-select.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kenhcuoi-functions', get_template_directory_uri() . '/src/assets/js/functions.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kenhcuoi_scripts' );

/**
 * Options Page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require('inc/class-kenhcuoi-custom-nav.php');
}
add_action( 'after_setup_theme', 'register_navwalker' );


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




// show widget ID
function awts_get_widget_id($widget_instance) {
	// Check if the widget is already saved or not.
	if ($widget_instance->number=="__i__"){
		echo "<p><strong>Widget ID is</strong>: Pls save the widget first!</p>" ;
	} else {
		echo "<p><strong>Widget ID is: </strong>" .$widget_instance->id. "</p>";
	}
}

add_action('in_widget_form', 'awts_get_widget_id');

function excerpt_custom( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'excerpt_custom', 999 );

function wpdocs_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );