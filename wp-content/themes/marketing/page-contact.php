<?php
/**
*	Template Name: Contact Page
**/
get_header(); ?>

<div class="Jumbotron">
	<div class="google-maps">
	
		<div id="map-canvas"/>
	
	</div>
</div><!--end jumbotron-->

<div class="container">

	<div class="row">
		<div class="col-sm-7">
			<h2> Contact Form </h2>
			
			<?php echo do_shortcode('[contact-form-7 id="300" title="Untitled"]'); ?>
		
		</div>
		
		<div class="col-sm-5 contact-details">
			<h2>Contact Nebula</h2>
			<p>Feel Free to drop us an email on your next project to see how we can help you make it a success.</p>
			<p class="address"><span class="glyphicon glyphicon-home"></span>985A Glen Huntly Road<br>Caulfield South<br>VIC 3162</p>
			<p class="phone"><span class="glyphicon glyphicon-phone-alt"></span><a href="tel:+61490202925">+61 3 9020 2925</a></p>
			<p class="info"><span class="glyphicon glyphicon glyphicon-envelope"></span><a href="mailto:hello@nebuladigital.com.au" target="_blank">hello@nebuladigital.com.au</a></p>
			
		</div>
	</div>

</div>

<?php get_footer(); ?>