<?php get_header(); ?>

</div>

<div class="jumbotron" style='background-image: url(<?php echo wp_get_attachment_url(get_option('background_image_option')); ?>);'>
	<h1 class="text-center"><?php echo get_option('home_text_option'); ?></h1>
</div>

<div class="container">

	<div class="panel panel-default panel-body">
		<div class="row">
			<div class="col-xs-12">
				<?php query_posts('posts_per_page=8'); while(have_posts()) : the_post(); ?>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>

				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</div>

	<?php get_footer();
