<?php
 
if (!function_exists('jargon_setup')) {
    // wordpress functionality
    function jargon_setup()
    {
      add_theme_support('title_tag');
      add_theme_support('post-thumbnails');
    //   add_image_size('square-150', 150, 150, true);
    add_image_size( 'square-150', 150, 150, true );
      register_nav_menus(array('jargon-site' => __( 'Jargon Site Navigation' )));

    }
}

add_action('after_setup_theme', "jargon_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function jargon_styles()
{
    wp_enqueue_style('jargon-reboot', get_template_directory_uri() . '/assets/css/reboot.css');
    wp_enqueue_style('jargon-fonts', "https://fonts.googleapis.com/css?family=Sacramento&display=swap");
    wp_enqueue_style('jargon-style', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/mobile-menu.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'jargon_styles');
 
function jargon_scripts () {
    wp_enqueue_script("jargon-mobile-menu",  get_template_directory_uri() . "/js/mobile-menu.js");
}

add_action('wp_enqueue_scripts', 'jargon_scripts');
// thumbnail support






?>
