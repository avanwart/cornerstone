			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<div class="text-center">
						<ul class="social-media">
							<li class="facebook"><a href="https://www.facebook.com/pages/Cornerstone-Doula-Trainings/162880063776304" target="_blank">follow us on facebook</a></li>
							<li class="twitter"><a href="https://twitter.com/CSdoulatraining" target="_blank">follow us on twitter</a></li>
							<!-- <li class="yelp"><a href="http://www.yelp.com/biz/cornerstone-doula-trainings-san-francisco">cornerstone on yelp</a></li> -->
						</ul>
					</div>
					
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <a href="/terms-and-conditions">Terms &amp; Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/privacy-policy">Privacy Policy</a><br/>Photography by <a href="http://brittfohrman.com" target="_blank">Britt Fohrman</a>&nbsp;&nbsp;|&nbsp;&nbsp;Website by Andrew Van Wart</p>
					<div class="text-center ssl-badge">
						
					</div>

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

		<script>
			jQuery(document).ready(function($){
				$('.navbar-toggle').bind( "touchstart", function(e){
	    		e.preventDefault();
	    		$('.navbar-collapse').collapse('toggle');
	    	});
			});
		</script>
	</body>

</html> <!-- end page. what a ride! -->
