<?php

add_action('admin_menu', 'add_theme_options_menu');
add_action('admin_init', 'display_theme_options_fields');
add_action('admin_footer', 'media_selector_scripts');

function add_theme_options_menu() {
	add_menu_page("Theme Options", "Theme Options", "manage_options", "theme_options", "theme_settings_page");
}

function theme_settings_page() { ?>
	<div class="wrap">
		<h1>Theme Options</h1>
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme_options");
			submit_button(); ?>
		</form>
	</div>
	<?php
}

function display_theme_options_fields() {
	add_settings_section("section", "All Settings", null, "theme_options");

	add_settings_field("site_logo", "Site Logo", "display_logo_element", "theme_options", "section");
	add_settings_field("background_image", "Background Image", "display_background_element", "theme_options", "section");
	add_settings_field("favicon", "Favicon", "display_favicon_element", "theme_options", "section");
	add_settings_field("home_text", "Home Page Image Text", "display_home_text_element", "theme_options", "section");

	register_setting("section", "site_logo_option");
	register_setting("section", "background_image_option");
	register_setting("section", "favicon_option");
	register_setting("section", "home_text_option");
}

function display_logo_element() { ?>
	<div class='image-preview-wrapper'>
		<img id='logo-preview' src='<?php echo wp_get_attachment_url(get_option('site_logo_option')); ?>' height='100'>
	</div>
	<input id="upload_logo_button" type="button" class="button" value="<?php _e('Upload image'); ?>" />
	<input type='hidden' name='site_logo_option' id='logo_attachment_id' value='<?php echo get_option('site_logo_option'); ?>' />
	<?php
}

function display_background_element() { ?>
	<div class='image-preview-wrapper'>
		<img id='background-preview' src='<?php echo wp_get_attachment_url(get_option('background_image_option')); ?>' height='100'>
	</div>
	<input id="upload_background_button" type="button" class="button" value="<?php _e('Upload image'); ?>" />
	<input type='hidden' name='background_image_option' id='background_attachment_id' value='<?php echo get_option('background_image_option'); ?>' />
	<?php
}

function display_favicon_element() { ?>
	<div class='image-preview-wrapper'>
		<img id='favicon-preview' src='<?php echo wp_get_attachment_url(get_option('favicon_option')); ?>' height='100'>
	</div>
	<input id="upload_favicon_button" type="button" class="button" value="<?php _e('Upload image'); ?>" />
	<input type='hidden' name='favicon_option' id='favicon_attachment_id' value='<?php echo get_option('favicon_option'); ?>' />
	<?php
}

function display_home_text_element() { ?>
	<input type="text" name="home_text_option" value="<?php echo get_option('home_text_option'); ?>" />
	<?php
}
