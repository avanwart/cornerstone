<?php
/*
Template Name: Need a Doula
*/
?>

<?php get_header(); ?>
<section id="doulas" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-10 col-lg-offset-1">
				<h1 class="flat">Need a Doula?</h1>
				<p class="snippet">We are very pleased to announce that we now offer a Doula match-matchmaking service.  The following birth professionals are recent graduates of our program and are offering either low fee or volunteer services. <!-- <br class="hidden-xs"/><a href="../contact/">Contact us</a> if you have any questions. --></p>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'category_name' => 'doulas', 'order' => 'DSC', 'orderby' => 'date' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="card">
							<div class="row">
								<div class="col-sm-12 headshot">
									<?php the_post_thumbnail('medium'); ?>	
									<h2><a target="_blank" href="<?php the_field('website'); ?>" title="Contact <?php the_title(); ?> directly"><?php the_title(); ?></a> <small><?php the_field('business_name'); ?></small></h2>								
								</div>
								<div class="col-sm-12 info">
									<h3>Specialties: <small><?php the_field('specialties'); ?></small></h3>
									<h3>Fee: <small><?php the_field('fee'); ?></small></h3>
									<h3>Volunteer: <small><?php the_field('volunteer'); ?></small></h3>
									<a target="_blank" class="btn btn-default btn-block" href="<?php the_field('website'); ?>" title="Contact <?php the_title(); ?> directly">Contact <?php the_title(); ?></a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'category_name' => 'doulas', 'order' => 'DSC', 'orderby' => 'date', 'offset' => 3 );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="card">
							<div class="row">
								<div class="col-sm-12 headshot">
									<?php the_post_thumbnail('medium'); ?>	
									<h2><a target="_blank" href="<?php the_field('website'); ?>" title="Contact <?php the_title(); ?> directly"><?php the_title(); ?></a> <small><?php the_field('business_name'); ?></small></h2>								
								</div>
								<div class="col-sm-12 info">
									<h3>Specialties: <small><?php the_field('specialties'); ?></small></h3>
									<h3>Fee: <small><?php the_field('fee'); ?></small></h3>
									<h3>Volunteer: <small><?php the_field('volunteer'); ?></small></h3>
									<a target="_blank" class="btn btn-default btn-block" href="<?php the_field('website'); ?>" title="Contact <?php the_title(); ?> directly">Contact <?php the_title(); ?></a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'category_name' => 'doulas', 'order' => 'DSC', 'orderby' => 'date', 'offset' => 6 );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="card">
							<div class="row">
								<div class="col-sm-12 headshot">
									<?php the_post_thumbnail('medium'); ?>	
									<h2><a target="_blank" href="<?php the_field('website'); ?>" title="Contact <?php the_title(); ?> directly"><?php the_title(); ?></a> <small><?php the_field('business_name'); ?></small></h2>								
								</div>
								<div class="col-sm-12 info">
									<h3>Specialties: <small><?php the_field('specialties'); ?></small></h3>
									<h3>Fee: <small><?php the_field('fee'); ?></small></h3>
									<h3>Volunteer: <small><?php the_field('volunteer'); ?></small></h3>
									<a target="_blank" class="btn btn-default btn-block" href="<?php the_field('website'); ?>" title="Contact <?php the_title(); ?> directly">Contact <?php the_title(); ?></a>
								</div>
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