$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const introSection = document.querySelector('.RT01-intro');
    const introTitle = document.querySelector('.RT01-intro-title');
    const introFigure = document.querySelector('.RT01-intro-figure');
    const introBg = document.querySelector('.RT01-intro-bg');
    const screenTitle = document.querySelector('.RT01-screen-title');

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: introSection,
            markers: false,
            start: '0 0%',
            end: '100% 50%',
            scrub: 0.1,
            pin: introSection,
            pinSpacing: false,
            snap: {
                snapTo: 'labels',
                duration: { min: 0.2, max: 1 },
                delay: 0.2,
                ease: 'power1.inOut',
            },
        },
    });

    tl.addLabel('start')
        .to(introFigure, { scale: 1.5, duration: 10 }, 'start')
        .to(introTitle, { y: '-100%', opacity: 0, duration: 2.5 }, 'start')
        .to(introBg, { y: '-100%', duration: 5 }, 'start')
        .fromTo(
            screenTitle,
            { left: -100, opacity: 0 },
            { left: 15, opacity: 1, duration: 7.5 },
            2.5
        ); // delay 2.5sec
    tl.addLabel('end')
        .to(introFigure, { x: window.innerWidth, duration: 5 }, 'end')
        .to(screenTitle, { y: '-100%', opacity: 0, duration: 5 }, 'end');

    /* Parallax */
    const simFigure = document.querySelector('.RT01-sim-parallax');
    new Parallax(simFigure);
});
