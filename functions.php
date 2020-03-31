<?php
/**
 * real_s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package real_s
 */

if ( ! function_exists( 'real_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function real_s_setup()
	{

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on real_s, use a find and replace
		 * to change 'real_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'real_s', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Principal', 'real_s' ),
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
		add_theme_support( 'custom-background', apply_filters( 'real_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
		) );
	}
endif;
add_action( 'after_setup_theme', 'real_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function real_s_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'real_s_content_width', 640 );
}
add_action( 'after_setup_theme', 'real_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function real_s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'real_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'real_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'real_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function real_s_scripts() {
	wp_enqueue_style( 'real_s-style', get_stylesheet_uri() );

	wp_enqueue_script( 'real_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'real_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	/*TEMA*/
	wp_enqueue_style( 'plugin_tema_css', get_template_directory_uri() . '/css/plugins.css' , [], '5.12.0', 'all' ) ;
	wp_enqueue_script( 'plugin_tema_js', get_template_directory_uri() . '/js/plugins.js', ['jquery'], '4.3.1', true );
	wp_enqueue_script( 'maplace_js', get_template_directory_uri() . '/js/maplace-active.js', ['jquery'], '4.3.1', true );
	wp_enqueue_script( 'main_tema_js', get_template_directory_uri() . '/js/main.js', ['jquery'], '4.3.1', true );

	/*FONTAWESOME*/
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/all.min.css' , [], '5.12.0', 'all' ) ;

	/*SWIPER*/
	wp_enqueue_style( 'swiper_css', get_template_directory_uri() . '/css/swiper.min.css' , [], '5.3.6', 'all' ) ;
	wp_enqueue_script( 'swiper_js', get_template_directory_uri() . '/js/swiper.min.js', ['jquery'], '5.3.6', true );

	/*MIS SCRIPTS*/
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' , [], '1.0.0', 'all' ) ;
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', ['jquery'], '4.3.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'real_s_scripts' );
if(!function_exists('real_s_admi_scripts'))
{
	function real_s_admi_scripts()
	{
		wp_enqueue_style('admin_css',get_template_directory_uri() . '/css/custom_admin.css',[],'1.0.0','all');
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/all.min.css' , [], '5.12.0', 'all' ) ;

	}
}
add_action('admin_enqueue_scripts','real_s_admi_scripts' );

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
 * Clase Nav Walker BS4
 */
require get_template_directory() . '/custom/nav_walker_bs4.php';

/**
 * Incluye archivo de widgets
 */
require get_template_directory() . '/custom/widget_prop.php';
require get_template_directory() . '/custom/widget_agent.php';

/**
 * CPT
 */
require get_template_directory() . '/cpt/propiedades_cpt.php';
require get_template_directory() . '/cpt/agentes_cpt.php';

/**
 * Mis funciones.
 */
require get_template_directory() . '/custom/myFunctions.php';



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

