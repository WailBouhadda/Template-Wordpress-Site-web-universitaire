<?php
function add_style(){
    wp_enqueue_style( 'bootstrap-css',    get_template_directory_uri(  )."/css/bootstrap.min.css" );
    wp_enqueue_style( 'fontawesome-css',    get_template_directory_uri()."/css/font-awesome.min.css");
    wp_enqueue_style('style_css',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','add_style');
?>