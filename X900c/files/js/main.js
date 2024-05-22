$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const introParallax = document.querySelector('.X900c-intro-parallax');
    new Parallax(introParallax);

    const screenParallax = document.querySelector('.X900c-screen-parallax');
    new Parallax(screenParallax);

    // /* ScrollTrigger */
    const screenAndCaseSection = document.querySelector('.X900c-screen-and-case-presentation');
    const screenFigure = document.querySelector('.X900c-screen-figure');
    const batterySection = document.querySelector('.X900c-battery')
    const batteryVideo = document.querySelector('.X900c-battery-video');
    const batteryFigure = document.querySelector('.X900c-battery-figure');
    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, (context) => {
        const { isPhone } = context.conditions;
    
        const screenAndCaseTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenAndCaseSection,
                markers: false,
                start: isPhone ? '5% 5%' : '0 5%',
                end: isPhone ? '55% 5%' : '50% 5%',
                scrub: 0.1,
                pin: screenFigure,
                pinSpacing: false,
                snap: {
                    snapTo: 'labels',
                    duration: { min: 0.2, max: 1 },
                    delay: 0.2,
                    ease: 'power1.inOut',
                },
            },
        });
    
        screenAndCaseTl.addLabel('start')
            .to(screenFigure, {
                xPercent: isPhone ? 0 : 175,
                rotate: -15,
            });
        screenAndCaseTl.addLabel('end');

    
        const batteryAndPowerbankTl = gsap.timeline({
            scrollTrigger: {
                trigger: batterySection,
                markers: false,
                start: '0 0',
                end: isPhone ? '100% 400px' :  '100% 100%',
                scrub: 0.1,
                pin: batteryVideo,
                pinSpacing: false,
                snap: {
                    snapTo: [0, 1],
                    duration: { min: 0.2, max: 1 },
                    delay: 0.2,
                    ease: 'power1.inOut',
                },
            },
        });

        if(!isPhone) {
            batteryAndPowerbankTl.addLabel('start')
                .to(batteryFigure, {
                    top: batterySection.clientHeight / 2
                });
            batteryAndPowerbankTl.addLabel('end');
        }
    });
});
