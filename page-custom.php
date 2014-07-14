<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section id="hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-9 col-lg-offset-0 col-md-10 col-md-offset-1">
				<h1>The Bay Area's leader in doula training</h1>
				<p>Blending traditional wisdom of childbirth with current and progressive childbirth practices, we prepare you to help families start their lives together in the most gentle and loving way.</p>
				<a href="#" class="btn btn-primary btn-lg">View available courses <i class="glyphicon glyphicon-chevron-right"></i></a>
				<a href="#" class="btn btn-default btn-lg">More about us <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
<section id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Our Students <i class="glyphicon glyphicon-heart"></i> Us</h1>
			</div>
		</div>
		<div class="row">
      <div class="col-sm-4 text-center">
				<img src="http://caringdrivers:8888/wp-content/uploads/2014/04/alex-m.jpg" alt="Headshot of Alex M." class="thumbnail">
  			<blockquote>
      		Cornerstone changed my life forever.  I went from no experience to being a doula in 6 months. <small>Rayna Hale</small>
      	</blockquote>
      </div>
      <div class="col-sm-4 text-center">
				<img src="http://caringdrivers:8888/wp-content/uploads/2014/04/miriam.jpg" alt="Headshot of Michelle S." class="thumbnail">
  			<blockquote>
      		Nickie is the best teacher I've ever had.  She's extremely knowledgeable, caring and patient. <small>Annette Schwarz</small>
      	</blockquote>
      </div>
      <div class="col-sm-4 text-center">
				<img src="http://caringdrivers:8888/wp-content/uploads/2014/04/michelle.jpg" alt="Headshot of Miriam J." class="thumbnail">
				<blockquote>
	    		Becoming a doula gave me a new lease on life.  I'm taking on a new client every month and loving it. <small>Whitney Stevens</small>
	    	</blockquote>
			</div>
			<p class="text-center"><a class="btn btn-primary secondary" href="/case-studies">Get to know our students &raquo;</a></p>
    </div>
	</div>
</section>
<section id="philosophy">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1>Our Philosophy</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius incidunt, cumque qui beatae, officiis cum porro veniam! Consequuntur porro aut ipsam voluptates, odit dolores quo dignissimos, eum, animi ipsa molestias.</h2>
				<p class="text-center"><a class="btn btn-primary secondary" href="/case-studies">More about us &raquo;</a></p>
			</div>
		</div>
	</div>
</section>
<section id="faq">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<h1>Commonly Questions About Doula Training</h1>
				<?php if(get_field('faq')): ?>
 
					<div class="panel-group" id="accordion">

					<?php while(has_sub_field('faq')): ?>

						<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>">
					          <?php the_sub_field('question'); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
					      <div class="panel-body">
					        <?php the_sub_field('answer'); ?>
					      </div>
					    </div>
					  </div>
				
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
