<?php 
/* template name: Contact */
get_header(); ?>


<div class="parallax-window contact-parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/contactbg.jpg">
	<h1 class="page-title">Contact Us</h1>
</div>

<section class="contact-content" style="clear:both;">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="post-content col-md-6 col-md-offset-3">
			<h1 style="font-family: 'Futura Std'; font-weight: 100;">Contact Us</h1>
			<div class="contact-form"><?php the_content(); ?></div>
		</div>
		<div style="clear:both;"></div>

	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>

</section>


<?php get_footer(); ?>
