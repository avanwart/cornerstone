<?php
/*
Template Name: Home Page New
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="hero" class="light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-10 col-lg-offset-1 col-md-12">
				<h1>California's Leader in <br class="visible-xs">Doula Training</h1>
				<h2>We provide in-depth Doula Training for birth workers of all skill levels.</h2>
				<ul>
					<li><i class="glyphicon glyphicon-ok"></i> Full Labor and Postpartum Doula certification packages available</li>
					<li><i class="glyphicon glyphicon-ok"></i> Intensive workshops backed by over 15 years of experience</li>
					<li><i class="glyphicon glyphicon-ok"></i> Small group classes in a comfortable home setting</li>
					<li><i class="glyphicon glyphicon-ok"></i> 1-on-1 mentorship program now available</li>
				</ul>
				<p class="text-center">
					<a href="#classes" class="btn btn-white btn-lg">View available courses <i class="glyphicon glyphicon-chevron-right"></i></a>
					<a href="#method" class="btn btn-default btn-lg">More about us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</p>
			</div>
		</div>
	</div>
</section>
<section id="method" class="pale">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1>Our Training Method</h1>
				<h2><?php the_field('training_method'); ?></h2>
				<p class="text-center"><a class="btn btn-primary btn-lg secondary" href="meet-the-trainers">More about us <i class="glyphicon glyphicon-chevron-right"></i></a></p>
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
			<div class="row">
	      <div class="col-sm-4 text-center">
	      	<div class="photo">
	      		<a class="modalButton" data-toggle="modal" data-src="http://www.youtube.com/embed/k3s2dPUYTiE?rel=0&wmode=transparent&fs=0&autoplay=1" data-height="360" data-width="580" data-target="#myModal">&nbsp;</a>
	      		<img src="<?php bloginfo('template_directory'); ?>/library/images/jenny.jpg" alt="Headshot of Jenny" class="thumbnail">
	      	</div>
	  			<blockquote>
	      		I just really liked the energy.  It was easy, low-cost and accessible.  Nickie is an amazing teacher with a lot of knowledge and wisdom. <small>Jenny Swiecicki</small>
	      	</blockquote>
	      </div>
	      <div class="col-sm-4 text-center">
	      	<div class="photo">
	      		<a class="modalButton" data-toggle="modal" data-src="http://www.youtube.com/embed/yiHvZ9V1Tak?rel=0&wmode=transparent&fs=0&autoplay=1" data-height="360" data-width="580" data-target="#myModal">&nbsp;</a>
	      		<img src="<?php bloginfo('template_directory'); ?>/library/images/rayna.jpg" alt="Headshot of Rayna" class="thumbnail">
	      	</div>
					
	  			<blockquote>
	      		Cornerstone has built an amazing community of doulas and I now have a fully-thriving, successful doula practice thanks to them. <small>Rayna Hale</small>
	      	</blockquote>
	      </div>
	      <div class="col-sm-4 text-center">
					<div class="photo">
						<a class="modalButton" data-toggle="modal" data-src="http://www.youtube.com/embed/R3yN8d2pWVE?rel=0&wmode=transparent&fs=0&autoplay=1" data-height="360" data-width="580" data-target="#myModal">&nbsp;</a>
						<img src="<?php bloginfo('template_directory'); ?>/library/images/andrea.jpg" alt="Headshot of Andrea" class="thumbnail">
					</div>
					<blockquote>
		    		Even for me, a three time nursing mom and someone who's taken care of infants for a long time, I came away with a lot of useful information.<small>Andrea Berkey</small>
		    	</blockquote>
				</div>
				<p class="text-center"><a class="btn btn-primary btn-lg" href="student-testimonials">Meet more students <i class="glyphicon glyphicon-chevron-right"></i></a></p>
	    </div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 	<div class="modal-body">
					<iframe frameborder="0"></iframe>
			 	</div>
			</div><!-- /.modal-content -->
	 </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<script>
	jQuery(document).ready(function($){
		$('a.modalButton').on('click', function(e) {
	    var src = $(this).attr('data-src');
	    var height = $(this).attr('data-height') || 300;
	    var width = $(this).attr('data-width') || 400;
    
    	$("#myModal iframe").attr({'src':src,'height': height,'width': width});
		});
		$('.close, .modal-footer button, .modal-backdrop').click(function(){
			$("#myModal iframe").attr('src', '');
		});
	});
	</script>
</section>
<section id="classes" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="flat">Doula Training Classes</h1>
				<p class="snippet"><?php the_field('classes_intro'); ?></p>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 4, 'category_name' => 'classes', 'order' => 'DSC', 'orderby' => 'date' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-12 card <?php the_id(); ?>">
						<!-- <a href="<?php the_permalink(); ?>" class="trigger" title="More about <?php the_title(); ?>">&nbsp;</a> -->
						<div class="row">
							<div class="col-md-4">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class="col-md-8">
								<h2><?php the_title(); ?></h2>
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
<section id="faq">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<h1>Frequently Asked Questions</h1>
				<?php if(get_field('faq')): ?>
 
					<div class="panel-group" id="accordion">

					<?php while(has_sub_field('faq')): ?>

						<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
					          <i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-down"></i>	<?php the_sub_field('question'); ?>
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
<?php endwhile; endif; ?>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.smooth-scroll.min.js"></script>
<script>
	jQuery(document).ready(function($){
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');
	});
</script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
jQuery(document).ready(function($){
	$('#hero').bind('inview', function (event, visible) {
    if (visible == true) {
     	$(".navbar").removeClass('light');
    } else {
      $(".navbar").addClass('light');
    }
  });

  $('.btn-default, .btn-lg').smoothScroll({
  	offset: -62
  });
});
</script>

<?php get_footer(); ?>
