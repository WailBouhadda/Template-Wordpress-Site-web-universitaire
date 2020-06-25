<?php

// Add featured image support
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 400, 180, true);
add_image_size('banner-image', 940, 310, true);


function add_style(){

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() ."/css/bootstrap.min.css" );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() ."/css/font-awesome.min.css");
    wp_enqueue_style('style_css', get_template_directory_uri() . '/css/main.css');

}
add_action('wp_enqueue_scripts','add_style');

// Theme Options
add_theme_support('menus');
add_theme_support('widgets');

// estsb_menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);


// sidebar 
register_sidebar(
    array(
        'id' => 'right-sidebar',
        'name' => 'Right Sidebar',
        'before_widget' => '<div class="the-widget %2$s">',
        'after_widget' => '</div>',
        'before_title'=> '<h2>',
        'after_title' =>'</h2>',
    ));


?>

