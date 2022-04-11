<?php 
/*
Plguin Name: Jacobs plugins

*/

//säkert

//aktivering

//funktioner för BoK CPT

add_function('init', 'registrera_bok');

function registrera_bok() {

    $bok_args = [
        'public' => true,
        'label' => 'Books',
        'show_in_rest' => true,
    ];

    register_post_type('bok', $bok_args);
}

?>