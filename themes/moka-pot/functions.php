<?php


//Load stylesheets
function load_stylesheets()
{


    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
};
add_action('wp_enqueue_scripts', 'load_stylesheets');





//menu support
add_theme_support('menus');

//featured image support
add_theme_support('post-thumbnails');


//Register menus
register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);
