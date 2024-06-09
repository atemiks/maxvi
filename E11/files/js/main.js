$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const parallaxBlocks = document.querySelectorAll('[data-parallax]');
    parallaxBlocks.forEach((block) => {
        new Parallax(block, {
            limitY: 1,
        });
    });

    // /* ScrollTrigger */
    const introSection = document.querySelector('.E11-intro');
    const introMedia = document.querySelector('.E11-intro-layer.layer-1');
    const caseSection = document.querySelector('.E11-case');
    const caseMedia = document.querySelector('.E11-case-figure');
    const materialBlocks = document.querySelectorAll('.E11-material-block');

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const introTl = gsap.timeline({
            scrollTrigger: {
                trigger: introSection,
                markers: false,
                start: '0 0',
                end: '105% 0',
                scrub: 0.1,
                pin: introMedia,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });

        introTl
            .addLabel('start')
            .to(introMedia, {
                xPercent: isPhone ? 35 : -72.5,
                yPercent: isPhone ? -27.5 : 7.5,
                scale: isPhone ? 1.15 : 1.45,
                rotate: 22,
            }, 'start')
            .addLabel('end');

        const caseTl = gsap.timeline({
            scrollTrigger: {
                trigger: caseSection,
                markers: false,
                start: '20% 0',
                end: '85% 0',
                scrub: 0.1,
                pin: caseMedia,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
                onUpdate: ({progress}) => {
                    const targetProgress = isPhone ? 0.85 : 0.95;

                    if(progress >= targetProgress) {
                        materialBlocks.forEach(block => {
                            block.classList.add('aos-animate');
                        });
                        return;
                    }

                    materialBlocks.forEach(block => {
                        block.classList.remove('aos-animate');
                    });
                }
            },
        });

        caseTl
            .addLabel('start')
            .to(caseMedia, {
                xPercent: isPhone ? -100 : -218,
                yPercent: 15,
                rotate: -64,
                scale: 0.9,
            }, 'start')
            .addLabel('end');
    });
});
