<?php
/*
Template Name: Sign Up Newest blah
*/
?>

<?php get_header(); ?>
<?php
// Enqueue Stripe Checkout Pro CSS.
wp_enqueue_style( 'stripe-checkout-pro-public' );

// Enqueue Stripe Checkout Pro JS.
wp_enqueue_script( 'stripe-checkout-pro-public' );
?>
<section id="signup" class="ash" >
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 style="margin-bottom: 15px">Sign Up for <span class="nonmobile">Doula Training </span>Classes</h1>
				<p class="text-center intro">Please note that our classes typically fill up three months in advance.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">	
				<div class="tabbable tabs-left">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registration" data-toggle="tab">Registration</a></li>
						<li><a href="#schedule" data-toggle="tab">Class Schedule</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="registration">
							<div class="row">
								<div class="col-sm-12 col-md-10 col-md-offset-1">
									<div class="card">
										<h3>Choose your course(s)</h3>
										<p class="text-center">For all courses except Homebirth for Doulas, we collect a <u>non-refundable deposit</u>.  The remainder will be paid on your first day of class.</p>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$150 deposit today">
												<input class="check" id="core" type="checkbox" value="15000">
												Labor Doula Training<em>$550</em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$100 deposit today">
												<input class="check" id="postpartum" type="checkbox" value="10000">
												Postpartum Doula Training<em>$300</em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$75 deposit today">
												<input class="check" id="optimal" type="checkbox" value="7500">
												Optimal Fetal Positioning<em>$200</em>
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input class="check" id="homebirth" type="checkbox" value="10000">
												Homebirth for Doulas<em>$100</em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$75 deposit today">
												<input class="check" id="placenta" type="checkbox" value="7500">
												Placenta Specialist Certification<em>$550</small></em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$75 deposit today">
												<input class="check" id="placenta" type="checkbox" value="7500">
												Trauma Resolution for Birth Professionals<em>$150</em>
											</label>
										</div>
										<div class="checkbox mentorship">
											<label>
												<input id="mentorship" class="check" type="checkbox" value="30000">
												Add extended 5 month mentorship <i class="glyphicon glyphicon-question-sign" data-toggle="popover" title="Extended Mentorship Program - $300" data-content="By popular demand, we now offer a <strong>Mentorship Program</strong> in which we provide <strong>5</strong> one-on-one, hour-long mentoring sessions with Nickie tailored to your needs and experience."></i>
												<script>
													jQuery(document).ready(function($){

														$('.card label').tooltip({
															delay: { "show": 300, "hide": 40 },
															placement: 'auto'
														});

														$('.glyphicon-question-sign').popover({
															placement: 'top', 
															trigger: 'hover',
															container: 'body',
															html: true
														});
													});
												</script>
											</label>
										</div>
										<div class="checkout text-center">
											<!-- <span class="payment-button" id="placeholder">
												<button disabled class="btn btn-primary">Buy Now</button>
											</span> -->
											
											<script src="https://checkout.stripe.com/checkout.js"></script>
											<button class="btn btn-lg btn-primary" id="purchase">Purchase</button>
											<script>
												jQuery(document).ready(function($){
													
													// Checkbox Functionality
													$('.check').click(function(){

														if ( $(this).prop( "checked" ) ) {
															var amount = 0;

															$(".check:checked").each(function() {
																	amount += parseInt($(this).val(), 10);
															});

														}


														// IF ALL UNCHECKED
														if($('.check:checked') == 0){
															alert('reset');
														}	

													});

													// STRIPE API
													var handler = StripeCheckout.configure({
														key: 'pk_test_4OinvTZTzGPA9Zfadk0nI6nA',
														image: 'https://s3.amazonaws.com/stripe-uploads/acct_14FvLx4q6QGnp1z0merchant-icon-1432595554003-square-emblem.png',
														token: function(token) {
															// Use the token to create the charge with a server-side script.
															// You can access the token ID with `token.id`
														}
													});

													$('#purchase').on('click', function(e) {
														var amount = 0;
														$(".check:checked").each(function() {
																amount += parseInt($(this).val(), 10);
														});
														// Open Checkout with further options
														handler.open({
															name: 'Cornerstone Payments',
															description: 'Course Payment + Enrollment',
															amount: amount
														});
														e.preventDefault();
													});

													$('#payment-form').submit(function(event) {
														var $form = $(this);

														// Disable the submit button to prevent repeated clicks
														$form.find('button').prop('disabled', true);

														Stripe.card.createToken($form, stripeResponseHandler);

														// Prevent the form from submitting with the default action
														return false;
													});

													// Close Checkout on page navigation
													$(window).on('popstate', function() {
														handler.close();
													});
												});
											</script>
											<img src="<?php bloginfo('template_directory'); ?>/library/images/ssl-secure.jpg" alt="Seal for SSL secure websites" width="100" height="42" style="border: none">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade schedule" id="schedule">
							<div class="alert alert-info hidden-xs">
								<strong>How registration works</strong> &mdash; When you purchase a course on the "Registration" tab, you are automatically signed up for the next available date for each course.  You will receive an email confirming each date.</u>
							</div>
							<!-- <p class="visible-xs" style="text-align: right; margin: 0"><small>Touch scroll &rarr;</small></p> -->
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th class="col-sm-3 col-xs-3">Course Dates</th>
											<th class="col-sm-4 col-xs-3">Course Title</th>
											<th class="col-sm-2 col-xs-3">Capacity</th>
											<th class="col-sm-3 col-xs-3">Time of Day</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if( have_rows('course_schedule') ):
												while ( have_rows('course_schedule') ) : the_row(); ?>
										<tr>
											<td class="middle"><?php the_sub_field('dates'); ?></td>
											<td><strong><?php the_sub_field('course_name'); ?></strong></td>
											<td><?php the_sub_field('capacity'); ?></td>
											<td><?php the_sub_field('time'); ?></td>
											<!-- <td><?php the_sub_field('available_seats'); ?></td> -->
										</tr>
										<?php endwhile; else : endif;  ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		var url = document.location.toString();
		if (url.match('#')) {
			$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
		} 

		// Change hash for page-reload
		$('.nav-tabs a').on('shown', function (e) {
			window.location.hash = e.target.hash;
		});

		if (location.hash) {
			setTimeout(function() {

				window.scrollTo(0, 0);
			}, 1);
		}
	});
</script>


<?php get_footer(); ?>