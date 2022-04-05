<?php
//style.css
function labb_register_styles() {


    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('labb-style', get_template_directory_uri(). "/style.css", array('labb-bootstrap'), $version, 'all');
    wp_enqueue_style('labb-bootstrap', get_template_directory_uri(). "/css/bootstrap.css", array(), '3.3.7', 'all');
    wp_enqueue_style('labb-fontawesome', get_template_directory_uri(). "/css/fontawesome.css", array(), '4.6.3', 'all');
}

//hook för style.css
add_action('wp_enqueue_scripts', 'labb_register_styles');



// scripts
function labb_register_scripts() {

    wp_enqueue_script('labb-javascript', get_template_directory_uri(). "/JS/jquery.js", array(), '3.1.0', true);
    wp_enqueue_script('labb-jquery', get_template_directory_uri(). "/JS/script.js", array(), '1.0', true);

}
//hook
add_action('wp_enqueue_scripts', 'labb_register_scripts');

?>