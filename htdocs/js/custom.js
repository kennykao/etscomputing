$(document).ready(function() {

	$('#hours_locations').waypoint(function(direction) {
		if (direction == 'down'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#hours_nav').addClass('active');
			$('#navbar').removeClass('nav_transparent');
		}
	})

	$('#hours_locations').waypoint(function(direction) {
		if (direction == 'up'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#home_nav').addClass('active');
			$('#navbar').addClass('nav_transparent');
		}
	})

	$('#services').waypoint(function(direction) {
		if (direction == 'down'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#services_nav').addClass('active');
		}
	})

	$('#services').waypoint(function(direction) {
		if (direction == 'up'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#hours_nav').addClass('active');
		}
	})

	$('#jobs').waypoint(function(direction) {
		if (direction == 'down'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#jobs_nav').addClass('active');
		}
	})

	$('#jobs').waypoint(function(direction) {
		if (direction == 'up'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#services_nav').addClass('active');
		}
	})

	$('#contactus').waypoint(function(direction) {
		if (direction == 'down'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#contact_nav').addClass('active');
		}
	})

	$('#contactus').waypoint(function(direction) {
		if (direction == 'up'){
			$('a.smoothScroll').parent().removeClass('active');
			$('#jobs_nav').addClass('active');
		}
	})

	// $('#submit_button').submit(function(){
	// 	$('#success_container').removeClass('hidden_success');
	// })

	$('#waypoint1').waypoint(function() {
		$('.wp1').addClass('animated fadeInUp');
	})

	$('#myCarousel').waypoint(function() {
		$('.wp2').addClass('animated fadeInDown');
	})

	$('#services').waypoint(function() {
		$('.wp3').addClass('animated fadeInLeft');
	})

	$('#services').waypoint(function() {
		$('.wp4').addClass('animated fadeInRight delay-05s');
	})

	// $('#jobs').waypoint(function() {
	// 	$('.wp6').addClass('animated bounceInLeft');
	// })

	// $('#jobs').waypoint(function() {
	// 	$('.wp7').addClass('animated bounceInRight delay-05s');
	// })

	$('#moffit_pic').waypoint(function() {
		$('.wp3-1').addClass('animated fadeInDown');
	})

	$('#moffit_pic').waypoint(function() {
		$('.wp3-2').addClass('animated fadeInDown delay-02s');
	})

	$('#moffit_pic').waypoint(function() {
		$('.wp3-3').addClass('animated fadeInDown delay-04s');
	})

	$('#moffit_pic').waypoint(function() {
		$('.wp3-4').addClass('animated fadeInDown delay-06s');
	})

	$('#moffit_pic').waypoint(function() {
		$('.wp3-5').addClass('animated fadeInDown delay-08s');
	})

	$('#moffit_pic').waypoint(function() {
		$('.wp3-6').addClass('animated fadeInDown delay-1s');
	})
});