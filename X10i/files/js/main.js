$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    // /* ScrollTrigger */
    const screenSection = document.querySelector('.X10i-screen');
    const screenFigure = document.querySelector('.X10i-screen-figure');
    const screenMedia = document.querySelector('.X10i-screen-media');
    const caseTitle = document.querySelector('.X10i-case-title');
    const caseDescription = document.querySelector('.X10i-case-block');
    const batterySection = document.querySelector('.X10i-battery');
    const batteryFigure = document.querySelector('.X10i-battery-figure');
    const batteryFigureShadow = document.querySelector('.X10i-battery-figure-shadow');

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const screenTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: screenFigure,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
                onToggle: ({progress}) => {
                    if(progress === 1) {
                        caseTitle.classList.add('aos-animate');
                        caseDescription.classList.add('aos-animate');
                        screenFigure.classList.add('aos-animate');
                        return;
                    }

                    caseTitle.classList.remove('aos-animate');
                    caseDescription.classList.remove('aos-animate');
                    screenFigure.classList.remove('aos-animate');
                }
            },
        });
    
        screenTl
            .addLabel('start')
            .to(screenFigure, {
                yPercent: isPhone ? 15 : 0,
            }, 'start')
            .to(screenMedia, {
                yPercent: -50,
            }, 'start')
            .addLabel('end');

        const batteryTl = gsap.timeline({
            scrollTrigger: {
                trigger: batterySection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: batteryFigure,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });

        batteryTl
            .addLabel('start')
            .to(batteryFigure, {
                xPercent: isPhone ? 20 : 32.5,
                yPercent: isPhone ? -25 : 0,
            }, 'start')
            .to(batteryFigureShadow, {
                scale: 0,
            }, 'start')
            .addLabel('end');
    });
});
