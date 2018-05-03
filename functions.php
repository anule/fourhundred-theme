<?php
// add scripts and stylesheets
function fourhundred_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1' );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
}
add_action('wp_enqueue_scripts', 'fourhundred_scripts');

?>
