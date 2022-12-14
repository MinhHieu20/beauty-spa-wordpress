<?php
/**
 * ls_theme_defalut functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ls_theme_defalut
 */
// load themes option
require_once(get_template_directory() . "/core/init.php");

if ( ! defined( 'LS_THEMES_DEFAULT_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'LS_THEMES_DEFAULT_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ls_theme_defalut_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ls_theme_defalut, use a find and replace
		* to change 'ls_theme_defalut' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ls_theme_defalut', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ls_theme_defalut' ),
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
			'ls_theme_defalut_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    /* Add WooCommerce support */
    add_theme_support( 'woocommerce' );

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
add_action( 'after_setup_theme', 'ls_theme_defalut_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ls_theme_defalut_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ls_theme_defalut_content_width', 640 );
}
add_action( 'after_setup_theme', 'ls_theme_defalut_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ls_theme_defalut_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ls_theme_defalut' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ls_theme_defalut' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ls_theme_defalut_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ls_theme_defalut_scripts() {
	wp_enqueue_style( 'ls_theme_defalut-style', get_stylesheet_uri(), array(), LS_THEMES_DEFAULT_VERSION );
	wp_style_add_data( 'ls_theme_defalut-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ls_theme_defalut-navigation', get_template_directory_uri() . '/js/navigation.js', array(), LS_THEMES_DEFAULT_VERSION, true );
    wp_localize_script( 'ls_theme_defalut-site', 'ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ls_theme_defalut_scripts' );

function willgroup_init_beauty() {
    register_post_type('beauty',
        array(
            'labels' => array(
                'name'            => __('K???t qu??? ??i???u tr???', 'LeadSoft') ,
                'singular_name'   => __('K???t qu??? ??i???u tr???', 'LeadSoft') ,
                'menu_name'       => __('K???t qu??? ??i???u tr???', 'LeadSoft') ,
                'name_admin_bar'  => __('K???t qu??? ??i???u tr???', 'LeadSoft') ,
                'all_items'       => __('T???t c??? k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'add_new'         => __('Th??m k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'add_new_item'    => __('Th??m k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'edit_item'       => __('S???a k???t qu??? ??i???u tr???', 'LeadSoft') ,
            ),
            'description'     => __('K???t qu??? ??i???u tr???', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'danh-muc-ket-qua-dieu-tri',
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
            ) ,
            'rewrite'  => array(
                'slug' => 'ket-qua-dieu-tri'
            ) ,
        )
    );
    flush_rewrite_rules();
    register_taxonomy('beauty_cat', array('beauty') ,
        array(
            'labels' => array(
                'name'              => __('Ph??n Lo???i k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'singular_name'     => __('Ph??n Lo???i k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'search_items'      => __('T??m ki???m lo???i k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'all_items'         => __('T???t c??? lo???i k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'parent_item'       => __('Danh m???c k???t qu??? ??i???u tr??? cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh m???c k???t qu??? ??i???u tr??? cha:', 'LeadSoft') ,
                'edit_item'         => __('S???a Danh m???c k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'update_item'       => __('C???p nh???t Danh m???c k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'add_new_item'      => __('Th??m Danh m???c k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'new_item_name'     => __('T??n Danh m???c k???t qu??? ??i???u tr???', 'LeadSoft') ,
                'menu_name'         => __('Danh m???c k???t qu??? ??i???u tr???', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public' => true,
            'rewrite' => array(
                'slug' => 'loai-ket-qua-dieu-tri'
            ) ,
        )
    );
}
add_action('init', 'willgroup_init_beauty');

function willgroup_init_event_spa() {
    register_post_type('event_spa',
        array(
            'labels' => array(
                'name'            => __('S??? ki???n Spa', 'LeadSoft') ,
                'singular_name'   => __('S??? ki???n Spa', 'LeadSoft') ,
                'menu_name'       => __('S??? ki???n Spa', 'LeadSoft') ,
                'name_admin_bar'  => __('S??? ki???n Spa', 'LeadSoft') ,
                'all_items'       => __('T???t c??? S??? ki???n Spa', 'LeadSoft') ,
                'add_new'         => __('Th??m S??? ki???n Spa', 'LeadSoft') ,
                'add_new_item'    => __('Th??m S??? ki???n Spa', 'LeadSoft') ,
                'edit_item'       => __('S???a S??? ki???n Spa', 'LeadSoft') ,
            ),
            'description'     => __('S??? ki???n Spa', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'su-kien-spa',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'su-kien-spa'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('event_cat_spa', array('event_spa') ,
        array(
            'labels' => array(
                'name'              => __('Ph??n Lo???i s??? ki???n Spa', 'LeadSoft') ,
                'singular_name'     => __('Ph??n Lo???i s??? ki???n Spa', 'LeadSoft') ,
                'search_items'      => __('T??m ki???m lo???i s??? ki???n Spa', 'LeadSoft') ,
                'all_items'         => __('T???t c??? lo???i s??? ki???n Spa', 'LeadSoft') ,
                'parent_item'       => __('Danh m???c s??? ki???n Spa cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh m???c s??? ki???n Spa cha:', 'LeadSoft') ,
                'edit_item'         => __('S???a danh m???c s??? ki???n Spa', 'LeadSoft') ,
                'update_item'       => __('C???p nh???t danh m???c s??? ki???n Spa', 'LeadSoft') ,
                'add_new_item'      => __('Th??m danh m???c s??? ki???n Spa', 'LeadSoft') ,
                'new_item_name'     => __('T??n danh m???c s??? ki???n Spa', 'LeadSoft') ,
                'menu_name'         => __('Danh m???c s??? ki???n Spa', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-su-kien-spa'
            ),
        )
    );
}
add_action('init', 'willgroup_init_event_spa');

function willgroup_init_tip_beauty() {
    register_post_type('tip_beauty',
        array(
            'labels' => array(
                'name'            => __('M???o l??m ?????p', 'LeadSoft') ,
                'singular_name'   => __('M???o l??m ?????p', 'LeadSoft') ,
                'menu_name'       => __('M???o l??m ?????p', 'LeadSoft') ,
                'name_admin_bar'  => __('M???o l??m ?????p', 'LeadSoft') ,
                'all_items'       => __('T???t c??? M???o l??m ?????p', 'LeadSoft') ,
                'add_new'         => __('Th??m M???o l??m ?????p', 'LeadSoft') ,
                'add_new_item'    => __('Th??m M???o l??m ?????p', 'LeadSoft') ,
                'edit_item'       => __('S???a M???o l??m ?????p', 'LeadSoft') ,
            ),
            'description'     => __('M???o l??m ?????p', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'danh-muc-meo-lam-dep',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'meo-lam-dep'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('tip_beauty_cat', array('tip_beauty') ,
        array(
            'labels' => array(
                'name'              => __('Ph??n Lo???i M???o l??m ?????p', 'LeadSoft') ,
                'singular_name'     => __('Ph??n Lo???i M???o l??m ?????p', 'LeadSoft') ,
                'search_items'      => __('T??m ki???m lo???i M???o l??m ?????p', 'LeadSoft') ,
                'all_items'         => __('T???t c??? lo???i M???o l??m ?????p', 'LeadSoft') ,
                'parent_item'       => __('Danh m???c M???o l??m ?????p cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh m???c M???o l??m ?????p cha:', 'LeadSoft') ,
                'edit_item'         => __('S???a Danh m???c M???o l??m ?????p', 'LeadSoft') ,
                'update_item'       => __('C???p nh???t Danh m???c M???o l??m ?????p', 'LeadSoft') ,
                'add_new_item'      => __('Th??m Danh m???c M???o l??m ?????p', 'LeadSoft') ,
                'new_item_name'     => __('T??n Danh m???c M???o l??m ?????p', 'LeadSoft') ,
                'menu_name'         => __('Danh m???c M???o l??m ?????p', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-meo-lam-dep'
            ),
        )
    );
}
add_action('init', 'willgroup_init_tip_beauty');

function willgroup_init_extension_spa() {
    register_post_type('extension',
        array(
            'labels' => array(
                'name'            => __('Chi nh??nh Spa', 'LeadSoft') ,
                'singular_name'   => __('Chi nh??nh Spa', 'LeadSoft') ,
                'menu_name'       => __('Chi nh??nh Spa', 'LeadSoft') ,
                'name_admin_bar'  => __('Chi nh??nh Spa', 'LeadSoft') ,
                'all_items'       => __('T???t c??? Chi nh??nh Spa', 'LeadSoft') ,
                'add_new'         => __('Th??m Chi nh??nh Spa', 'LeadSoft') ,
                'add_new_item'    => __('Th??m Chi nh??nh Spa', 'LeadSoft') ,
                'edit_item'       => __('S???a Chi nh??nh Spa', 'LeadSoft') ,
            ),
            'description'     => __('Chi nh??nh Spa', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'chi-nhanh-spa',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'chi-nhanh-spa'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('extension_cat', array('extension') ,
        array(
            'labels' => array(
                'name'              => __('Ph??n Lo???i Chi nh??nh Spa', 'LeadSoft') ,
                'singular_name'     => __('Ph??n Lo???i Chi nh??nh Spa', 'LeadSoft') ,
                'search_items'      => __('T??m ki???m lo???i Chi nh??nh Spa', 'LeadSoft') ,
                'all_items'         => __('T???t c??? lo???i Chi nh??nh Spa', 'LeadSoft') ,
                'parent_item'       => __('Danh m???c Chi nh??nh Spa cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh m???c Chi nh??nh Spa cha:', 'LeadSoft') ,
                'edit_item'         => __('S???a Danh m???c Chi nh??nh Spa', 'LeadSoft') ,
                'update_item'       => __('C???p nh???t Danh m???c Chi nh??nh Spa', 'LeadSoft') ,
                'add_new_item'      => __('Th??m Danh m???c Chi nh??nh Spa', 'LeadSoft') ,
                'new_item_name'     => __('T??n Danh m???c Chi nh??nh Spa', 'LeadSoft') ,
                'menu_name'         => __('Danh m???c Chi nh??nh Spa', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-chi-nhanh-spa'
            ),
        )
    );
}
add_action('init', 'willgroup_init_extension_spa');

function willgroup_init_promotion() {
    register_post_type('promotion',
        array(
            'labels' => array(
                'name'            => __('Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'singular_name'   => __('Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'menu_name'       => __('Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'name_admin_bar'  => __('Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'all_items'       => __('T???t c??? Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'add_new'         => __('Th??m Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'add_new_item'    => __('Th??m Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'edit_item'       => __('S???a Ch??nh s??ch ??u ????i', 'LeadSoft') ,
            ),
            'description'     => __('Ch??nh s??ch ??u ????i', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'chinh-sach-uu-dai',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'chinh-sach-uu-dai'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('promotion_cat', array('promotion') ,
        array(
            'labels' => array(
                'name'              => __('Ph??n Lo???i Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'singular_name'     => __('Ph??n Lo???i Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'search_items'      => __('T??m ki???m lo???i Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'all_items'         => __('T???t c??? lo???i Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'parent_item'       => __('Danh m???c Ch??nh s??ch ??u ????i cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh m???c Ch??nh s??ch ??u ????i cha:', 'LeadSoft') ,
                'edit_item'         => __('S???a Danh m???c Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'update_item'       => __('C???p nh???t Danh m???c Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'add_new_item'      => __('Th??m Danh m???c Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'new_item_name'     => __('T??n Danh m???c Ch??nh s??ch ??u ????i', 'LeadSoft') ,
                'menu_name'         => __('Danh m???c Ch??nh s??ch ??u ????i', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-chinh-sach-uu-dai'
            ),
        )
    );
}
add_action('init', 'willgroup_init_promotion');

add_filter( 'big_image_size_threshold', '__return_false' );
/**
 * Truncate text.
 */
// echo truncate( get_the_content(), 200 );
function truncate( $text, $chars = 400 ) {
    $text = strip_tags( $text );
    if ( strlen( $text ) > $chars ) {
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
    }
    return $text;
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

//add active class
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

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
 * Ajax functions
 */
require get_template_directory() . '/inc/ajax.php';

