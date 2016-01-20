<?php 
/* Template Name: Pricing */ 
get_header(); ?>

<section class="content-block">
	<div class="container">
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>
		<?php endif; ?>

		<div class="pricing-info cf">
			<?php if( have_rows('pricing_info') ): ?>
				<?php while( have_rows('pricing_info') ): the_row(); 
					$img = get_sub_field('img');
					$type = get_sub_field('type');
					$title = get_sub_field('title');
					$price = get_sub_field('price');
					$details = get_sub_field('details',fasle, false);
					?>
					<div class="col-sm-6 col-md-4 col-lg-4 package">
						<a href="/book-now">
							<div class="img-wrap" style="background: url('<?php echo $img; ?>') top center; background-size: cover;">
								<div class="book-overlay">Get Quote</div>
							</div>
						</a>
						<h3><?php echo $type; ?></h3>
						<h4><?php echo $title; ?></h4>
						<div class="details"><?php echo $details; ?></div>
						<div style="font-size: 11px; margin: 0; padding: 0; font-weight: 600;">Starting At:</div>
						<h4 class="price"><span>-</span> $<?php echo $price; ?><sup>00</sup> <span>-</span></h4>
						<a href="/contact" class="btn-round" style="color: white;">Request Quote</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

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

	</div>
</section>

<?php get_footer(); ?>
