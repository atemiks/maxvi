$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const dockSection = document.querySelector('.B231ds-dock');
    const dockMedia = document.querySelector('.B231ds-dock-media');
    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, () => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: dockSection,
                markers: false,
                start: '0 25%',
                end: '100% 75%',
                scrub: 0.1,
                pin: false,
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
            .fromTo(dockMedia, {
                yPercent: -15
            }, {
                yPercent: 0,
            })
        tl.addLabel('end');
    });
});
