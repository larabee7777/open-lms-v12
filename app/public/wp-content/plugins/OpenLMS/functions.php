<?php
function mychildtheme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );

wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1');


function bootstrap_enqueue() {
   wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), NULL, true );
   
   wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, NULL, 'all' );
   wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/css/your_style.css', array(), '1.0.0', 'all');
 
   wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js' ); 
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue' );

?>


