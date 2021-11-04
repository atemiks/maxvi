$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// parallax design scene 
    let t12DesignScene = $('#t12-design-parallax').get(0);
	let t12DesignParallaxInstance = new Parallax(t12DesignScene);
});