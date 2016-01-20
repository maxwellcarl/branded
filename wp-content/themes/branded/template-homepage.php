<?php 
/* Template Name: Homepage */ 
get_header(); ?>

	<section class="">
		<div class="container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
			<div class="col-md-6">
				<h2> 2 col? </h2>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie vitae orci sit amet iaculis. Etiam tempus volutpat leo, eget rhoncus dolor porta sit amet. Nam malesuada, leo a suscipit ullamcorper, arcu libero pellentesque est, nec sollicitudin dolor sem ac ex. Quisque tempus lorem tellus, ac sodales nibh facilisis non. Maecenas vel nibh a felis rutrum pretium eu a nulla. Praesent sollicitudin molestie elit eu tincidunt. Quisque tincidunt urna ac diam fermentum efficitur. Morbi lobortis tempor tempor. Aliquam erat volutpat. Integer ac lacinia erat. Duis ac sapien imperdiet, ultricies lectus eget, egestas ipsum. Nulla facilisi. Etiam a nulla posuere, suscipit tortor vel, lobortis lorem. Nullam augue neque, ultrices et nisi efficitur, bibendum congue ipsum. Vestibulum est diam, sollicitudin ultrices laoreet nec, maximus hendrerit augue. Fusce id viverra tellus.
			</div>
			<div class="col-md-6">
			<h2> 2 col? </h2>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie vitae orci sit amet iaculis. Etiam tempus volutpat leo, eget rhoncus dolor porta sit amet. Nam malesuada, leo a suscipit ullamcorper, arcu libero pellentesque est, nec sollicitudin dolor sem ac ex. Quisque tempus lorem tellus, ac sodales nibh facilisis non. Maecenas vel nibh a felis rutrum pretium eu a nulla. Praesent sollicitudin molestie elit eu tincidunt. Quisque tincidunt urna ac diam fermentum efficitur. Morbi lobortis tempor tempor. Aliquam erat volutpat. Integer ac lacinia erat. Duis ac sapien imperdiet, ultricies lectus eget, egestas ipsum. Nulla facilisi. Etiam a nulla posuere, suscipit tortor vel, lobortis lorem. Nullam augue neque, ultrices et nisi efficitur, bibendum congue ipsum. Vestibulum est diam, sollicitudin ultrices laoreet nec, maximus hendrerit augue. Fusce id viverra tellus.
			</div>

		<?php endwhile; ?>

		<?php else: ?>
			nothing
		<?php endif; ?>

		<div class="home-callouts cf">
			<?php if( have_rows('homepagecallouts') ): ?>
				<?php while( have_rows('homepagecallouts') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$link = get_sub_field('link');
					$txt = get_sub_field('txt', false, false);
					?>
					<div class="col-sm-6 col-md-4 col-lg-4 callout-item">
						<a href="<?php echo $link; ?>">
						<div class="img-wrap" style="background: url('<?php echo $img; ?>') top center; background-size: cover;"></div>
						<h4><?php echo $title; ?></h4>
						<p><?php echo $txt; ?></p>
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		</div>
	</section>


	<?php if( get_field('homepage_full_banner') ): ?>
	<div class="full-banner">
		<img src="<?php the_field('homepage_full_banner'); ?>">
	</div>
	<?php endif; ?>

	<?php if( get_field('content_below') ): ?>
	<section class="content-block">
		<?php the_field('content_below'); ?>
	</section>
	<?php endif; ?>


	<div class="greenland-video">
		<div class="video-callout">
			<h1>maybe somthing</h1>
		</div>

		<video id="greenland" autoplay loop>
			<source src="<?php echo get_template_directory_uri(); ?>/img/greenland2.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>

	</div>
	<p style="font-size: 10px; color: white; margin-top: -30px; margin-left: 5px; z-index: 2; position: relative;"><em>Aerial View of Greenlands Ice Sheets Melting into an Underground Channel</em></p>


	


	<section class="sub-footer cf">
		<div class="container">
			<div class="col-md-8 left">
				<h1>EXAMPLE BOOTSTRAP</h1>
			</div>
			<div class="col-md-4 right">
				<h1>SOME STUFF MAYBE?</h1>
			</div>
		</div>
	</section>





<?php get_footer(); ?>
