<?php 

/* 1. CONSTANTS */

define( 'THEMEROOT', get_stylesheet_directory_uri() );

define( 'CSS', THEMEROOT . '/css' );

define( 'JS', THEMEROOT . '/js' );

define( 'IMG', THEMEROOT . '/img' );

 /* 2. Styles and scripts */

function theme_scripts() {
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('spiper', "https://unpkg.com/swiper/swiper-bundle.min.css");
    wp_enqueue_style( 'main-css', CSS . '/main.css');
    wp_enqueue_style( 'new-css', CSS . '/new.css');

    wp_enqueue_script('swiper', "https://unpkg.com/swiper/swiper-bundle.min.js");
     wp_enqueue_script('cus', JS .'/jquery.matchHeight-min.js', array('jquery'), null, true);
    wp_enqueue_script('custom', JS .'/main.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

add_theme_support( 'menus' );

/* 2. ACF options page */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}

add_theme_support( 'post-thumbnails' );



register_nav_menus(array(
    'topmenu' => 'Top Menu'  
    
));






















