$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);


	// parallax Fm scene 
    let k21FmScene = $('#b100-fm-parallax').get(0);
	let k21FmParallaxInstance = new Parallax(k21FmScene);
});