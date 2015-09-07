<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<section id="contact" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header>
					<h1 class="page-title flat"><?php the_title(); ?></h1>
					<p class="snippet">Questions about our services?  Need a Doula?  Contact us below and we'll get right back to ya.</p>
				</header>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>