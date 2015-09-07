<?php get_header(); ?>

<section id="content" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if (function_exists("builder_breadcrumb_lists")) { ?>
					<?php builder_breadcrumb_lists(); ?>
					<?php } ?>
			</div>
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 card">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
						$url = $thumb['0'];
					?>
					<header style="background-image: url(<?=$url?>);">
						<div class="overlay">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</div>
					</header>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content clearfix" itemprop="articleBody">
							<?php 
								if ( in_category( 'blog' )) { ?>
								<?php the_content(); ?>
								<?php comments_template(); ?>
							<?php } else { ?>
								<h3>Target Audience</h3>
								<p><?php the_field('target_audience'); ?></p>
								<h3>Course Overview</h3>
								<p><?php the_field('course_snippet'); ?></p>
								<!-- <p class="text-center"><a href="/sign-up" class="btn btn-lg btn-primary">Sign up now <i class="glyphicon glyphicon-chevron-right"></i></a></p> -->
								<h3>Course Curriculum</h3>
								<?php the_field('course_content'); ?>
								<p class="text-center"><a href="/sign-up" class="btn btn-lg btn-primary">Sign up now <i class="glyphicon glyphicon-chevron-right"></i></a></p>
							<?php }
							?>
						</section> <!-- end article section -->


					</article> <!-- end article -->

				<?php endwhile; ?>

				<?php else : ?>

					<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
							</footer>
					</article>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>