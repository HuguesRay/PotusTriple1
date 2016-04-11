<?php get_header('single'); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists ?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url(<?php echo $url; ?>)">
		<?php else: ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php endif; ?>
			<div class="content-wrap">
				<!-- post title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->

				<?php the_content(); // Dynamic Content ?>
			</div>
			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
