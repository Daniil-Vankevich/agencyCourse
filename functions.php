<?php 

add_action( 'wp_enqueue_scripts', 'vank_js_and_css');

function vank_js_and_css() {
	wp_enqueue_style( 'gfonts', 'http://fonts.googleapis.com/css?family=Montserrat:300,400%7COpen+Sans:400,400i,700%7CMerriweather:400ii?subset=cyrillic');

	wp_enqueue_style('bott', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);

	wp_enqueue_style('font-icons', get_stylesheet_directory_uri() . '/assets/css/font-icons.css', array(), null);

	wp_enqueue_style('sliders', get_stylesheet_directory_uri() . '/assets/css/sliders.css', array(), null);

	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), null);

	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), null);

	wp_enqueue_style('spacings', get_stylesheet_directory_uri() . '/assets/css/spacings.css', array(), null);
}

wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array(), null);

?>