$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const P30DesignSection = document.querySelector('.P30-design');
    const P30DesignFigure = P30DesignSection.querySelector('.P30-design-figure');
    new Parallax(P30DesignFigure);

    /* GSAP */
    const P30SpeakerSection =  document.querySelector('.P30-speaker');
    const P30SpeakerPhone = P30SpeakerSection.querySelector('.P30-speaker-figure');
    const gsapMatchMedia = gsap.matchMedia();

    gsapMatchMedia.add({
        isDesktop: '(min-width: 992px)',
        isMobile: '(max-width: 991px)',
        isPhone: '(max-width: 767px)'
    }, (context) => {
        const { isPhone } = context.conditions;

        gsap.to(P30SpeakerPhone, {
            x: isPhone ? '50%': '',
            y: isPhone ? '-50px' : '',
            rotate: 90,
            scrollTrigger: {
                id: 'P30SpeakerPhoneTrigger',
                trigger: P30SpeakerSection,
                scrub: true,
                start: '0% 0%',
                pin: P30SpeakerPhone ,
                pinSpacing: false,
                snap: {
                    snapTo: [0, 1], // snap to the progress in the timeline
                    duration: { min: 0.1, max: 2 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                    ease: 'power3.easeOut', // the ease of the snap animation ("power3" by default)
                },
                markers: false,
            },
        })
    });

    
});
