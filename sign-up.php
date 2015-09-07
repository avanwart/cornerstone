<?php
/*
Template Name: Sign Up & Schedule
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
				<h1><?php the_title(); ?></h1>
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
										<h3>Choose Your Course(s)</h3>
										<p class="text-center">For all courses except Homebirth for Doulas, we collect a <u>non-refundable deposit</u>.  The remainder will be paid on your first day of class.</p>
										<!-- <div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$1550 due today">
												<input class="check" id="Hawaii" type="checkbox" value="155000">
												Hawaii Summer Retreat<em>$1550</em>
											</label>
										</div> -->
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$150 deposit today">
												<input class="check" id="Labor" type="checkbox" value="15000">
												Core Beginner's Course<em>$550</em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$100 deposit today">
												<input class="check" id="Postpartum" type="checkbox" value="10000">
												Postpartum Doula Training<em>$300</em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$75 deposit today">
												<input class="check" id="Optimal" type="checkbox" value="7500">
												Optimal Fetal Positioning<em>$200</em>
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input class="check" id="Homebirth" type="checkbox" value="10000">
												Homebirth for Doulas<em>$100</em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$100 deposit today">
												<input class="check" id="Advantage" type="checkbox" value="10000">
												The Cornerstone Advantage<em>$300</small></em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$75 deposit today">
												<input class="check" id="Placenta" type="checkbox" value="7500">
												Placenta Specialist Certification<em>$550</small></em>
											</label>
										</div>
										<div class="checkbox">
											<label data-toggle="tooltip" data-placement="top" title="$75 deposit today">
												<input class="check" id="Trauma" type="checkbox" value="7500">
												First Aid Kit for Burnout<em>$150</em>
											</label>
										</div>
										<div class="checkbox mentorship">
											<label>
												<input id="mentorship" class="check" type="checkbox" value="30000">
												Add extended 5 month mentorship <i class="glyphicon glyphicon-question-sign" data-toggle="popover" title="Extended Mentorship Program - $300" data-content="By popular demand, we now offer a <strong>Mentorship Program</strong> in which we provide <strong>5</strong> one-on-one, hour-long mentoring sessions with Nickie tailored to your needs and experience."></i>
												<script>
													jQuery(document).ready(function($){

														$('.card label').tooltip({
															delay: { "show": 150, "hide": 40 },
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
											<small>Once you pay your deposit, you are automatically enrolled.</small>
											<?php echo do_shortcode('
												[stripe payment_button_label="Register & Pay" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Deposit + Enrollment" amount="" image_url="https://s3.amazonaws.com/stripe-uploads/acct_14FvLx4q6QGnp1z0merchant-icon-1432595554003-square-emblem.png"]
													[stripe_text placeholder="First name" id="first_name" required="true"]
													[stripe_text placeholder="Last name" id="last_name" required="true"]
												[/stripe]
											'); ?>
											<script>
												jQuery(document).ready(function($){
													$('.sc-payment-btn').prop('disabled', true);
													// Checkbox Functionality
													$('.check').click(function(){

														if ( $(this).prop( "checked" ) ) {
															var total	 = 0;
															var descript = ""

															$(".check:checked").each(function() {
																	total	 += parseInt($(this).val(), 10);
																	descript += ' • '+$(this).attr('id');
																	$('input[name="sc-description"]').attr('value', descript);
															});

															sc_script['1'].amount = total	;
															sc_script['1'].description = descript	;
															$('.sc-payment-btn').removeAttr('disabled');
														}

													});

													$('.check').change(function(){
														// IF ALL UNCHECKED
														if( $(".check:checked") == 0){
															$('.sc-payment-btn').prop('disabled', true);
														}	

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
							<!-- <div class="alert alert-info hidden-xs">
								<strong>How registration works</strong> &mdash; When you purchase a course on the "Registration" tab, you are automatically signed up for the next available date for each course.  You will receive an email confirming each date.</u>
							</div> -->
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
											<td><?php the_sub_field('course_name'); ?></td>
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
<section class="faq">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<h1>Questions About Registration?</h1>
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
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