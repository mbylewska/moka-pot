<?php

if (!function_exists('moka_pot_theme_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since My theme name 1.0
     *
     * @return void
     */
    function moka_pot_theme_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'moka_pot_theme_support');



//Load stylesheets
function moka_load_stylesheets()
{

    wp_enqueue_style(
        'moka-pot-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_register_style('moka-style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('moka-style');
};
add_action('wp_enqueue_scripts', 'moka_load_stylesheets');





// //menu support
// add_theme_support('menus');

// //featured image support
// add_theme_support('post-thumbnails');


// //Register menus
// register_nav_menus(

//     array(
//         'top-menu' => __('Top Menu', 'theme')
//     )
// );
