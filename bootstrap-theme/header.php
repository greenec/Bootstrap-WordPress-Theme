<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>

	<link rel="icon" type="image/png" href="<?php echo wp_get_attachment_url(get_option('favicon_option')); ?>" />

	<?php wp_head(); ?>
</head>
<body>

	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">

			<div class="navbar-header">

				<a href="<?php echo site_url(); ?>" class="navbar-brand"><img src="<?php echo wp_get_attachment_url(get_option('site_logo_option')); ?>" /></a>

				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>

			<div class="collapse navbar-collapse navHeaderCollapse">

				<?php
				wp_nav_menu( array(
					'menu'			=> 'primary',
					'theme_location'	=> 'primary',
					'depth'			=> 2,
					'menu_class'		=> 'nav navbar-nav navbar-right',
					'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
					'walker'		=> new wp_bootstrap_navwalker()
				) ); ?>

			</div>

		</div>
	</div>

	<div class="container">
