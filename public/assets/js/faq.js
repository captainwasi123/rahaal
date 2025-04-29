$(document).ready(function(){
	'use strict'

	$('.faq .faq-title').click(function(){
		var target = $(this).data('target');
		$('.collapse').removeClass('show');
		$(target).toggleClass('show');
	});
});

$(document).ready(function(){
  $('.slick-slider').slick({
	    dots: true,
	    infinite: true,
	    speed: 700,
	    autoplay:true,
	    autoplaySpeed: 2000,
	    arrows:false,
	    slidesToShow: 1,
	    slidesToScroll: 1
	 });
});