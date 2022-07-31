$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	$('.cb-01-scroll-to-top').on('click', function() {
		$("html, body").animate({
			scrollTop: 0 
		}, "slow");
	});
});