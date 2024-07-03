document.addEventListener('DOMContentLoaded', () => {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    // /* ScrollTrigger */
    const scaleFigure = document.querySelector('.scales');
    const scaleDock = document.querySelector('.scales-dock');
    const scaleFruits = document.querySelector('.scales-fruits');
    const accuracySection = document.querySelector('.KS102P-accuracy');
    const bowlTitle = document.querySelector('.KS102P-bowl-title');

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const scaleTl = gsap.timeline({
            scrollTrigger: {
                trigger: accuracySection,
                start: '0 0',
                end: isPhone ? '100% 535px' : '100% 100%',
                endTrigger: '.KS102P-bowl',
                pin: scaleFigure,
                pinSpacing: false,
                markers: false,
                scrub: 0.1,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            }
        });

        scaleTl
            .addLabel('start')
            .to(scaleDock, {
                opacity: 0,
                y: 100,
                duration: 10,
            }, 'start')
            .to(scaleFruits, {
                opacity: 1,
                delay: 3,
                duration: 7,
            }, 'start')
            .fromTo(bowlTitle, {
                opacity: 0,
                x: -100,
            }, {
                opacity: 1,
                x: 0,
                delay: 5,
                duration: 5,
            },
             'start')
            .addLabel('end');
    });
});
