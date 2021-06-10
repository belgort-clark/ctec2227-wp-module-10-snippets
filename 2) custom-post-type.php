<?php 
// Copy and past the function below into your functions.php
function ctec227_car_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car'
        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-images-alt2',  // WordPress dashicons
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('cars', $args);
}

add_action('init', 'ctec227_car_post_type');

// Don't copy this line
?>