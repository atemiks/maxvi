$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    // /* ScrollTrigger */
    const screenSection = document.querySelector('.P18i-screen');
    const screenFigure = screenSection.querySelector('.P18i-screen-figure');
    const simSection = document.querySelector('.P18i-sim');
    const simFigures = simSection.querySelectorAll('.P18i-sim-layer-sim');

    const screenFigureCoords = {
        desktop: {
            xPercent: -200,
            scale: 0.7,
        },
        laptop: {
            xPercent: -200,
            scale: 0.7,
        },
        tablet: {
            xPercent: -180,
            scale: 0.7,
        },
        phone: {
            xPercent: 0,
            scale: 0.7,
        }
    }

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isDesktop, isLaptop, isTablet, isPhone} = conditions;
        const currentMode = isDesktop ? 'desktop' : isLaptop ? 'laptop' : isTablet ? 'tablet' : 'phone';

        if(!isPhone) {
            const screenTl = gsap.timeline({
                scrollTrigger: {
                    trigger: screenSection,
                    markers: false,
                    start: isPhone ? '0 0' : '0 0',
                    end: isPhone ? '100% 0' : '107.5% 0',
                    scrub: 0.1,
                    pin: screenFigure,
                    pinSpacing: false,
                    snap: {
                        snapTo:  [0, 1],
                        duration: { min: 0.1, max: 0.8 }, 
                        delay: 0.1, 
                        ease: 'power1.inOut'
                    },
                },
            });
        
            screenTl
            .addLabel('start')
            .to(screenFigure, screenFigureCoords[currentMode])
            .addLabel('end');
        }

        const simTl = gsap.timeline({
            scrollTrigger: {
                trigger: simSection,
                markers: false,
                start: '35% 50%',
                end: `75% 50%`,
                scrub: 0.1,
                pin: false,
                pinSpacing: false,
            },
        });

        simTl
        .addLabel('start')
        .to(simFigures[0], {
            xPercent: isPhone ? 160 : 235,
            duration: 9,
        }, 'start')
        .to(simFigures[1], {
            xPercent: isPhone ? 160 : 250,
            duration: 10,
        }, 'start')
        .to(simFigures[2], {
            xPercent: isPhone ? 160 : 195,
            duration: 8,
        }, 'start')
        .addLabel('end');
    });
});