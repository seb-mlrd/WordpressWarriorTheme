<?php
/**
 * wordpress_warrior functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress_warrior
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
function wordpress_warrior_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wordpress_warrior, use a find and replace
		* to change 'wordpress_warrior' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wordpress_warrior', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'header', 'wordpress_warrior' ),
			'menu-2' => esc_html__('footer', 'wordpress_warrior')
		),
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
			'wordpress_warrior_custom_background_args',
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
add_action( 'after_setup_theme', 'wordpress_warrior_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpress_warrior_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wordpress_warrior_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpress_warrior_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordpress_warrior_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Faq', 'wordpress_warrior' ),
			'id'            => 'faq-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordpress_warrior' ),
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Services', 'wordpress_warrior' ),
			'id'            => 'services-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordpress_warrior' ),
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Avis', 'wordpress_warrior' ),
			'id'            => 'avis-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordpress_warrior' ),
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'FirstWall', 'wordpress_warrior' ),
			'id'            => 'firstWall-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordpress_warrior' ),
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'SecondWall', 'wordpress_warrior' ),
			'id'            => 'secondWall-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordpress_warrior' ),
		)
	);
}
add_action( 'widgets_init', 'wordpress_warrior_widgets_init' );

//cette fonction permet de changer les zone de widget en div car elles sont en <li> de base et il y a un point devant chaque <li>
function custom_widget_container($widget){
    // echo var_dump($widget);

    // $widget = str_replace('<ul>', '<div>',$widget);
    $widget[0]['before_widget'] = str_replace('<li' , '<div', $widget[0]['before_widget']);
    $widget[0]['after_widget'] = str_replace('</li' , '</div', $widget[0]['after_widget']);
    return $widget;
}
add_filter('dynamic_sidebar_params','custom_widget_container'); 
/**
 * Enqueue scripts and styles.
 */
function wordpress_warrior_scripts() {
	wp_enqueue_style( 'wordpress_warrior-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wordpress_warrior-style', 'rtl', 'replace' );
	wp_enqueue_script('wordpress_warrior-script', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'wordpress_warrior-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpress_warrior_scripts' );

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


function wordpressWarrior_menu_class($classes) {

	$classes[] = 'nav-item-rdg';
	return $classes;
};


add_filter('nav_menu_css_class', 'wordpressWarrior_menu_class');