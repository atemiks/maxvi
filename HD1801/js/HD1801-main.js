$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const HD1801IntroScene = $('#HD1801-intro-parallax').get(0);
	const HD1801IntroInstance = new Parallax(HD1801IntroScene);

    const HD1801ModeScene = $('#HD1801-mode-parallax').get(0);
	const HD1801ModeInstance = new Parallax(HD1801ModeScene);

    // scroll animation 
    const toggleActiveImages = (ctx, arrayOfImages) => {
        arrayOfImages.forEach((image, index) => {
            if(ctx !== index) {
                image.classList.remove('active');
            }
        })
    }

    const HD1801DesignImages = document.querySelectorAll('.HD1801-design .HD1801-media-figure .HD1801-media-layer');

    HD1801DesignImages.forEach((image, index, array) => {
        gsap.to(image, {
            scrollTrigger: {
                trigger: '.HD1801-design',
                start: `${index * 1.5 + 50}% 100%`, 
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
            trigger: ".HD1801-design",
            toggleActions: "restart none none none",
            start: "75% 100%",
            end: "100% 100%",
            scrub: 0.1,
            markers: false,
        },
    }).to(".HD1801-design .HD1801-text-block", {
        width: '400px',
    });
});
