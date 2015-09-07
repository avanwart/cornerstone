<?php
/*
Template Name: Schedule
*/
?>
<?php get_header(); ?>


<section id="press-hits">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<header>
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    <?php the_content(); ?>
			    <p class="text-center" style="min-height: 200px">Please direct press inquiries to <a href="mailto:mark.parry@billforward.net" target="_blank">mark.parry@billforward.net</a></p>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Date</th>
								<th>Article</th>
								<th>Publication</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if( have_rows('class') ):
							    while ( have_rows('class') ) : the_row(); ?>
							<tr>
								<td><?php the_sub_field('class_name'); ?></td>
								<td><?php the_sub_field('dates'); ?></td>
								<td><?php the_sub_field('time'); ?></td>
							</tr>
							<?php endwhile; else : endif;  ?>
						</tbody>
					</table>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>