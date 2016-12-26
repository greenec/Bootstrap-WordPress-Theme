<?php

require('wp_bootstrap_navwalker.php');

if(is_admin()) {
	require('theme_settings.php');
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu' ),
	'design-brief' => __('Design Brief Menu')
));
