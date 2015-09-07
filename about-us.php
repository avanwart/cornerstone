<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>
<section id="about" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php if (function_exists("builder_breadcrumb_lists")) { ?>
					<?php builder_breadcrumb_lists(); ?>
					<?php } ?>
				<div class="card">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
							


						</header> <!-- end article header -->

						<div class="entry-content clearfix" itemprop="articleBody">
							<div class="row">
								<div class="col-sm-12">
									<img class="thumbnail headshot" src="<?php the_field('trainer_1_headshot'); ?>">
									<h3><?php the_field('trainer_1_name'); ?></h3>
									<p><?php the_field('trainer_1_bio'); ?></p>
									<p class="text-right flat"><a href="<?php the_field('trainer1_linkedin_url');?>" class="linkedin" target="_blank"><?php the_field('trainer_1_name'); ?> on Linkedin</a></p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<img class="thumbnail headshot" src="<?php the_field('trainer_2_headshot'); ?>">
									<h3><?php the_field('trainer_2_name'); ?></h3>
									<p><?php the_field('trainer_2_bio'); ?></p>
									<p class="text-right flat"><a href="<?php the_field('trainer2_linkedin_url');?>" class="linkedin" target="_blank"><?php the_field('trainer_2_name'); ?> on Linkedin</a></p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<img class="thumbnail headshot" src="<?php the_field('trainer_3_headshot'); ?>">
									<h3><?php the_field('trainer_3_name'); ?></h3>
									<p><?php the_field('trainer_3_bio'); ?></p>
									<p class="text-right flat"><a href="<?php the_field('trainer3_linkedin_url');?>" class="linkedin" target="_blank"><?php the_field('trainer_3_name'); ?> on Linkedin</a></p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<img class="thumbnail headshot" src="<?php the_field('trainer_4_headshot'); ?>">
									<h3><?php the_field('trainer_4_name'); ?></h3>
									<p><?php the_field('trainer_4_bio'); ?></p>
									<p class="text-right flat"><a href="<?php the_field('trainer4_linkedin_url');?>" class="linkedin" target="_blank"><?php the_field('trainer_4_name'); ?> on Linkedin</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center"><a class="btn btn-primary" href="../courses" class="btn-btn-primary">View available courses <i class="glyphicon glyphicon-chevron-right"></i></a></div>
							</div>

							
						</div> <!-- end article section -->

						<footer class="article-footer">
							<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?>

						</footer> <!-- end article footer -->


					</article> <!-- end article -->

					<?php endwhile; else : ?>

					<article id="post-not-found" class="hentry clearfix">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
