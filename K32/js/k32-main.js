$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// parallax intro scene 
    let k32IntroScene = $('#k32-intro-parallax').get(0);
	let k32IntroParallaxInstance = new Parallax(k32IntroScene);
});