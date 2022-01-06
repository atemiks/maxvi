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

	// parallax design scene 
    let GANDesignScene = $('#GAN-design-parallax').get(0);
	let GANDesignParallaxInstance = new Parallax(GANDesignScene);

	// battery number counter
	function animateNumber(elem, endNumber, inter, steps) {
		let element = document.querySelector('.' + elem);
		let startCount = +element.innerHTML;
		let delay = Math.round(inter / (endNumber / steps));

		let interval = setInterval(() => {
			startCount += steps;

			if (startCount > endNumber) startCount = endNumber;

			if (startCount == endNumber) clearInterval(interval);

			element.innerHTML = startCount;
		}, delay);
	}

	function scrollNumberAnimation(elem, endNumber, inter, steps, defaultNumber) {
		let element = document.querySelector('.' + elem);
		let onTop = (element.getBoundingClientRect().y + (element.offsetHeight * 0.5)) - document.documentElement.clientHeight;
		let onBottom = (element.getBoundingClientRect().y + element.offsetHeight);
		
		
		if (onTop < 0 && onBottom > 0 && +element.innerHTML !== endNumber && !(+element.innerHTML < endNumber && +element.innerHTML > defaultNumber)) {
			animateNumber(elem, endNumber, inter, steps)
		}
		else if (+element.innerHTML !== defaultNumber && !(onTop < 0 && onBottom > 0) && !(+element.innerHTML < endNumber && +element.innerHTML > defaultNumber)){
			element.innerHTML = defaultNumber;
		};
	}

	window.addEventListener('scroll', function() {
		scrollNumberAnimation('GAN-battery-counter', 1400, 800, 100, 0);
	});
});