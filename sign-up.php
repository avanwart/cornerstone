<?php
/*
Template Name: Sign Up
*/
?>

<?php get_header(); ?>
<section id="signup" class="ash">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="flat">Sign Up for Doula Training Classes</h1>
				<p class="snippet">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quos ex mollitia quibusdam laudantium accusantium maxime sequi cumque omnis illum.</p>
				<div class="row">
					<div class="col-md-6">
						<div class="card a">
							<h2>Customize My Training</h2>
							<p class="flat"><strong>Pick and choose your courses</strong></p>
							<div class="checkbox">
							  <label>
							    <input id="core" type="checkbox" value="core">
							    Core Beginners Course<span>...................</span><em>$550</em>
							  </label>
							</div>
							<div class="checkbox">
							  <label>
							    <input id="postpartum" type="checkbox" value="postpartum">
							    Postpartum Doula Training<span>..........</span><em>$300</em>
							  </label>
							</div>
							<div class="checkbox">
							  <label>
							    <input id="optimal" type="checkbox" value="optimal">
							    Optimal Fetal Positioning<span>.............</span><em>$150</em>
							  </label>
							</div>
							<div class="checkbox">
							  <label>
							    <input id="homebirth" type="checkbox" value="homebirth">
							    Home Birth for Doulas<span>......................</span><em>$75</em>
							  </label>
							</div>
							<hr>
							<div class="checkbox mentorship">
							  <label>
							    <input type="checkbox" value="homebirth">
							    Add extended 5 month mentorship <i class="glyphicon glyphicon-question-sign" data-toggle="popover" title="Extended Mentorship Program - $300" data-content="By popular demand, we now offer a <strong>Mentorship Program</strong> in which we provide <strong>5</strong> one-on-one, hour-long Skype sessions with Nickie tailored to your needs and experience."></i>
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
									core<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Core Beginners Course DEPOSIT" amount="15000" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-postpartum" style="display: none">
									postpartum<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Postpartum Doula Training" amount="10000" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-optimal" style="display: none">
									optimal<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Optimal Fetal Positioning" amount="7500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-homebirth" style="display: none">
									homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Home Birth for Doulas" amount="7500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<!-- Double Classes -->
								<span class="payment-button" id="buy-core-postpartum" style="display: none">
									core-pp<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Core + Postpartum DEPOSIT" amount="25000" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-core-optimal" style="display: none">
									core-opt<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Core + Optimal" amount="22500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-core-homebirth" style="display: none">
									core-homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Core + Home Birth" amount="22500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-postpartum-optimal" style="display: none">
									postpartum-optimal<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description=" Postpartum + Optimal DEPOSIT" amount="17500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-postpartum-homebirth" style="display: none">
									postpartum-homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description=" Postpartum + Home Birth DEPOSIT" amount="17500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-core-homebirth" style="display: none">
									optimal-homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Optimal + Home Birth" amount="15000" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<!-- Triple Classes -->
								<span class="payment-button" id="buy-postpartum-optimal-core" style="display: none">
									postpartum-optimal-core<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description=" Core + Post + Opt DEPOSIT" amount="32500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-core-postpartum-homebirth" style="display: none">
									core-postpartum-homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Core + Post + Home Birth DEPOSIT" amount="85000" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-postpartum-optimal-homebirth" style="display: none">
									postpartum-optimal-homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description="Post + Opt + Home Birth DEPOSIT" amount="27500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<span class="payment-button" id="buy-core-optimal-homebirth" style="display: none">
									core-optimal-homebirth<?php echo do_shortcode('[stripe payment_button_label="Buy Now" name="Cornerstone Payments" description=" Core + Opt + Home Birth DEPOSIT" amount="32500" image_url="http://cornerstone:8888/wp-content/uploads/2014/07/emblem.png"]'); ?>
								</span>
								<script>
								jQuery(document).ready(function($){
					    		// Checkbox Functionality
					    		$('input[type="checkbox"]').click(function(){
				            if($(this).attr("value")=="core"){
				            		$('.payment-button').hide();
				                $('#buy-core').fadeIn();
				            }
				            if($(this).attr("value")=="postpartum"){
				            		$('.payment-button').hide();
				                $('#buy-postpartum').fadeIn();
				            }
				            if($(this).attr("value")=="optimal"){
				            		$('.payment-button').hide();
				                $('#buy-optimal').fadeIn();
				            }
				            if($(this).attr("value")=="homebirth"){
				            		$('.payment-button').hide();
				                $('#buy-homebirth').fadeIn();
				            }

				            // DOUBLES
				            if ($('#core').is(':checked') && $('#postpartum').is(':checked')) {
				            	$('.payment-button').hide();
								      $('#buy-core-postpartum').fadeIn();
								    }
								    if ($('#core').is(':checked') && $('#optimal').is(':checked')) {
				            	$('.payment-button').hide();
								      $('#buy-core-optimal').fadeIn();
								    }
								    if ($('#core').is(':checked') && $('#homebirth').is(':checked')) {
				            	$('.payment-button').hide();
								      $('#buy-core-homebirth').fadeIn();
								    }
				        	});
					    	});
								</script>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card b">
							<h2>Certification Package</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>