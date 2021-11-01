$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);

	// parallax design scene 
    let k21DesignScene = $('#k21-design-parallax').get(0);
	let k21DesignParallaxInstance = new Parallax(k21DesignScene);

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
		scrollNumberAnimation('k21-battery-counter', 1400, 800, 100, 0);
	});
});