$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const HD2201ModeScene = $('#HD2201-mode-parallax').get(0);
	const HD2201ModeInstance = new Parallax(HD2201ModeScene);

    // scroll animation 
    const toggleActiveImages = (ctx, arrayOfImages) => {
        arrayOfImages.forEach((image, index) => {
            if(ctx !== index) {
                image.classList.remove('active');
            }
        })
    }

    const HD2201IntroImages = document.querySelectorAll('.HD2201-intro .HD2201-media-figure .HD2201-media-layer');

    HD2201IntroImages.forEach((image, index, array) => {
        gsap.to(image, {
            scrollTrigger: {
                trigger: '.HD2201-intro',
                start: `${index * 1.5 + 30}% 50%`, 
                end: '+=0 50%',
                scrub: true,
                markers: false,
                onEnter: () => {
                    image.classList.add('active');
                    toggleActiveImages(index, array);
                },
                onEnterBack: () => {
                    image.classList.add('active');
                    toggleActiveImages(index, array);
                },
            },
            opacity: '1',
            visibility: 'visible',
        });
    });
});
