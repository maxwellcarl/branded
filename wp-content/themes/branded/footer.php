
</div><!-- /wrapper -->



<footer class="main-footer" role="contentinfo">

	<section class="container cf">

		<div class="footer-logo col-xs-12 col-sm-3">
			<h2>logo here</h2>
			<h4 class="tag">NYC - LAX - PDX</h4>
			<p class="tag">"Web-Design Web-Development Experts"</p>
		</div>
		
		<div class="col-sm-3">
			<h4>Social</h4>
			<?php if( have_rows('footer_social') ): ?>
				<ul class="footer-social">
					<?php while( have_rows('footer_social') ): the_row(); 
						$facebook = get_sub_field('facebook');
						$twitter = get_sub_field('twitter');
						$insta = get_sub_field('insta');
						$youtube = get_sub_field('youtube');
						?>
						<li class="fb">
							<?php if( $facebook ): ?>
								<a href="<?php echo $facebook; ?>"><span class="entypo-facebook-circled"></span></a>
							<?php endif; ?>
						</li>
						<li class="tw">
							<?php if( $twitter ): ?>
								<a href="<?php echo $twitter; ?>"><span class="entypo-twitter-circled"></span></a>
							<?php endif; ?>
						</li>
						<li class="insta">
							<?php if( $twitter ): ?>
								<a href="<?php echo $insta; ?>"><span class="entypo-instagrem"></span></a>
							<?php endif; ?>
						</li>
						<li class="you">
							<?php if( $twitter ): ?>
								<a href="<?php echo $youtube; ?>"><span class="zocial-youtube"></span></a>
							<?php endif; ?>
						</li>
						<li class="email-list">
							<a class="mail-modal-btn" href="#"><span class="entypo-paper-plane"></span></a>
						</li>


					<?php endwhile; ?>
					</ul>
			<?php endif; ?>

			<h4>Contact</h4>
			<?php if( get_field('footer_contact') ): ?>
				<?php the_field('footer_contact'); ?>
			<?php endif; ?>
			<div class="mailchimp">
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="//swim-city.us11.list-manage.com/subscribe/post?u=3b66191a700b033d3c5226f84&amp;id=848a6b7e86" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
				<div class="mc-field-group">
					<h4>Newsletter Signup</h4>
					<input type="email" placeholder="Enter Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3b66191a700b033d3c5226f84_848a6b7e86" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				   	</div>
				</form>
				</div>

				<!--End mc_embed_signup-->
			</div>

		</div>
		<div class="col-sm-6 site-map">
			<h4>Site Map</h4>
			<?php
			  $args = array(
			  'orderby' => 'post_title',
			  'order' => 'ASC',
				'post_type' => 'page',
				'showposts' => 1000,
				'caller_get_posts' => 1
			  ); 
			$pages = get_posts($args);
			      foreach($pages as $page) {
			          $out .= '<li>';
			          $out .=  '<a href="'.get_permalink($page->ID).'" title="'.wptexturize($page->post_title).'">'.wptexturize($page->post_title).'</a></li>';
			      }
			    $out = '<ul class="page_post">' . $out . '</ul>';
			    echo $out;
			?>
		</div>


	</section>

</footer>


<!-- copyright -->
<p class="copyright">
	&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> and <a href="http://maxwellcarlscott.com">maxwellcarlscott.com</a>
</p>



<!-- Begin MailChimp Signup Form -->
<div class="mail-modal">
	<div id="mc_embed_signup">
	<form action="//swim-city.us11.list-manage.com/subscribe/post?u=3b66191a700b033d3c5226f84&amp;id=848a6b7e86" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
	    <a href="<?php echo home_url(); ?>">
			<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
			<img class="mail-logo" src="<?php echo get_template_directory_uri(); ?>/img/swimcitylogowhit.svg" alt="Logo" class="logo-img">
		</a>
		<h4>DIVE IN!</h4><p>Stay in the know about SwimCity news and swim inspiration!</p>
	<div class="mc-field-group">
		<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
	</label>
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
	<div class="mc-field-group">
		<label for="mce-FNAME">First Name </label>
		<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
	</div>
	<div class="mc-field-group">
		<label for="mce-LNAME">Last Name </label>
		<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
	</div>
	<div class="mc-field-group">
		<label for="mce-MMERGE3">Zip Code </label>
		<input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3b66191a700b033d3c5226f84_848a6b7e86" tabindex="-1" value=""></div>
	    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	    </div>
	</form>
	</div>
	<!--End mc_embed_signup-->
</div>
<div class="mail-modal-overlay"></div>



<!-- site overlay -->
<div class="overlay"></div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>


<!-- analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-67401412-1', 'auto');
ga('send', 'pageview');

</script>

</body>
</html>
