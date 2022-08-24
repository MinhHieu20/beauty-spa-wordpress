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
                'name'            => __('Kết quả điều trị', 'LeadSoft') ,
                'singular_name'   => __('Kết quả điều trị', 'LeadSoft') ,
                'menu_name'       => __('Kết quả điều trị', 'LeadSoft') ,
                'name_admin_bar'  => __('Kết quả điều trị', 'LeadSoft') ,
                'all_items'       => __('Tất cả kết quả điều trị', 'LeadSoft') ,
                'add_new'         => __('Thêm kết quả điều trị', 'LeadSoft') ,
                'add_new_item'    => __('Thêm kết quả điều trị', 'LeadSoft') ,
                'edit_item'       => __('Sửa kết quả điều trị', 'LeadSoft') ,
            ),
            'description'     => __('Kết quả điều trị', 'LeadSoft') ,
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
                'name'              => __('Phân Loại kết quả điều trị', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại kết quả điều trị', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại kết quả điều trị', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại kết quả điều trị', 'LeadSoft') ,
                'parent_item'       => __('Danh mục kết quả điều trị cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục kết quả điều trị cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục kết quả điều trị', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục kết quả điều trị', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục kết quả điều trị', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục kết quả điều trị', 'LeadSoft') ,
                'menu_name'         => __('Danh mục kết quả điều trị', 'LeadSoft') ,
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
                'name'            => __('Sự kiện Spa', 'LeadSoft') ,
                'singular_name'   => __('Sự kiện Spa', 'LeadSoft') ,
                'menu_name'       => __('Sự kiện Spa', 'LeadSoft') ,
                'name_admin_bar'  => __('Sự kiện Spa', 'LeadSoft') ,
                'all_items'       => __('Tất cả Sự kiện Spa', 'LeadSoft') ,
                'add_new'         => __('Thêm Sự kiện Spa', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Sự kiện Spa', 'LeadSoft') ,
                'edit_item'       => __('Sửa Sự kiện Spa', 'LeadSoft') ,
            ),
            'description'     => __('Sự kiện Spa', 'LeadSoft') ,
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
                'name'              => __('Phân Loại sự kiện Spa', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại sự kiện Spa', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại sự kiện Spa', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại sự kiện Spa', 'LeadSoft') ,
                'parent_item'       => __('Danh mục sự kiện Spa cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục sự kiện Spa cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa danh mục sự kiện Spa', 'LeadSoft') ,
                'update_item'       => __('Cập nhật danh mục sự kiện Spa', 'LeadSoft') ,
                'add_new_item'      => __('Thêm danh mục sự kiện Spa', 'LeadSoft') ,
                'new_item_name'     => __('Tên danh mục sự kiện Spa', 'LeadSoft') ,
                'menu_name'         => __('Danh mục sự kiện Spa', 'LeadSoft') ,
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
                'name'            => __('Mẹo làm đẹp', 'LeadSoft') ,
                'singular_name'   => __('Mẹo làm đẹp', 'LeadSoft') ,
                'menu_name'       => __('Mẹo làm đẹp', 'LeadSoft') ,
                'name_admin_bar'  => __('Mẹo làm đẹp', 'LeadSoft') ,
                'all_items'       => __('Tất cả Mẹo làm đẹp', 'LeadSoft') ,
                'add_new'         => __('Thêm Mẹo làm đẹp', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Mẹo làm đẹp', 'LeadSoft') ,
                'edit_item'       => __('Sửa Mẹo làm đẹp', 'LeadSoft') ,
            ),
            'description'     => __('Mẹo làm đẹp', 'LeadSoft') ,
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
                'name'              => __('Phân Loại Mẹo làm đẹp', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Mẹo làm đẹp', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Mẹo làm đẹp', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Mẹo làm đẹp', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Mẹo làm đẹp cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Mẹo làm đẹp cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Mẹo làm đẹp', 'LeadSoft') ,
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
                'name'            => __('Chi nhánh Spa', 'LeadSoft') ,
                'singular_name'   => __('Chi nhánh Spa', 'LeadSoft') ,
                'menu_name'       => __('Chi nhánh Spa', 'LeadSoft') ,
                'name_admin_bar'  => __('Chi nhánh Spa', 'LeadSoft') ,
                'all_items'       => __('Tất cả Chi nhánh Spa', 'LeadSoft') ,
                'add_new'         => __('Thêm Chi nhánh Spa', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Chi nhánh Spa', 'LeadSoft') ,
                'edit_item'       => __('Sửa Chi nhánh Spa', 'LeadSoft') ,
            ),
            'description'     => __('Chi nhánh Spa', 'LeadSoft') ,
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
                'name'              => __('Phân Loại Chi nhánh Spa', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Chi nhánh Spa', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Chi nhánh Spa', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Chi nhánh Spa', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Chi nhánh Spa cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Chi nhánh Spa cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Chi nhánh Spa', 'LeadSoft') ,
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
                'name'            => __('Chính sách ưu đãi', 'LeadSoft') ,
                'singular_name'   => __('Chính sách ưu đãi', 'LeadSoft') ,
                'menu_name'       => __('Chính sách ưu đãi', 'LeadSoft') ,
                'name_admin_bar'  => __('Chính sách ưu đãi', 'LeadSoft') ,
                'all_items'       => __('Tất cả Chính sách ưu đãi', 'LeadSoft') ,
                'add_new'         => __('Thêm Chính sách ưu đãi', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Chính sách ưu đãi', 'LeadSoft') ,
                'edit_item'       => __('Sửa Chính sách ưu đãi', 'LeadSoft') ,
            ),
            'description'     => __('Chính sách ưu đãi', 'LeadSoft') ,
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
                'name'              => __('Phân Loại Chính sách ưu đãi', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Chính sách ưu đãi', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Chính sách ưu đãi', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Chính sách ưu đãi', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Chính sách ưu đãi cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Chính sách ưu đãi cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Chính sách ưu đãi', 'LeadSoft') ,
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

