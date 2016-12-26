<?php
// Template Name: Design Brief Layout
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?></title>

	<link rel="icon" type="image/png" href="<?php echo wp_get_attachment_url(get_option('favicon_option')); ?>" />

	<link href="<?php echo bloginfo('template_directory') . '/css/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

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
					'menu'              => 'design-brief',
					'theme_location'    => 'design-brief',
					'depth'             => 2,
					'menu_class'        => 'nav navbar-nav navbar-right',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
				?>

			</div>

		</div>
	</div>

	<div class="container">

		<div class="row">
			<div class='col-xs-12'>
				<div class="panel panel-default panel-body">
					<?php while(have_posts()) : the_post(); ?>

						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_content(); ?>

					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>

		<?php get_footer();
