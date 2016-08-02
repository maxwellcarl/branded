<?php get_header(); ?>

	<section id="main-content" class="cf">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article class="post-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-data-bar">

					<?php if( get_field('complete_date') ): ?>
					<div class="col-md-3">
						<h6>Date: <?php the_field('complete_date', false, false); ?></h6>
					</div>
					<?php endif; ?>
					<?php if( get_field('formats') ): ?>
					<div class="col-md-6">
						<h6>Objectives: <?php the_field('formats', false, false); ?></h6>
					</div>
					<?php endif; ?>
					<?php if( get_field('viewsite') ): ?>
					<div class="col-md-3">
						<h6 style="color: #9AE2CA;"><?php the_field('viewsite', false, false); ?></h6>
					</div>
					<?php endif; ?>
				</div>

			<div class="post-content col-md-6 col-md-offset-3" style="padding: 60px 0 100px 0;">
				<h1 style="font-family: 'Futura Std'; font-weight: 100;"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>

			<?php endwhile; ?>
			<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>
		</article>


	</section>

<?php get_footer(); ?>
