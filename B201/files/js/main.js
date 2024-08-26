$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const presentationSection = document.querySelector('.B201-presentation');
    const presentationScene = document.querySelector('.B201-presentation-scene');
    const presentationFigure = document.querySelector('.B201-presentation-figure');
    const keyboardBlock = document.querySelector('.B201-keyboard-block');
    const sosBlock = document.querySelector('.B201-sos-block');
    const screenBlock = document.querySelector('.B201-screen-block');
   
    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const presentationTl = gsap.timeline({
            scrollTrigger: {
                trigger: presentationScene,
                markers: false,
                start: '-60px 0%',
                end: '300% 0%',
                pin: true,
                snap: {
                    snapTo:  "labels",
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0, 
                    ease: 'power1.inOut'
                },
                scrub: true,
                onSnapComplete: (snap) => {
                    console.log('snap', snap);
                }
            },
        });

        presentationTl
            .addLabel('start')
            .to(keyboardBlock, {
                opacity: 0,
                x: -100,
                duration: 1,
                onReverseComplete: () => {
                    console.log('keyboard onReverseComplete');
                    presentationFigure.setAttribute('data-animation', 'keyboard');
                }
            }, 'start')
            .fromTo(sosBlock, {
                opacity: 0,
                x: -100
            }, {
                opacity: 1,
                x: 0,
                duration: 1,
                delay: 1,
                onComplete: () => {
                    console.log('sos onComplete');
                    presentationFigure.setAttribute('data-animation', 'sos');
                },
            }, 'start')
            .addLabel('screen')
            .fromTo(sosBlock, {
                opacity: 1,
                x: 0,
            }, {
                opacity: 0,
                x: -100,
                duration: 1,
                onReverseComplete: () => {
                    console.log('sos onReverseComplete');
                    presentationFigure.setAttribute('data-animation', 'sos');
                }
            }, 'screen')
            .fromTo(screenBlock, {
                opacity: 0,
                x: -100
            }, {
                opacity: 1,
                x: 0,
                duration: 1,
                delay: 1,
                onComplete: () => {
                    console.log('screen onComplete');
                    presentationFigure.setAttribute('data-animation', 'screen');
                },
            }, 'screen')
            .addLabel('end');
    });
});
