<?php

require('wp_bootstrap_navwalker.php');

register_nav_menus( array(
	'primary' => __( 'Primary Menu' ),
	'design-brief' => __('Design Brief Menu')
));

if(is_admin()) {
	require('theme_settings.php');
}

add_action('admin_enqueue_scripts', function() {
	wp_enqueue_media();
	wp_enqueue_script('theme_media_uploader', get_template_directory_uri() . '/js/media-lib-uploader.js');
});

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('bootstrap_styles', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('custom_styles', get_stylesheet_uri());
	wp_enqueue_style('open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/js/bootstrap.min.js');	
});
