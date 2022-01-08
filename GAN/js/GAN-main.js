$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// parallax usefull scene 
    let GANUsefullScene = $('#GAN-usefull-parallax').get(0);
	let GANUsefullParallaxInstance = new Parallax(GANUsefullScene);
});