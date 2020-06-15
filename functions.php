<?php
/**
 * Goliath-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Goliath-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'goliath_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function goliath_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Goliath-theme, use a find and replace
		 * to change 'goliath-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'goliath-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'goliath-theme' ),
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
				'goliath_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'goliath_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function goliath_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'goliath_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'goliath_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goliath_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'goliath-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'goliath-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'goliath_theme_widgets_init' );

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');

function my_deregister_scripts(){
	// remove wp-embed 
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

function disable_wp_emojicons() {
	// remove all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'disable_wp_emojicons' );

// add_filter( 'big_image_size_threshold', '__return_false' );

/**
 * Set sizes for media library
 */
function primo_theme_add_sizes() {
	add_image_size( 'max', 4000, 4000, false);

	add_image_size( 'project_full', 1200, 660);
	add_image_size( 'project_thumbinail', 550, 320);
}
add_action( 'after_setup_theme', 'primo_theme_add_sizes');

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'Портфолио', // Основное название типа записи
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title'),
	) );
}
function taxonomy_init() {
	// create a new taxonomy
	$labels = array(
		'name' => _x( 'Category', 'taxonomy general name' ),
	); 		
	register_taxonomy('type',array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));
}
add_action( 'init', 'taxonomy_init' );

/**
 * Enqueue scripts and styles.
 */
function goliath_theme_scripts() {
	// wp_enqueue_style( 'goliath-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'goliath-theme-style', 'rtl', 'replace' );
	// wp_enqueue_script( 'goliath-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'goliath-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'goliath-theme-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', '', _S_VERSION );
	wp_enqueue_style( 'goliath-theme-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', '', _S_VERSION );
	
	wp_enqueue_style( 'goliath-theme-style-main', get_template_directory_uri() . '/src/css/style.css', '', _S_VERSION );

	wp_enqueue_script( 'goliath-theme-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'goliath-theme-lazyload', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'goliath-theme-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'goliath-theme-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), false, true );

	wp_enqueue_script( 'goliath-theme-script', get_template_directory_uri() . '/src/js/index.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'goliath-theme-gsap-script', get_template_directory_uri() . '/src/js/gsap.js', array('jquery'), _S_VERSION, true );

	// Add template path to JS file
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'goliath-theme-script', 'wp', $translation_array );
}
add_action( 'wp_enqueue_scripts', 'goliath_theme_scripts' );

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

