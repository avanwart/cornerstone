<?php
/*
Template Name: CBE Retreat
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/js/lightbox/css/lightbox.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/js/lightbox/css/screen.css" type="text/css" media="screen" /> -->
<section class="ojai hero" id="sign_up">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-10 col-lg-offset-1">
				<h1 class="flat">The Cornerstone Method</h1>
				<h2 class="text-center">Childbirth Educator Certification Retreat <small>July 10 - July 16&nbsp;&nbsp;|&nbsp;&nbsp;Ojai, CA</small></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<div class="learn-more">
		<a href="#mission" class="btn btn-lg btn-block btn-default scroll">Learn More <i class="glyphicon glyphicon-chevron-down"></i></a>
	</div>
</section>
<section class="ojai mission" id="mission">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>A new childbirth education paradigm</h2>
				<p class="intro"><p>We are committed to providing a well rounded, effective, and unbiased training course to the childbirth educators of our time. We know that one particular model may not work for everyone and that most methods only teach their students one way. Developed by a doula and homebirth midwife, The Cornerstone Method draws upon many years of combined direct service experience to provide a system that works for all families regardless of structure, identity, and birthing setting. Our mission is to engage, inform, and empower. Create change. Become a childbirth educator.</p></p>
			</div>
		</div>
	</div>
</section>
<section id="benefits" class="ojai benefits">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
				<h2 class="flat">More than just a getaway</h2>
				<div class="row">
					<div class="col-sm-6">
						<ul>
							<li>Make long lasting friendships with group participants</li>
							<li>Access your trainers and mentors one-on-one all week long </li>
							<li>Enjoy three local, organic meals per day prepared and served by a private chef</li>
							<li>Relax, rejuvenate, and return home refreshed and ready to start teaching a CBE series!</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul>
							<li>Enjoy the spacious and serene grounds of Villa Ojai, just walking distance to downtown</li>
							<li>Spend your free day soaking in local hot springs or touring a winery, all just 5 minutes away</li>
							<li>Take advantage of the salt water hot soaking pool and cold plunge </li>
							<li>Gain trusted and credible certification as a childbirth educator</li>
						</ul>
					</div>
				</div>
				<div class="text-center">
					<a href="#package" class="scroll btn btn-lg btn-default">Retreat details <i class="glyphicon glyphicon-chevron-right"></i></a>
					<a href="#sign_up" class="scroll register btn btn-lg btn-primary">Register now <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="package" class="ojai features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Retreat Package Details</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<div class="row">
					<div class="col-sm-6">
						<a data-lightbox="lightbox" href="<?php bloginfo('template_directory'); ?>/library/images/entrance.jpg" rel="group"><img src="<?php bloginfo('template_directory'); ?>/library/images/entrance-thumb.jpg" class="img-thumbnail img-responsive" alt=""></a>
					</div>
					<div class="col-sm-6">
						<a data-lightbox="lightbox" href="<?php bloginfo('template_directory'); ?>/library/images/pool-sm.jpg" rel="group"><img src="<?php bloginfo('template_directory'); ?>/library/images/pool-sm-thumb.jpg" class="img-thumbnail img-responsive" alt=""></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<a data-lightbox="lightbox" href="<?php bloginfo('template_directory'); ?>/library/images/beds2.jpg" rel="group"><img src="<?php bloginfo('template_directory'); ?>/library/images/beds2-thumb.jpg" class="img-thumbnail img-responsive" alt=""></a>
					</div>
					<div class="col-sm-6">
						<a data-lightbox="lightbox" href="<?php bloginfo('template_directory'); ?>/library/images/outdoor-living-room2.jpg" rel="group"><img src="<?php bloginfo('template_directory'); ?>/library/images/outdoor-living-room2-thumb.jpg" class="img-thumbnail img-responsive" alt=""></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<a data-lightbox="lightbox" href="<?php bloginfo('template_directory'); ?>/library/images/main-house.jpg" rel="group"><img src="<?php bloginfo('template_directory'); ?>/library/images/main-house-thumb.jpg" class="img-thumbnail img-responsive" alt=""></a>
					</div>
					<div class="col-sm-6">
						<a data-lightbox="lightbox" href="<?php bloginfo('template_directory'); ?>/library/images/beds.jpg" rel="group"><img src="<?php bloginfo('template_directory'); ?>/library/images/beds-thumb.jpg" class="img-thumbnail img-responsive" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<ul>
					<li><i class="glyphicon glyphicon-ok"></i> 7 days, plus six nights at the beautiful Villa Ojai, including one free personal day without class instruction.</li>
					<li><i class="glyphicon glyphicon-ok"></i> Enjoy three organic, local meals daily prepared by a well known private chef.</li>
					<li><i class="glyphicon glyphicon-ok"></i> Full training and certification to become a Certified Cornerstone Childbirth Educator (CCBE).</li>					
					<li><i class="glyphicon glyphicon-ok"></i> Comfortable shared accommodations with luxury baths &ndash; including oversized soaking tubs and showers.</li>
					<li><i class="glyphicon glyphicon-ok"></i> We promise a relaxing and rejuvenating week that will launch you toward your new career as CCBE.</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<a href="#faq" class="scroll btn btn-lg btn-default">Even more details <i class="glyphicon glyphicon-chevron-right"></i></a>
					<a href="#sign_up" class="scroll register btn btn-lg btn-primary">Register now <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ojai quotes">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<h2>Back by Popular Demand</h2>
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/serina-howard.jpg" class="img-circle" alt="">
						<blockquote>&ldquo;Truly a life enhancing experience for women of all backgrounds, the oneness that connects all of us through birth is felt so deeply in the cornerstone retreat.&rdquo; <small>Serina Howard, CD</small></blockquote>
					</div>
					<div class="col-sm-6">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/amy-moy.jpg" class="img-circle" alt="">
						<blockquote>&ldquo;I recently attended a retreat with Nickie and Juli in Hawaii.  I was blown away by the wonderful community they helped to create and nurture throughout the week among the trainees.&rdquo; <small>Amy Moy, CD</small></blockquote>
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<a href="#sign_up" class="scroll btn btn-lg btn-default">View pricing <i class="glyphicon glyphicon-chevron-right"></i></a>
					<a href="#sign_up" class="scroll register btn btn-lg btn-primary">Register now <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class=" hawaii pricing">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<span class="date">Retreat Dates: <strong>June 27 - July 3, 2015</strong></span>
				<h1 class="flat">Pricing &amp; Registration
				<p class="intro">We have <u>2</u> open spaces left.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-md-6 col-md-offset-1">
				<p><i class="glyphicon glyphicon-ok"></i> Reserve your spot by paying your retreat tuition below of $1550. Please note that your tuition fee is non-refundable.</p>
				<p><i class="glyphicon glyphicon-envelope"></i>We'll contact you directly once you've enrolled.</p>
				<p class="nowrap"><i class="glyphicon glyphicon-plane"></i> Please book your flight into Hilo Airport (ITO).</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-xs-12 col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
				<!-- <label for="">To reserve your spot, register and pay below:</label> -->
				
			</div>
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.smooth-scroll.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/lightbox/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
jQuery(document).ready(function($){

	$('.ojai').addClass('in');

	setTimeout(function(){
		$('.ojai').addClass('in');
	}, 1200);

  $('.scroll').smoothScroll({
  	offset: -72
  });
  $('.register').smoothScroll({
  	offset: -72,
  	afterScroll: function(){
  		$('#first_name').focus();
  	}
  });

  $('#sign_up').bind('inview', function (event, visible) {
    if (visible == true) {
     	$(".navbar").removeClass('light');
    } else {
      $(".navbar").addClass('light');
    }
  });


  $('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

});
</script>

<?php get_footer(); ?>