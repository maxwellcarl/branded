<?php 
/* Template Name: Our Work */ 
get_header(); ?>


<div class="parallax-window services-parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-screen.jpg">
</div>
	
	<h1 class="page-title">Our Work</h1>
	
	<div class="folding-bar-1">
		<div class="folding-bar-2">
			<div class="folding-bar-3">
				<div class="bar-title1 hidden-xs">Some of our recent projects</div>
				<div class="bar-title2 visible-xs">Our Work:</div>
			</div>
		</div>
	</div>


	<div class="cube cube-home">
	  <div class="top"></div>
	  <div class="right"></div>
	  <div class="bottom"></div>
	  <div class="left"></div>
	  <div class="front"></div>
	  <div class="back"></div>
	</div>

	<div id="mouse-icon">
		<div id="scroll-wheel"></div>
	</div>

	
</div>



<section class="recent-work" style="padding: 100px 0;">
	<div class="container"
	<?php get_template_part('includes/projs'); ?>
	</div>
</section>







<?php get_footer(); ?>
