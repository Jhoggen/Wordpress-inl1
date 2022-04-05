<?php
//style.css
function labb_register_styles() {

    wp_enqueue_style('labb-bootstrap', get_template_directory_uri(). "/style.css", array(), '1.0', 'all');
}

//hook för style.css
add_action('wp_enqueue_scripts', 'labb_register_styles');

?>