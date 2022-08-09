$(document).ready(function() {
	//animation
    setTimeout(function(){
    	AOS.init({
    		anchorPlacement: 'top-bottom'
    	});
    }, 100);


	// battery number counter
	function animateNumber(elem, endNumber, inter, steps) {
		let element = document.querySelector('.' + elem);
		let startCount = +element.innerHTML;
		let delay = Math.round(inter / (endNumber / steps));

		let interval = setInterval(() => {
			startCount += steps;

			if (startCount > endNumber) {
				startCount = endNumber
			};

			if (startCount == endNumber) {
				clearInterval(interval)
			};

			element.innerHTML = startCount;
		}, delay);
	}

	function scrollNumberAnimation(elem, endNumber, inter, steps, defaultNumber, offset) {
		let element = document.querySelector('.' + elem);
		let onTop = (element.getBoundingClientRect().y + (element.offsetHeight * 0.5)) - document.documentElement.clientHeight - offset;
		let onBottom = (element.getBoundingClientRect().y + element.offsetHeight);
		
		
		if (onTop < 0 && onBottom > 0 && +element.innerHTML !== endNumber && !(+element.innerHTML < endNumber && +element.innerHTML > defaultNumber)) {
			animateNumber(elem, endNumber, inter, steps);
		}
		else if (+element.innerHTML !== defaultNumber && !(onTop < 0 && onBottom > 0) && !(+element.innerHTML < endNumber && +element.innerHTML > defaultNumber)){
			element.innerHTML = defaultNumber;
		};
	}

	window.addEventListener('scroll', function() {
		let heightBatteryFigure = document.querySelector('.b35-battery .b35-media-figure').offsetHeight;
		scrollNumberAnimation('b35-battery-counter', 2500, 1500, 100, 0, heightBatteryFigure);
	});
});