<?php 
/* Template Name: Our Work */ 
get_header(); ?>


<div class="parallax-window services-parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-screen.jpg">
<h1 class="page-title">Our Work</h1>
</div>
<!-- <div class="gradient-roll parallax-window" data-parallax="scroll" style="position:relative;"> -->


	<div class="cube cube-footer" style="top: 100px; opacity: .6;">
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


<div class="folding-bar-1">
	<div class="folding-bar-2">
		<div class="folding-bar-3">
			Welcome to the Digital Sauna - Your creative hotbox
		</div>
	</div>
</div>

<div class="recent-work" style="padding: 100px 0; position: relative; display:block; background: white; text-align: center;">
	<h1 style="font-family: 'ChaletBookBold'; margin-bottom: 100px;">Recent Work</h1>
	<p style="font-size: 9px; opacity: .4; letter-spacing: 1px;"><em>Collection of recent projects</em></p>

	<?php get_template_part('includes/projs'); ?>
</div>







<?php get_footer(); ?>
