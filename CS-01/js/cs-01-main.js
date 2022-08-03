$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// gallery slider
	$('.cs-01-gallery-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		centerMode: true,
		variableWidth: true,
		initialSlide: 1,
	  });
});