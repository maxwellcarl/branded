<div class="cf waypoint">

	<?php
	$args = array('post_type' => 'projects', 'posts_per_page' => 50);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>
	<div class="col-md-4 proj">
		<a class="proj-img" href="<?php the_permalink(); ?>">
			<?php if( get_field('proj_banner_img') ): ?>
				<img src="<?php the_field('proj_banner_img'); ?>" />
			<?php endif; ?>
			<!-- <div class="proj-overlay">
				<div class="proj-titles">
					<h6 class="proj-title"><?php the_title(); ?></h6>
					<p class="proj-desc"><?php the_excerpt(); ?></p>
				</div>
			</div> -->

			<h6 class="proj-simple-title"><?php the_title(); ?></h6>
			<p class="proj-simple-desc"><?php the_excerpt(); ?></p>
		</a>
	</div>

	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</div>
