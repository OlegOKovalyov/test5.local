<?php
/**
 * Sliceptc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sliceptc
 */

if ( ! function_exists( 'sliceptc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sliceptc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sliceptc, use a find and replace
		 * to change 'sliceptc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sliceptc', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'sliceptc' ),
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
		add_theme_support( 'custom-background', apply_filters( 'sliceptc_custom_background_args', array(
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
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sliceptc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sliceptc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sliceptc_content_width', 640 );
}
add_action( 'after_setup_theme', 'sliceptc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sliceptc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sliceptc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sliceptc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sliceptc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sliceptc_scripts() {
	wp_enqueue_style( 'sliceptc-style', get_stylesheet_uri() );
    wp_enqueue_style('sliceptc-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0');
    wp_enqueue_style('sliceptc-desktop-css', get_template_directory_uri() . '/assets/css/desktop.css', array(), '1.0', 'screen and (min-width:1024px)');

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'sliceptc-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'sliceptc-desktop-script', get_template_directory_uri() . '/assets/js/desktop.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sliceptc_scripts' );

/**
 * Enqueue font styles in footer.
 */
function sliceptc_add_footer_styles() {
    wp_enqueue_style('sliceptc-fonts', '//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext', array(), '1.0');
};
add_action( 'get_footer', 'sliceptc_add_footer_styles' );

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
 * Changes the class on the custom logo in the header.php
 */
function sliceptc_custom_logo_output( $html ) {
    $html = str_replace('custom-logo-link', 'custom-logo-link logo', $html );
    return $html;
}
add_filter('get_custom_logo', 'sliceptc_custom_logo_output', 10);


/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function sliceptc_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'sliceptc_section_one',
        array(
            'title' => 'Header Social Icons',
            'description' => 'Links to social networks.',
            'priority' => 35,
        )
    );
    $wp_customize->add_setting(
        'VKontakte URL',
        array(
            'default' => 'https://vk.com/',
        )
    );
    $wp_customize->add_control(
        'VKontakte URL',
        array(
            'label' => 'VKontakte URL',
            'section' => 'sliceptc_section_one',
            'type' => 'url',
        )
    );

    $wp_customize->add_setting(
        'Instagram URL',
        array(
            'default' => 'https://www.instagram.com/',
        )
    );

    $wp_customize->add_control(
        'Instagram URL',
        array(
            'label' => 'Instagram URL',
            'section' => 'sliceptc_section_one',
            'type' => 'url',
        )
    );


    $wp_customize->add_section(
        'sliceptc_section_two',
        array(
            'title' => 'Contact Phone',
            'description' => 'Company Contact Phone Number',
            'priority' => 35,
        )
    );
    $wp_customize->add_setting(
        'Phone Number',
        array(
            'default' => '8-916-786-81-05',
        )
    );
    $wp_customize->add_control(
        'Phone Number',
        array(
            'label' => 'Company Phone',
            'section' => 'sliceptc_section_two',
            'type' => 'text',
        )
    );
}
add_action( 'customize_register', 'sliceptc_customizer' );
