<?php
/*
Template Name: Training Courses
*/
?>

<?php get_header(); ?>
<section id="classes" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="flat">Doula Training Classes</h1>
				<p class="snippet"><?php the_field('intro'); ?></p>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 10, 'category_name' => 'courses', 'order' => 'DSC', 'orderby' => 'date' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-12 card <?php the_title_attribute(); ?>">
						<!-- <img class="ribbon" src="<?php bloginfo('template_directory'); ?>/library/images/sold-out-ribbon.png" alt=""> -->
						<div class="row">
							<div class="col-sm-4">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class="col-sm-8">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<h3>Target Audience</h3>
								<p><?php the_field('target_audience'); ?></p>
								<h3>Course Overview</h3>
								<p class="flat"><?php the_field('course_snippet'); ?> <a href="<?php the_permalink(); ?>" title="See entire <?php the_title(); ?> curriculum">Learn more &rarr;</a></p>
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
<script>
	jQuery(document).ready(function($){
		$('.7909 a').attr('href', 'http://cornerstonedoulatrainings.com/hawaii-doula-retreat');
	});
</script>
<?php get_footer(); ?>