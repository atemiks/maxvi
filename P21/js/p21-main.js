$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);


	// parallax design scene 
    let P21DesignScene = $('#p21-design-parallax').get(0);
	let P21DesignParallaxInstance = new Parallax(P21DesignScene);

	// parallax camera scene 
    let P21CameraScene = $('#p21-camera-parallax').get(0);
	let P21CameraParallaxInstance = new Parallax(P21CameraScene);
});