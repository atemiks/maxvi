$(document).ready(function () {
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
    const E10SpeakerSection =  document.querySelector('.E10-speaker');
    const E10SpeakerPhone = E10SpeakerSection.querySelector('.E10-speaker-figure');
    const E10CameraSection = document.querySelector('.E10-camera');
    const E10CameraTitle = E10CameraSection.querySelector('.E10-camera-title');
    const gsapMatchMedia = gsap.matchMedia();

    gsapMatchMedia.add({
        isDesktop: '(min-width: 992px)',
        isMobile: '(max-width: 991px)',
        isPhone: '(max-width: 767px)'
    }, (context) => {
        const { isPhone } = context.conditions;

        gsap.to(E10SpeakerPhone, {
            x: isPhone ? '50%': '',
            y: isPhone ? '-50px' : '',
            rotate: 90,
            scrollTrigger: {
                id: 'E10SpeakerPhoneTrigger',
                trigger: E10SpeakerSection,
                scrub: true,
                start: '0% 0%',
                pin: E10SpeakerPhone ,
                pinSpacing: false,
                snap: {
                    snapTo: [0, 1], // snap to the progress in the timeline
                    duration: { min: 0.1, max: 2 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                    ease: 'power3.easeOut', // the ease of the snap animation ("power3" by default)
                },
                markers: false,
            },
        });

        gsap.fromTo(E10CameraTitle, {
            opacity: 0,
            x: isPhone ? '-100px' : '100px',
        }, {
            opacity: 1,
            x: 0,
            scrollTrigger: {
                id: 'E10CameraTitleTrigger',
                trigger: E10CameraSection,
                scrub: true,
                start: '25% 50%',
                end: '50% 50%',
                markers: false,
            },
        })
    });
});
