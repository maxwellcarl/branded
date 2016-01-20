<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">


<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>

<!--[if IE]>
    <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<?php wp_head(); ?>


<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
    assets: '<?php echo get_template_directory_uri(); ?>',
    tests: {}
});
</script>



</head>
<body <?php body_class(); ?>>

<!-- header -->
<header class="main-header clear" role="banner">


		<ul class="header-social">
			<a href="NOTSURE">EMAIL@ADDRESS.COM</a>
		</ul>

		<a href="/"><div class="cube">
		  <div class="top"></div>
		  <div class="right"></div>
		  <div class="bottom"></div>
		  <div class="left"></div>
		  <div class="front"></div>
		  <div class="back"></div>
		</div></a>

		<nav class="primary-nav" role="navigation">
			<div class="nav-wrap">
				<?php html5blank_nav(); ?>
		</nav>

		<a href="#" class="nav-open">Menu <span class="entypo-down-open-big"></span></a>
		<nav class="mobile-menu">
			<a href="#" class="nav-close"><span class="entypo-cancel-circled"></span></a>
			<div class="mobile-nav">
				<?php html5blank_nav(); ?>
			</div>
		</nav>


</header>


<!-- banner  sections -->
<? if ( is_page_template( 'template-homepage.php' ) ): ?><!-- homepage -->

<div class="greenland-video">

	<video id="greenland" autoplay loop>
		<source src="<?php echo get_template_directory_uri(); ?>/img/greenland.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<video id="ambiance" autoplay loop name="media">
		<source src="<?php echo get_template_directory_uri(); ?>/img/sound-drone.ogg" type="audio/ogg">
	</video>
	<!-- <div class="mute">&#9654;</div> -->
</div>
<p style="font-size: 10px; color: white; margin-top: -30px; margin-left: 5px; z-index: 2; position: relative;"><em>Aerial View of Greenlands Ice Sheets Melting into an Underground Channel</em></p>


<? elseif ( is_404() ): ?>

	404

<? elseif ( is_home() ): ?><!-- blog page (news) -->

	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<img src="<?php echo $thumb_url[0]; ?>" class="page-banner-img">
	</div>

<? elseif ( is_single() ): ?><!-- single blog page (news) -->

	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<img src="<?php echo $thumb_url[0]; ?>" class="page-banner-img">
	</div>

<? elseif ( is_page_template( 'template-contact.php' ) ): ?>
	
	<div class="banner">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>

<? else: ?><!-- all pages -->

	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<img src="<?php echo $thumb_url[0]; ?>" class="page-banner-img">
	</div>


<? endif; ?>


<!-- wrapper -->
<div class="wrapper">
