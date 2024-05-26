$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    // /* ScrollTrigger */
    const designSection = document.querySelector('.B5ds-design');
    const designGradient = designSection.querySelector('.B5ds-design-gradient');
    
    const dockSection = document.querySelector('.B5ds-dock');
    const dockGradient = dockSection.querySelector('.B5ds-dock-gradient')
    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, (context) => {
        const designTl = gsap.timeline({
            scrollTrigger: {
                trigger: designSection,
                markers: false,
                start: '0 0',
                end: '100% 100%',
                scrub: 0.1,
                pin: false,
                pinSpacing: false,
            },
        });
    
        designTl.to(designGradient, {
            'background-position': '0 100%'
        });

        const dockTl = gsap.timeline({
            scrollTrigger: {
                trigger: dockSection,
                markers: false,
                start: '0 25%',
                end: '100% 100%',
                scrub: 0.1,
                pin: false,
                pinSpacing: false,
            },
        });

        dockTl.to(dockGradient, {
            'background-position': '0 100%'
        });
    });
});
