<?php 
/* Template Name: Homepage */ 
get_header(); ?>


<video id="ambiance" autoplay loop name="media" style="height: 0; margin: 0; padding: 0; position: fixed;">
	<source src="http://maxwellcarlscott.com/maxwellcarlscott.com/wp-content/themes/maxwell/videos/sound-drone.ogg" type="audio/ogg">
</video>

<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/watermelon.jpg"></div> -->
<div class="gradient-roll parallax-window" data-parallax="scroll" style="position:relative;">

	<div class="play-pause">
		<img class="noaudio" src="<?php echo get_template_directory_uri(); ?>/img/noaudio.png">
		<div id="bars">
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
		    <div class="bar"></div>
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

	<div class="type-wrap">
		<div id="type"></div>
	</div>

	<div class="folding-bar-1">
		<div class="folding-bar-2">
			<div class="folding-bar-3">
				<span>Welcome to the Digital Sauna - </span>Your creative hotbox
			</div>
		</div>
	</div>

</div>




<section id="main-content" class="homepage-callout">
	<div class="container">

		<?php if( get_field('home_callout_txt') ): ?>
			<div class="col-md-10 col-md-offset-1">
				<h1 class="home-callout-txt"><?php the_field('home_callout_txt', false, false); ?></h1>
			</div>
		<?php endif; ?>
			
			

		<!-- <div class="container">
			<div class="greenland-video">
				<video id="greenland" autoplay loop>
					<source src="<?php echo get_template_directory_uri(); ?>/img/greenland.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> -->
				<!-- <video id="ambiance" autoplay loop name="media">
					<source src="<?php echo get_template_directory_uri(); ?>/img/sound-drone.ogg" type="audio/ogg">
				</video> -->
				<!-- <div class="mute">&#9654;</div> -->
		<!-- 	</div>
			<p style="font-size: 10px; color: white; margin-top: -30px; margin-left: 5px; z-index: 2; position: relative;"><em>Aerial View of Greenlands Ice Sheets Melting into an Underground Channel.</em></p>
		</div> -->
	
		
		<div class="creative-blocks">
			<div class="container">
				<div class="col-md-6 c-block block1 waypoint gradient-roll">
					<?php if( get_field('creativeblock1') ): ?>
						<div class="c-block-content"><?php the_field('creativeblock1', false, false); ?></div>
					<?php endif; ?>
				</div>	
				<div class="col-md-6 c-block block2 video waypoint">
					<?php if( get_field('creativeblock_video') ): ?>
						<video class="block-vid" autoplay loop>
							<source src="<?php the_field('creativeblock_video'); ?>" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<h4 class="text-overlay" style="letter-spacing: 1px;"><strong>
							
						</strong></h4>
					<?php endif; ?>
				</div> 

				<div class="col-md-6 c-block block3 waypoint">
					<?php if( get_field('creativeblock3') ): ?>
						<div class="c-block-content"><?php the_field('creativeblock3', false, false); ?></div>
					<?php endif; ?>
				</div>	
				
				<div class="col-md-6 c-block block4 waypoint gradient-roll-reverse">
					<?php if( get_field('creativeblock4') ): ?>
						<div class="c-block-content"><?php the_field('creativeblock4', false, false); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>


		<div class="homepage-services cf">
			<?php if( have_rows('homepagecallouts') ): ?>
				<?php while( have_rows('homepagecallouts') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$link = get_sub_field('link');
					$txt = get_sub_field('txt', false, false);
					?>
					<div class="col-sm-6 col-md-4 col-lg-4 homepage-services-item waypoint">
						<a href="<?php echo $link; ?>">
						<div class="img-wrap">
							<div class="interior-img" style="background: url('<?php echo $img; ?>') no-repeat center center; background-size: 50%;"></div>
						</div>
						<h4><?php echo $title; ?></h4>
						<p><?php echo $txt; ?></p>
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="services-callouts cf" style="padding: 30px 0;">
			<div class="col-md-4">
				<p class="waypoint up">Ecommerce Sites</p>
				<p class="waypoint up">Custom Wordpress / Shopify Development</p>
				<p class="waypoint up">Full Content Management</p>
				<p class="waypoint up">Modern SEO</p>
				<p class="waypoint up">Clean Coding</p>
				<p class="waypoint up">Full Content Management</p>
				<p class="waypoint up">Mobile / Responsive Development</p>
				<p class="waypoint up">Social Media Integration</p>
				<p class="waypoint up">Blog Development</p>

			</div>
			<div class="col-md-4">
				<p class="waypoint up">Creative Direction</p>
				<p class="waypoint up">Custom Branding Work</p>
				<p class="waypoint up">Responsive Web Design</p>
				<p class="waypoint up">Digital Marketing Strategy</p>
				<p class="waypoint up">Graphic Design Work</p>
				<p class="waypoint up">Typoghraphy Design</p>
				<p class="waypoint up">Product Packaging</p>
				<p class="waypoint up">Analytics</p>
				<p class="waypoint up">UX/UI Design Experience</p>
			</div>
			<div class="col-md-4">
				<p class="waypoint up">Product Photography</p>
				<p class="waypoint up">Interior Photography</p>
				<p class="waypoint up">Photo Editing</p>
				<p class="waypoint up">Video Production</p>
				<p class="waypoint up">Video Editing</p>
				<p class="waypoint up">3D Rendering</p>
				<p class="waypoint up">Virtual Reality</p>
			</div>
		</div>


		<p style="padding: 90px 0 60px; text-align: center;">Email us for more information or get a project quoted: <br><br><a href="mailto:info@digitalsauna.com" target="_blank" class="big-email">info@digitalsauna.com</a></p>


	</div>
</section>



<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/saunadark.jpg">
	<div class="home-parallax-window-txt waypoint">
		<h6>Relax...</h6>
		<h1 style="font-family: didot; font-weight: 100;">Let us sweat for you</h1>
	</div>
</div>


<!--
<div class="greenland-video">
	<div style="background:white; width: 100%; height: 100%; position: absolute; left: 0; right: 0; opacity: .9;"></div>
	<div class="video-callout">
		<h1 style="color:black;"><strong>Create Something Amazing</strong></h1>
	</div>

	<video id="greenland" autoplay loop>
		<source src="<?php echo get_template_directory_uri(); ?>/img/greenland2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>

</div>
<p style="font-size: 10px; color: white; margin-top: -30px; margin-left: 5px; z-index: 2; position: relative;"><em>Aerial View of Greenlands Ice Sheets Melting into an Underground Channel</em></p>

-->


<section class="sub-footer cf someselector">
	<div class="container">
		<div class="col-md-12" style="text-align:center">
			<h6 style="letter-spacing: 4px; text-align:center;">Clientelle</h6>
			<p style="font-size: 9px; opacity: .4;  margin-bottom: 60px; letter-spacing: 1px;"><em>- A few people we have worked with -</em></p>
			<?php if( have_rows('clients') ): ?>
				<?php while( have_rows('clients') ): the_row(); 
					$img = get_sub_field('img');
					$url = get_sub_field('url');
					?>
					<div class="logos" style="float: none; display: inline-block; vertical-align: middle;">
						<a href="<?php echo $url; ?>" target="_blank">
							<img style="width: 120px;" src="<?php echo $img; ?>">
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>





<?php get_footer(); ?>
