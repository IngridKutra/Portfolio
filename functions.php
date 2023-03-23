<?php


function background_img(){
add_theme_support(
    'custom-background', apply_filters(
        'shapely_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )
    )
);}

add_action( 'after_setup_theme', 'background_img' );


    function thumbnails(){
        add_theme_support('post-thumbnails');
    }
        add_action('init','thumbnails');

    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
    }
        add_action('wp_enqueue_scripts', 'add_theme_scripts');



?>
