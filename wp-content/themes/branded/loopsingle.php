<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="meta">
			<span class="date"><?php the_time('F j, Y'); ?></span>
		</div>

		<p><?php the_content(); ?></p>
		
	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
