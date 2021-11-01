$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// parallax design scene 
    let p19DesignScene = $('#p19-design-parallax').get(0);
	let p19DesignParallaxInstance = new Parallax(p19DesignScene);

	// parallax speaker scene 
    let p19SpeakerScene = $('#p19-speaker-parallax').get(0);
	let p19SpeakerParallaxInstance = new Parallax(p19SpeakerScene);

	// parallax screen scene 
    let p19ScreenScene = $('#p19-screen-parallax').get(0);
	let p19ScreenParallaxInstance = new Parallax(p19ScreenScene);

	// parallax battery scene 
    let p19BatteryScene = $('#p19-battery-parallax').get(0);
	let p19BatteryParallaxInstance = new Parallax(p19BatteryScene);
});