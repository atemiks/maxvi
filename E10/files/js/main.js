$(document).ready(function () {
    const isMobile = window.matchMedia("(max-width: 991px)");

    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const E10DesignSection = document.querySelector('.E10-design');
    const E10DesignFigure = E10DesignSection.querySelector('.E10-design-figure');
    new Parallax(E10DesignFigure);

    const E10ScreenSection = document.querySelector('.E10-screen');
    const E10ScreenFigure = E10ScreenSection.querySelector('.E10-screen-figure');
    new Parallax(E10ScreenFigure);

    /* GSAP */
    const gsapMatchMedia = gsap.matchMedia();

    gsapMatchMedia.add({
        isDesktop: '(min-width: 992px)',
        isMobile: '(max-width: 991px)',
        isPhone: '(max-width: 767px)'
    }, (context) => {
        const { isPhone } = context.conditions;

        const timeline = gsap.timeline({
            scrollTrigger: {
                id: 'E10SDesignPhoneTrigger',
                trigger: E10DesignSection,
                scrub: true,
                start: isPhone ? '25% 0%' : '15% 0%',
                end: isPhone ? '50% 0%' : '100% 0%',
                pin: E10DesignFigure,
                snap: {
                    snapTo: "labels", // snap to the closest label in the timeline
                    duration: { min: 0.2, max: 2 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                    delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                    ease: "power1.inOut", // the ease of the snap animation ("power3" by default)
                },
                markers: false,
            },
        })
        .addLabel('start')
        .to(E10DesignFigure, {
            rotate: 8
        })
        .addLabel('end');
    });

    /* Colors gallery */
    const E10ColorsSection = document.querySelector('.E10-colors');
    const E10ColorsGalleryLinks = E10ColorsSection.querySelectorAll('.E10-colors-link');
    E10ColorsGalleryLinks.forEach((link, index) => {
        link.href = link.dataset.href;

        link.addEventListener('click', (event) => {
            event.preventDefault();

            if(isMobile.matches) {
                E10ColorsOpenGallery(index)
            }
        })
    });

    const E10ColorsOpenGallery = (initialIndex = 0) => {
        $.fancybox.open( E10ColorsGalleryLinks, {
            loop: true,
            buttons: [
                'close'
            ],
            thumbs : false,
        }, initialIndex);
    }
});
