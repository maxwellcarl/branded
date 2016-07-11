<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/fav.png" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/fav.png" rel="apple-touch-icon-precomposed">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">


<!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>

<!--[if IE]>
    <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
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



<!-- header pullout menu -->
<header class="menu-pullout">

	<a href="#" class="menu-close-btn"></a>

	<div class="desktop-menu">
		<nav class="primary-nav" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>
	</div>

<!-- 	<div class="mobile-menu" style="display:none;">
		<nav class="mobile-nav">
			<?php html5blank_nav(); ?>
		</div>
		</nav>
	</div> -->

	<div class="cube cube-menu">
	  <div class="top"></div>
	  <div class="right"></div>
	  <div class="bottom"></div>
	  <div class="left"></div>
	  <div class="front"></div>
	  <div class="back"></div>
	</div>

</header>
<div class="menu-pullout-overlay"></div>





<div id="wrapper"><!-- open site wrapper -->

<!-- header -->
<header id="top" class="main-header clear" role="banner">

	<!-- <div class="site-titles2">
		<a href="/"><h1 class="brand-txt">DIGITAL SAUNA.</h1></a>
	</div> -->
	<div class="logo">
		<a href="/"><h1 class="brand-txt">DIGITAL SAUNA wtf</h1></a>
	</div>
	<a href="#" class="menu-pullout-btn">
		<!-- <div class="navigate-txt">Navigate.</div> -->
		<div class="btn-bar"></div>
		<div class="btn-bar"></div>
		<div class="btn-bar"></div>
	</a>
	<div class="menu-pullout-btn black-btn">
		<!-- <div class="navigate-txt">Navigate.</div> -->
		<div class="btn-bar"></div>
		<div class="btn-bar"></div>
		<div class="btn-bar"></div>
	</div>

	<div id="time-wrap"><div id="time"></div></div>

</header>



<!-- banner  sections -->
<? if ( is_page_template( 'template-homepage.php' ) ): ?><!-- homepage -->



<? elseif ( is_404() ): ?>

	404

<? elseif ( is_home() ): ?><!-- blog page (news) -->


<? elseif ( is_single() ): ?><!-- single blog page (news) -->



<? else: ?><!-- all pages -->



<? endif; ?>


