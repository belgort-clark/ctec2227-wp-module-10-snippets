<?php 
// Copy and past the function below into your functions.php
function ctec227_car_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_in_rest' => true
    );

    register_taxonomy('brands', array('cars'), $args);
}

add_action('init', 'ctec227_car_taxonomy');

// Don't copy this line
?>
