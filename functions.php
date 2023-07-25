<?php
/* Enqueue Styles */
if ( ! function_exists('thr_enqueue_styles') ) {
    function thr_enqueue_styles() {
		wp_enqueue_style( 'twenty-twenty-three-custom-style', get_stylesheet_directory_uri() .'/custom-style.css', array(), wp_get_theme()->get('Version') );
    }
    add_action('wp_enqueue_scripts', 'thr_enqueue_styles');
}
