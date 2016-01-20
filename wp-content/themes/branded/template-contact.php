<?php 
/* template name: Contact */
get_header(); ?>

	<section class="content-block margin">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else: ?>
			nothing
		<?php endif; ?>

	</section>

	<?php if( get_field('contentbanner') ): ?>
	<div class="full-banner">
		<img src="<?php the_field('contentbanner'); ?>">
		<div class="watermark mail-modal-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/wavebranding-white.png"/></div>
	</div>
	<?php endif; ?>

	<?php if( get_field('page_content_below') ): ?>
	<section class="content-block">
		<?php the_field('page_content_below'); ?>
	</section>
	<?php endif; ?>



<?php get_footer(); ?>
