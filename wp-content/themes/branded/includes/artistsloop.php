
<?php
	$args = array('post_type' => 'artist', 'posts_per_page' => 50);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>

	<section class="container cf">

	<?php the_content(); ?>

	</section>

	<?php endwhile; ?>
<?php wp_reset_query(); ?>
