<?php
/*
Template Name: Hawaii Thank You
*/
?>

<?php get_header(); ?>
<section class="hawaii thank-you">
	<div class="video hidden-xs">
		<div class="curtain"></div>
		<video id="hawaii" poster="<?php bloginfo('template_directory'); ?>/video/hawaii.jpg" style="width:100%" title="1920" autoplay loop>
			<source src="<?php bloginfo('template_directory'); ?>/video/hawaii.m4v" type="video/mp4">
			<source src="<?php bloginfo('template_directory'); ?>/video/hawaii.webm" type="video/webm">
			<source src="<?php bloginfo('template_directory'); ?>/video/hawaii.ogv" type="video/ogg">
			<source src="<?php bloginfo('template_directory'); ?>/video/hawaii.mp4">
			<object type="application/x-shockwave-flash" data="video/flashfox.swf" width="1920" height="1080" style="position:relative;">
			<param name="movie" value="video/flashfox.swf">
			<param name="allowFullScreen" value="true">
			<param name="flashVars" value="autoplay=true&amp;controls=false&amp;fullScreenEnabled=false&amp;posterOnEnd=true&amp;loop=false&amp;poster=<?php bloginfo('template_directory'); ?>/video/hawaii.jpg&amp;src=hawaii.m4v">
			 <embed src="video/flashfox.swf" width="1920" height="1080" style="position:relative;" flashvars="autoplay=true&amp;controls=false&amp;fullScreenEnabled=false&amp;posterOnEnd=true&amp;loop=false&amp;poster=<?php bloginfo('template_directory'); ?>/video/hawaii.jpg&amp;src=hawaii.m4v" allowfullscreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en">
			<img alt="loading-semi" src="<?php bloginfo('template_directory'); ?>/video/hawaii.jpg" style="position:absolute;left:0;" width="100%" title="Video playback is not supported by your browser">
			</object>
		</video>
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<h1>Thank you!</h1>
					<p class="intro">We have received your deposit for $600 and you are now registered for our Hawaiian Doula Retreat from June 27 - July 3.  You will receive an email confirmation for your reservation shortly.  <br class="hidden-xs"/><br class="hidden-xs"/>If you have any questions, give us a call at <strong>501-510-7501</strong></p>
					<p class="intro"><a href="hawaii-doula-retreat">&larr; Back to retreat page</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
jQuery(document).ready(function($){
  $('.hawaii .video').addClass('in');

	setTimeout(function(){
		$('.hawaii .content').addClass('in');
	}, 1200);
});
</script>
<?php get_footer(); ?>