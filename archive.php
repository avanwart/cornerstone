<?php get_header(); ?>

<section id="blog" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="flat">Blog</h1>
				<p class="snippet"><?php the_field('intro'); ?></p>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 10, 'category_name' => 'blog', 'order' => 'DSC', 'orderby' => 'date' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-12 card">
						<div class="row">
							<div class="col-sm-4 hidden-xs">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
							</div>
							<div class="col-sm-8">
								<h2 style="text-align: left; margin-top: 0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php the_excerpt(); ?>
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


<?php get_footer(); ?>
