<?php
/*============================================
Load parent Styles
=============================================*/
function foxy_child_enqueue_styles() {
	wp_enqueue_style( 'foxy-parent', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'foxy-style', get_stylesheet_directory_uri() . '/style.css', array( 'foxy-parent' ));
}
add_action( 'wp_enqueue_scripts', 'foxy_child_enqueue_styles' );