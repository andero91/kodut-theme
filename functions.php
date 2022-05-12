<?php
add_theme_support( 'post-thumbnails' );
wp_enqueue_style( 'style', get_stylesheet_uri() );
function my_excerpt_length($length){
    return 7;
    }
    add_filter('excerpt_length', 'my_excerpt_length');

    function my_function_admin_bar(){ return false; }
    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
?>