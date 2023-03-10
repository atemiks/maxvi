$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const HD2001IntroScene = $('#HD2001-intro-parallax').get(0);
	const HD2001IntroInstance = new Parallax(HD2001IntroScene);

    const HD2001FreezeScene = $('#HD2001-freeze-parallax').get(0);
	const HD2001FreezeInstance = new Parallax(HD2001FreezeScene);

    // scroll animation 
    const toggleActiveImages = (ctx, arrayOfImages) => {
        arrayOfImages.forEach((image, index) => {
            if(ctx !== index) {
                image.classList.remove('active');
            }
        })
    }

    const HD2001ModeImages = document.querySelectorAll('.HD2001-mode .HD2001-media-figure .HD2001-media-layer');

    HD2001ModeImages.forEach((image, index, array) => {
        gsap.to(image, {
            scrollTrigger: {
                trigger: '.HD2001-mode',
                start: `${index * 1.5 + 30}% 100%`, 
                end: '+=0 100%',
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

    gsap.timeline({
        scrollTrigger: {
            trigger: '.HD2001-mode',
            toggleActions: 'restart none none none',
            start: '75% 100%',
            end: '100% 100%',
            scrub: 3,
            markers: false,
        },
    }).to('.HD2001-mode .HD2001-subtitle', {
        width: '100%',
    });
});
