$(document).ready(function () {
    //animation
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    const PR03IntroSection = document.querySelector('.PR03-intro');
    const PR03IntroFigure =
        PR03IntroSection.querySelector('.PR03-intro-figure');
    const PR03IntroFmBlock = PR03IntroSection.querySelector('.PR03-intro-fm');
    const PR03IntroAntennaBlock = PR03IntroSection.querySelector(
        '.PR03-intro-antenna'
    );
    const PR03IntroFigureTl = gsap
        .timeline({
            scrollTrigger: {
                id: 'PR03IntroFigureTrigger',
                trigger: PR03IntroSection,
                scrub: true,
                start: '0% 0%',
                end: '300% 100%',
                pin: PR03IntroSection,
                snap: {
                    // snapTo: "labels", // snap to the closest label in the timeline
                    snapTo: [0, 0.1, 0.8], // snap to the progress in the timeline
                    duration: {min: 0.1, max: 2}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                    ease: "power3.easeOut" // the ease of the snap animation ("power3" by default)
                },
                // markers: true,
            },
        })
        .to(PR03IntroFigure, {
            delay: 5,
            duration: 5,
            top: '42vh',
            left: '30vw',
            scale: 1.45,
        })
        .to(PR03IntroFigure, {
            delay: 7,
            duration: 3,
            left: '100vw',
        })

    const PR03IntroTextTl = gsap
        .timeline({
            scrollTrigger: {
                id: 'PR03IntroTextTrigger',
                trigger: PR03IntroSection,
                scrub: true,
                start: '0% 0%',
                // markers: true,
                end: '300% 100%',
                pin: PR03IntroSection,
            },
        })
        .to(PR03IntroFmBlock, {
            delay: 5,
            duration: 5,
            opacity: 0,
            transform: 'translateY(-200px)',
        })
        .to(PR03IntroAntennaBlock, {
            delay: 5,
            duration: 5,
            opacity: 1,
            transform: 'translateY(0)',
        })
        .to(PR03IntroAntennaBlock, {
            delay: 5,
            duration: 5,
            opacity: 0,
            transform: 'translateY(-200px)',
        })

    const PR03ControlsSection = document.querySelector('.PR03-controls');
    const PR03ControlsFigure = PR03ControlsSection.querySelector(
        '.PR03-controls-figure'
    );
    const PR03ControlsBlock = PR03ControlsSection.querySelector(
        '.PR03-controls-block'
    );

    const PR03ControlsFigureTl = gsap
        .timeline({
            scrollTrigger: {
                id: 'PR03ControlsFigureTrigger',
                trigger: PR03ControlsSection,
                scrub: true,
                start: '0% 0%',
                end: '200% 100%',
                pin: PR03ControlsSection,
                snap: {
                    // snapTo: "labels", // snap to the closest label in the timeline
                    snapTo: [0.5, 1], // snap to the progress in the timeline
                    duration: {min: 0.1, max: 2}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                    ease: "power3.easeOut" // the ease of the snap animation ("power3" by default)
                },
                // markers: true,
            },
        })
        .to(PR03ControlsFigure, {
            duration: 5,
            opacity: 1,
            transform: 'translateY(0)',
        })
        .to(PR03ControlsFigure, {
            delay: 20,
        });

    const PR03ControlsTextTl = gsap
        .timeline({
            scrollTrigger: {
                id: 'PR03ControlsTextTrigger',
                trigger: PR03ControlsSection,
                scrub: true,
                start: '0% 0%',
                end: '200% 100%',
                pin: PR03ControlsSection,
                // markers: true,
            },
        })
        .to(PR03ControlsBlock, {
            delay: 5,
            duration: 5,
            opacity: 1,
            transform: 'translateY(0)',
        })
        .to(PR03ControlsBlock, {
            delay: 20,
        });
});
