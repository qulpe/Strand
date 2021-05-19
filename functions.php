<?php
/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */
add_filter( 'pre_get_posts', 'custom_post_type_search' );
function custom_post_type_search( $query ) {
     if ($query->is_search) {
          $query->set('post_type', array( 'post', 'strandgenstand'));
     }
     return $query;
}

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'home', get_stylesheet_directory_uri() . '/style-home.css' );
    wp_enqueue_style( 'strande', get_stylesheet_directory_uri() . '/style-strande.css' );
    wp_enqueue_style( 'faq', get_stylesheet_directory_uri() . '/style-faq.css' );
    wp_enqueue_style( 'kontakt', get_stylesheet_directory_uri() . '/style-kontakt.css' );
    wp_enqueue_style( 'load-animation', get_stylesheet_directory_uri() . '/load-animation.css' );
	wp_register_script(
		'main-js',
		get_template_directory_uri() . '/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 999 );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

function add_custom_post_types( $post_types ) {
    $my_post_types = array(
        'strande',
    );
    return $my_post_types;
}
add_filter( 'fusion_builder_shortcode_migration_post_types', 'add_custom_post_types' );

//** Fix for Excerpt [..] *//
add_filter( 'avada_blog_read_more_excerpt', 'my_read_more_symbol' );
function my_read_more_symbol( $read_more ) {
    $read_more = "[..]"; // ➤
    
    return $read_more;
}

function register_menu()
{
    register_nav_menu("desktop-navigation", __("desktop"));
    register_nav_menu("mobile-navigation", __("mobile"));
}
add_action("init", "register_menu");

add_filter('doing_it_wrong_trigger_error', function () {return false;}, 10, 0);


function register_sidebars_init()
{
    register_sidebar(array(
        'name' => 'Footer LOGO',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer pages',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer social media language download-link',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer social media language download-link',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'categories',
        'id' => 'categories',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'posts',
        'id' => 'posts',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'contact form',
        'id' => 'contact-form',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action("widgets_init", "register_sidebars_init");

// $_SESSION['loadAnimation'] = include_once('load-animation.php');


// if(is_page('hjem')) {
//     echo $_SESSION['loadAnimation'];
// }else{
//     $_SESSION['loadAnimation'] = NULL;
// }

function twentytwelve_setup() {
    add_theme_support('post-thumbnails');
    }
  add_action( 'after_setup_theme', 'twentytwelve_setup' );