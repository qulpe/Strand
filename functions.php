<?php

    // REGISTER STYLES 
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'home', get_stylesheet_directory_uri() . '/page-styles/style-home.css' );
    wp_enqueue_style( 'strande', get_stylesheet_directory_uri() . '/page-styles/style-strande.css' );
    wp_enqueue_style( 'faq', get_stylesheet_directory_uri() . '/page-styles/style-faq.css' );
    wp_enqueue_style( 'kontakt', get_stylesheet_directory_uri() . '/page-styles/style-kontakt.css' );
    wp_enqueue_style( 'load-animation', get_stylesheet_directory_uri() . '/loading-animation/load-animation.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 999 );

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