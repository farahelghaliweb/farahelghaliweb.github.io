$( document ).ready(function() {
    


	//SLIDER DOUBLE
	$('.ds-top').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  fade: true,
	  asNavFor: '.ds-nav'
	});

	$('.ds-nav').slick({
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  asNavFor: '.ds-top',
	  arrows: false,
	  centerMode: false,
	  focusOnSelect: true,
	  vertical: true
	});



	Fancybox.bind();



}); //effacez moi jamais