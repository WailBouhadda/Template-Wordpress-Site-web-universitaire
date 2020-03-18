<?php
add_theme_support('post-thumbnails');
function add_style(){
    wp_enqueue_style( 'bootstrap-css',    get_template_directory_uri(  )."/css/bootstrap.min.css" );
    wp_enqueue_style( 'fontawesome-css',    get_template_directory_uri()."/css/font-awesome.min.css");
    wp_enqueue_style('style_css',get_stylesheet_uri());
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


function my_sidebars(){

        register_sidebar(

                array(
                    'name' => 'page Sidebar',
                    'id' => 'page-sidebar',
                    'before_title' => '<h4 class="widget-title">',
                    'after_title' => '</4>'
                )
                );
                register_sidebar(

                    array(
                        'name' => 'blog Sidebar',
                        'id' => 'blog-sidebar',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</4>'
                    )
                    );


}
add_action('widgets_init','my_sidebars');
?>