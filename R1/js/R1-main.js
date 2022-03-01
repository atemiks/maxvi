$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// parallax intro scene 
    let R1IntroScene = $('#R1-intro-parallax').get(0);
	let R1IntroParallaxInstance = new Parallax(R1IntroScene);

	// parallax protection scene 
    let R1ProtectionScene = $('#R1-protection-parallax').get(0);
	let R1ProtectionParallaxInstance = new Parallax(R1ProtectionScene);
});