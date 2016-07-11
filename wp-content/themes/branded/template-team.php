<?php 
/* Template Name: Team */ 
get_header(); ?>


<div class="gradient-roll parallax-window" data-parallax="scroll" style="position:relative; min-height: 90px;">
	<h1 class="page-title">Collaborators</h1>
</div>

<section class="content-block" style="padding: 0;">
	<p class="page-desc"><strong>MEET OUR COLLABORATORS</strong><br><br>We are a collection of freelance consultants, designers, web developers and marketing experts.<br>We elevate brands and take ideas to the next level.</p>

	<div class="team-members cf" style="padding: 30px 0 90px;">
		<div class="container">
		<?php if( have_rows('team_members') ): ?>
			<?php while( have_rows('team_members') ): the_row(); 
				$img = get_sub_field('img');
				$title = get_sub_field('title');
				$location = get_sub_field('location');
				$desc = get_sub_field('desc', false, false);
				?>
				<div class="col-md-4 team-member">
					<div class="img-wrap" style="background: url('<?php echo $img; ?>') top center; background-size: cover;"></div>
					<h4><?php echo $title; ?></h4>
					<h6 style="font-size: 10px;">- <?php echo $location; ?>- </h6>
					<p style="text-align:center;"><?php echo $desc; ?></p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>

</section>


<?php get_footer(); ?>
