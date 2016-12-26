<?php get_header(); ?>

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
