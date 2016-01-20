<?php 
/* Template Name: Team */ 
get_header(); ?>

	<section class="content-block margin">

		<?php get_template_part('includes/breadcrumbs'); ?>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>
		<?php endif; ?>

		<h3>Head Coaches</h3>
		<div class="team-members cf">
			<?php if( have_rows('team_members') ): ?>
				<?php while( have_rows('team_members') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$position = get_sub_field('position', false, false);
					$txt = get_sub_field('txt', false, false);
					?>
					<div class="col-sm-6 col-md-6 col-lg-6 team-member">
						<div class="img-wrap" style="background: url('<?php echo $img; ?>') top center; background-size: cover;"></div>
						<h4><?php echo $title; ?></h4>
						<h6>- <?php echo $position; ?> -</h6>
						<p><?php echo $txt; ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div style="margin: 40px 0; text-align:center;"><img class="logo-text" src="<?php echo get_template_directory_uri(); ?>/img/wavebranding.png" width="80" alt="Logo" class="logo-img"></div>
		
		<h3>Instructors</h3>
		<div class="team-members team-members2 cf">
			<?php if( have_rows('team_members2') ): ?>
				<?php while( have_rows('team_members2') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$position = get_sub_field('position', false, false);
					$txt = get_sub_field('txt', false, false);
					?>
					<div class="team-member cf">
						<div class="col-sm-4">
							<div class="img-wrap" style="background: url('<?php echo $img; ?>') top center; background-size: cover;"></div>
						</div>
						<div class="col-sm-8">
							<h4><?php echo $title; ?></h4>
							<h6>- <?php echo $position; ?> -</h6>
							<p><?php echo $txt; ?></p>
						</div>
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



<?php get_footer(); ?>
