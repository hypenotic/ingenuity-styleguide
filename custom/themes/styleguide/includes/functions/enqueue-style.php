<?php

/**
* Enqueue styles
*/

function my_styles() {
	wp_register_style( 'audimat', get_template_directory_uri() . '/dist/MyFontsWebfontsKit.css' );
	wp_enqueue_style( 'audimat' );
	wp_register_style( 'archer', get_template_directory_uri() . '/dist/clientfonts.css' );
	wp_enqueue_style( 'archer' );
	wp_register_style('style', get_template_directory_uri() . '/style.css');
 	wp_enqueue_style( 'style' );
 	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
 	wp_enqueue_style( 'font-awesome' );
}

add_action('wp_enqueue_scripts', 'my_styles');

?>