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
            'menu-footer' => esc_html__( 'Footermenu', 'sliceptc' ),
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
        'sliceptc_section',
        array(
            'title' =>  __( 'Header & Navigation' ),
            'description' => esc_html__('Here you can change social links, phone numbers and e-mail.'),
            'priority' => 25,
        )
    );

    $wp_customize->add_setting(
        'VKontakte',
        array(
            'default' => 'https://vk.com/web__impression',
        )
    );

    $wp_customize->add_control(
        'VKontakte',
        array(
            'label' => __('VKontakte URL'),
            'section' => 'sliceptc_section',
            'type' => 'url',
            'input_attrs' => array(
                'placeholder' => __( 'Enter VKontakte URL...' ),
            ),
        )
    );

    $wp_customize->add_setting(
        'Instagram',
        array(
            'default' => 'web__impression',
        )
    );
    $wp_customize->add_control(
        'Instagram',
        array(
            'label' => __('Instagram URi'),
            'section' => 'sliceptc_section',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'Enter Instagram URi, e.g.: web__impression...' ),
            ),
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
            'label' => __('Company Phone Show'),
            'section' => 'sliceptc_section',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'Enter Phone Number for Screen Show...' ),
            ),
        )
    );

    $wp_customize->add_setting(
        'Email',
        array(
            'default' => 'info@web-impression.ru',
        )
    );
    $wp_customize->add_control(
        'Email',
        array(
            'label' => __('Company E-mail'),
            'section' => 'sliceptc_section',
            'type' => 'email',
            'input_attrs' => array(
                'placeholder' => __( 'Enter E-mail...' ),
            ),
        )
    );

    $wp_customize->add_setting(
        'Skype',
        array(
            'default' => 'web-impression',
        )
    );
    $wp_customize->add_control(
        'Skype',
        array(
            'label' => __('Skype URi'),
            'section' => 'sliceptc_section',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'Enter Skype URi, e.g.: web-impression...' ),
            ),
        )
    );
}
add_action( 'customize_register', 'sliceptc_customizer' );

/**
 * Delete extra simbols from telephone number
 */
function sliceptc_clear_phone_number() {
    $phone =  get_theme_mod( 'Phone Number', '89167868105' );
    $phone = preg_replace('/[^0-9]/', '', $phone);
    return $phone;
}

add_action('wp_enqueue_scripts', 'my_register_javascript', 100);

/**
 * Fix WordPress media library bug
 */
function my_register_javascript() {
    wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), '4.8.2', true);
    wp_enqueue_script('mediaelement');
}

/**
 * Register Custom Post Type Portfolio
 */
function sliceptc_portfolio_cpt() {

    $labels = array(
        'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Products', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Products', 'text_domain' ),
        'name_admin_bar'        => __( 'Product', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Products', 'text_domain' ),
        'description'           => __( 'Portfolio products', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-layout',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'portfolio', $args );

}
add_action( 'init', 'sliceptc_portfolio_cpt', 0 );