<?php /* Template Name: Contact Template */ get_header('single'); ?>

	<main role="main" class="contact">
		<!-- section -->
		<section>


<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
 


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
