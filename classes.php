<?php
/*
Template Name: Classes
*/
?>

<?php get_header(); ?>
<section id="classes" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="flat">Doula Training Classes</h1>
				<p class="snippet">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quos ex mollitia quibusdam laudantium accusantium maxime sequi cumque omnis illum.</p>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 4, 'category_name' => 'classes', 'order' => 'ASC', 'orderby' => 'title' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-12 card">
						<div class="row">
							<div class="col-md-4">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class="col-md-8">
								<h2><a href="<?php the_permalink(); ?>" title="Course Details and Registration"><?php the_title(); ?></a></h2>
								<h3>Target Audience</h3>
								<p><?php the_field('target_audience'); ?></p>
								<h3>Course Overview</h3>
								<p class="flat"><?php the_field('course_snippet'); ?> <a href="<?php the_permalink(); ?>">Read more &rarr;</a></p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>