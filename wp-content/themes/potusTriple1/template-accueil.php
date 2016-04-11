<?php /* Template Name: Accueil Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<div class="wide_post">
			<?php $args = array(
				'posts_per_page'   => 1,
				'tag' 				=> 'wide',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post'
			);
			$posts_array = get_posts( $args ); 

			foreach ( $posts_array as $post ) : setup_postdata( $post ); 
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>

					<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $url; ?>)">
					<?php //echo get_the_post_thumbnail( $post->ID, 'full' ); ?></a>
					<span class="over"></span>
					
					<p><span class="arrow"></span><?php the_title(); ?></p>
			<?php endforeach; 
			wp_reset_postdata();
			?>
		</div>

		<div class="small_post">
			<?php $args = array(
				'posts_per_page'   => 3,
				'tag' 				=> 'small',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post'
			);
			$posts_array = get_posts( $args ); 
			foreach ( $posts_array as $post ) : setup_postdata( $post ); 
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				$category = get_the_category($post->ID);
				?>
				<div class="post">
					<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $url; ?>)" ></a>
					<span class="over"></span>
					<p><?php the_title(); ?></p>
					<p class="category">
						<?php echo $category[0]->name; ?>
					</p>
					<div class="clear"></div>
				</div>

			<?php endforeach; 
			wp_reset_postdata();
			?>

			<div class="clear"></div>
		</div>



		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
