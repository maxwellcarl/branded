<section class="container cf">

	<div class="footer-logo col-sm-3">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/swimcitylogowhit.svg" alt="Logo" class="logo-img">
		</a>
	</div>
	<div class="col-sm-3">
		<?php html5blank_nav(); ?>
	</div>
	<div class="col-sm-3">
		<h4>Contact</h4>
		<?php if( get_field('footer_contact') ): ?>
			<?php the_field('footer_contact'); ?>
		<?php endif; ?>
	</div>
	<div class="col-sm-3">
		<?php if( have_rows('social_footer') ): ?>
		<ul class="slides">
			<?php while( have_rows('social_footer') ): the_row(); 
				$facebook = get_sub_field('facebook');
				$twitter = get_sub_field('twitter');
				?>
				<li class="fb">
					<?php if( $facebook ): ?>
						<a href="<?php echo $facebok; ?>">
					<?php endif; ?>
				</li>
				<li class="tw">
					<?php if( $twitter ): ?>
						<a href="<?php echo $twitter; ?>">
					<?php endif; ?>
				</li>

			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>

</section>