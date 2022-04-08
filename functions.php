<?php

function labb_theme_support() {
    //dynamisk titel
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
}
add_action('after_theme_support', 'labb_theme_support');


// function labb_menus(){

//     $locations = array(
//         'primary' => "Header Primary Nav Menu",
//         'footer' => "Footer Nav Menu"
//     );
//     register_nav_menus($locations);
// }
// add_action('init', 'labb_menus');



//search form

// function get_search_form() {

// }

//lägg till widget

register_sidebar(
    [
        'name' => 'widget1',
        'id' => 'widget1',
        'description' => 'this is a widget'
    ]    
);


//menyer
function labb_menus() {

    register_nav_menu('header_nav', 'Header menu');
    register_nav_menu('footer_nav', 'Footer menu');
    register_nav_menu('subpage_menu', 'Subpage menu');
}
add_action('after_setup_theme', 'labb_menus');



//style.css
function labb_register_styles() {


    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('labb-style', get_template_directory_uri(). "/style.css", array('labb-bootstrap'), $version, 'all');
    wp_enqueue_style('labb-bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.css", array(), '3.3.7', 'all');
    wp_enqueue_style('labb-font-awesome', get_template_directory_uri(). "/assets/css/font-awesome.css", array(), '4.6.3', 'all');
}

//hook för style
add_action('wp_enqueue_scripts', 'labb_register_styles');



// scripts
function labb_register_scripts() {

    wp_enqueue_script('labb-jquery', get_template_directory_uri(). "/assets/js/script.js", array('jquery'), '1.0', true);
    wp_enqueue_script('labb-javascript', get_template_directory_uri(). "/assets/js/jquery.js", array('jquery'), '3.1.0', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }

}
//hook scripts
add_action('wp_enqueue_scripts', 'labb_register_scripts');


?>

