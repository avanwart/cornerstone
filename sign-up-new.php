<?php
/*
Template Name: Sign Up New
*/
?>

<?php get_header(); ?>
<?php
// Enqueue Stripe Checkout Pro CSS.
wp_enqueue_style( 'stripe-checkout-pro-public' );

// Enqueue Stripe Checkout Pro JS.
wp_enqueue_script( 'stripe-checkout-pro-public' );
?>
<section id="signup" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1>Sign Up for <span class="nonmobile">Doula Training </span>Courses</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-10 col-lg-offset-1">	
				<div class="tabbable tabs-left">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registration" data-toggle="tab">Registration</a></li>
 						<li><a href="#schedule" data-toggle="tab">Course Schedule</a></li>
 						<li class="hidden-xs"><a href="http://cornerstonedoulatrainings.com/hawaii-doula-retreat">Hawaii Summer Retreat</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="registration">
							<div class="row hidden-xs">
								<div class="col-sm-12 col-lg-10 col-lg-offset-1">
									<div class="alert alert-info">
										<strong>How payment works</strong> &mdash; For Core Beginners, Postpartum or Optimal Fetal Positioning courses, we collect a non-refundable deposit.  The remainder will be paid on the <u>day of your first class</u>.
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 col-lg-5 col-lg-offset-1">
									<div class="card a">
										<h3>Customize My Training</h3>
										<p class="flat"><strong>Pick and choose your courses</strong></p>
										<div class="checkbox">
										  <label data-toggle="tooltip" data-placement="top" title="$150 deposit today">
										    <input class="check" id="core" type="checkbox" value="core">
										    Core Beginners Course<span>...................</span><em>$550</em>
										  </label>
										</div>
										<div class="checkbox">
										  <label data-toggle="tooltip" data-placement="top" title="$100 deposit today">
										    <input class="check" id="postpartum" type="checkbox" value="postpartum">
										    Postpartum Doula Training<span>..........</span><em>$300</em>
										  </label>
										</div>
										<div class="checkbox">
										  <label  data-toggle="tooltip" data-placement="top" title="$75 deposit today">
										    <input class="check" id="optimal" type="checkbox" value="optimal">
										    Optimal Fetal Positioning<span>.............</span><em>$150</em>
										  </label>
										</div>
										<div class="checkbox">
										  <label>
										    <input class="check" id="homebirth" type="checkbox" value="homebirth">
										    Homebirth for Doulas<span>......................</span><em>$75</em>
										  </label>
										</div>
										<hr>
										<div class="checkbox mentorship">
										  <label>
										    <input id="mentorship" class="check" type="checkbox" value="mentorship">
										    Add extended 5 month mentorship <i class="glyphicon glyphicon-question-sign" data-toggle="popover" title="Extended Mentorship Program - $300" data-content="By popular demand, we now offer a <strong>Mentorship Program</strong> in which we provide <strong>5</strong> one-on-one, hour-long mentoring sessions with Nickie tailored to your needs and experience."></i>
										    <script>
										    	jQuery(document).ready(function($){
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
											<span class="payment-button" id="placeholder">
												<button disabled class="btn btn-primary">Buy Now</button>
											</span>
											<!-- Single Classes -->
											<span class="payment-button" id="buy-core" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core Beginners Course DEPOSIT" amount="15000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core Beginners DEPOSIT + Mentorship" amount="45000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-postpartum" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Postpartum Doula Training" amount="10000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-postpartum-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Postpartum DEPOSIT + mentorship" amount="40000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-optimal" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Optimal Fetal Positioning" amount="7500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-optimal-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Optimal Fetal DEPOSIT + mentorship" amount="37500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Home Birth for Doulas" amount="7500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Home Birth + Mentorship" amount="37500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<!-- Double Classes -->
											<span class="payment-button" id="buy-core-postpartum" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Postpartum DEPOSIT" amount="25000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-postpartum-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Postpartum DEPOSIT + Mentorship" amount="55000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-core-optimal" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Optimal" amount="22500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-optimal-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Optimal + Mentorship" amount="52500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-core-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Home Birth" amount="22500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Home Birth + Mentorship" amount="52500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-postpartum-optimal" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description=" Postpartum + Optimal DEPOSIT" amount="17500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-postpartum-optimal-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description=" Postpartum + Optimal DEPOSIT + Mentorship" amount="47500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-postpartum-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description=" Postpartum + Home Birth DEPOSIT" amount="17500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-postpartum-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description=" Postpartum + Home Birth DEPOSIT + Mentorship" amount="47500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-optimal-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Optimal + Home Birth" amount="15000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-optimal-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Optimal + Home Birth + Mentorship" amount="45000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<!-- Triple Classes -->
											<span class="payment-button" id="buy-core-postpartum-optimal" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description=" Core + Post + Opt DEPOSIT" amount="32500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-postpartum-optimal-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description=" Core + Post + Opt DEPOSIT + Mentorship" amount="62500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-core-postpartum-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Post + Home Birth DEPOSIT" amount="85000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-postpartum-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Post + Home Birth DEPOSIT + Mentorship" amount="115000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-postpartum-optimal-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Post + Opt + Home Birth DEPOSIT" amount="27500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-postpartum-optimal-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Post + Opt + Home Birth DEPOSIT + Mentorship" amount="57500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-core-optimal-homebirth" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Opt + Home Birth DEPOSIT" amount="32500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-core-optimal-homebirth-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Opt + Home Birth DEPOSIT + Mentorship" amount="62500" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>

											<span class="payment-button" id="buy-all" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Postpartum + Opt + Home Birth DEPOSIT" amount="40000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button" id="buy-all-plus" style="display: none">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Core + Postpartum + Opt + Home Birth DEPOSIT + Mentorship" amount="70000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<img src="<?php bloginfo('template_directory'); ?>/library/images/ssl-secure.jpg" alt="Seal for SSL secure websites" width="100" height="42" style="border: none">
											<script>
												jQuery(document).ready(function($){
									    		// Checkbox Functionality
									    		$('input[type="checkbox"]').click(function(){
								            if($('#core').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-core').fadeIn();
								            }
								            if($('#core').is(':checked') && $('#mentorship').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-core-plus').fadeIn();
								            }

								            if($('#postpartum').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-postpartum').fadeIn();
								            }
								            if($('#postpartum').is(':checked') && $('#mentorship').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-postpartum-plus').fadeIn();
								            }

								            if($('#optimal').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-optimal').fadeIn();
								            }
								            if($('#optimal').is(':checked') && $('#mentorship').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-optimal-plus').fadeIn();
								            }

								            if($('#homebirth').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-homebirth').fadeIn();
								            }
								            if($('#homebirth').is(':checked') && $('#mentorship').is(':checked')){
								            		$('.payment-button').hide();
								                $('#buy-homebirth-plus').fadeIn();
								            }

								            // Core + Postpartum
								            if ($('#core').is(':checked') && $('#postpartum').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-postpartum').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-postpartum-plus').fadeIn();
												    }
												    // Core + Optimal
												    if ($('#core').is(':checked') && $('#optimal').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-optimal').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#optimal').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-optimal-plus').fadeIn();
												    }
												    // Core + Homebirth
												    if ($('#core').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-homebirth').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-homebirth-plus').fadeIn();
												    }
												    // Postpartum + Optimal
												    if ($('#postpartum').is(':checked') && $('#optimal').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-postpartum-optimal').fadeIn();
												    }
												    if ($('#postpartum').is(':checked') && $('#optimal').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-postpartum-optimal-plus').fadeIn();
												    }
												    // Postpartum + Homebrith
												    if ($('#postpartum').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-postpartum-homebirth').fadeIn();
												    }
												    if ($('#postpartum').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-postpartum-homebirth-plus').fadeIn();
												    }
												    // Optimal + Homebrith
												    if ($('#optimal').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-optimal-homebirth').fadeIn();
												    }
												    if ($('#optimal').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-optimal-homebirth-plus').fadeIn();
												    }

												    // Core + Post + Opt
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#optimal').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-postpartum-optimal').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#optimal').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-postpartum-optimal-plus').fadeIn();
												    }
												    // Core + Post + Homebirth
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-postpartum-homebirth').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-postpartum-homebirth-plus').fadeIn();
												    }
												    // Post + Opt + Homebirth
												    if ($('#postpartum').is(':checked') && $('#optimal').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-postpartum-optimal-homebirth').fadeIn();
												    }
												    if ($('#postpartum').is(':checked') && $('#optimal').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-postpartum-optimal-homebirth-plus').fadeIn();
												    }
												    // Post + Opt + Homebirth
												    if ($('#core').is(':checked') && $('#optimal').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-optimal-homebirth').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#optimal').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-core-optimal-homebirth-plus').fadeIn();
												    }

												    // Post + Opt + Homebirth
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#optimal').is(':checked') && $('#homebirth').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-all').fadeIn();
												    }
												    if ($('#core').is(':checked') && $('#postpartum').is(':checked') && $('#optimal').is(':checked') && $('#homebirth').is(':checked') && $('#mentorship').is(':checked')) {
								            	$('.payment-button').hide();
												      $('#buy-all-plus').fadeIn();
												    }

												    // IF ALL UNCHECKED
												    if($('input[type=checkbox]:checked') == 0){
												    	alert('reset');
												    }
												    var numberNotChecked = $('input:checkbox:not(":checked")').length
												    if(numberNotChecked == 6){
												    	$('.payment-button').hide();
												    	$('.payment-button2').hide();
												    	$('#placeholder').show();
												    	$('#buy-core-postpartum-homebirth2').show();
												    }

								        	});
									    	});
											</script>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-5">
									<div class="card b">
										<!-- <div class="ribbon"></div> -->
										<h3>Certification Package <span class="label label-success">Save $75</span></h3>
										<p class="flat"><strong>Buy 2 classes, get one free!</strong></p>
										<div class="checkbox">
										  <label>
										    <i class="glyphicon glyphicon-ok"></i>
										    Core Beginners Course<span>.................</span><em>$550</em>
										  </label>
										</div>
										<div class="checkbox">
										  <label>
										    <i class="glyphicon glyphicon-ok"></i>
										    Postpartum Doula Training<span>........</span><em>$300</em>
										  </label>
										</div>
										<div class="checkbox">
										  <label>
										    <i class="glyphicon glyphicon-ok"></i>
										    Homebirth for Doulas<span>...................</span><em class="green">FREE</em>
										  </label>
										</div>
										<div class="checkbox">
										  <label>
										    &nbsp;
										  </label>
										</div>
										<hr>
										<div class="checkbox mentorship" style="padding-left: 20px">
										  <label>
										    <input id="mentorship2" class="check" type="checkbox" value="mentorship">
										    Add extended 5 month mentorship <i class="glyphicon glyphicon-question-sign" data-toggle="popover" title="Extended Mentorship Program - $300" data-content="By popular demand, we now offer a <strong>Mentorship Program</strong> in which we provide <strong>5</strong> one-on-one, hour-long mentoring sessions with Nickie tailored to your needs and experience."></i>
										    <script>
										    	jQuery(document).ready(function($){
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
											<span class="payment-button2" id="buy-core-postpartum-homebirth2" style="clear: both">
												<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Certfication Package" amount="85000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<span class="payment-button2" id="certification-plus" style="display: none; clear: both">
												cert plus<?php echo do_shortcode('[stripe payment_button_label="Buy Now" success_redirect_url="/thank-you" name="Cornerstone Payments" description="Certification Package + Mentorship" amount="115000" image_url="https://cornerstonedoulatrainings.com/beta/wp-content/uploads/2014/07/emblem.png"]'); ?>
											</span>
											<img src="<?php bloginfo('template_directory'); ?>/library/images/ssl-secure.jpg" alt="Seal for SSL secure websites" width="100" height="42" style="border: none">
										</div>
										<script>
											jQuery(document).ready(function($){

												$('.card.a label').tooltip();

								    		// Checkbox Functionality
								    		$('input[type="checkbox"]').click(function(){
							            if($('#mentorship2').is(':checked')){
						            		$('.payment-button2').hide();
						                $('#certification-plus').fadeIn();
							            }
							          });

							        });
							      </script>
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