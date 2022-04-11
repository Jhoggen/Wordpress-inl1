<?php

function labb_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_theme_support', 'labb_theme_support');


//add image size

add_image_size('custom-size', 555, 555, true);


//menyer
function labb_menus() {

    register_nav_menu('header_nav', 'Header menu');
    register_nav_menu('footer_nav', 'Footer menu');
    register_nav_menu('subpage_menu', 'Subpage menu');
}
add_action('after_setup_theme', 'labb_menus');




//lägg till widget

function labb_register_sidebars() {
    //blogsidebar
    register_sidebar(
        [
            'name' => 'blogmenus-sidor',
            'id' => 'blogmenus_sidor',
        ] 
    );

    register_sidebar(
        [
            'name' => 'blogmenus-arkiv',
            'id' => 'blogmenus_arkiv',
        ]
    );

    register_sidebar(
        [
            'name' => 'blogmenus-kategori',
            'id' => 'blogmenus_kategori',
        ]
    );


        // footer
        register_sidebar(
            [
                'name' => 'footer-menu-1',
                'id' => 'footer_menu_1',
            ] 
        );
    
        register_sidebar(
            [
                'name' => 'footer-menu-2',
                'id' => 'footer_menu_2',
            ]
        );
    
            register_sidebar(
                [
                    'name' => 'footer-menu-3',
                    'id' => 'footer_menu_3',
                ]
            );

            register_sidebar(
                [
                    'name' => 'footer-copyright',
                    'id' => 'footer_copyright',
                ]
            );
}
add_action( 'widgets_init', 'labb_register_sidebars' );










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

