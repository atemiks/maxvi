document.addEventListener('DOMContentLoaded', () => {
    const screenSection = document.querySelector('.E10ds-screen');
    const screenMediaPhoneLeft = document.querySelector('.E10ds-screen-layer.layer-1');
    const screenMediaPhoneRight = document.querySelector('.E10ds-screen-layer.layer-2');
    const dockSection = document.querySelector('.E10ds-dock');
    const dockTitle = document.querySelector('.E10ds-dock-title');
    const dockSubtitle = document.querySelector('.E10ds-dock-subtitle');
    const dockMedia = document.querySelector('.E10ds-dock-figure');
    const connectorSection = document.querySelector('.E10ds-connector');
    const connectorMediaLeft = document.querySelector('.E10ds-connector-layer.layer-1')
    const connectorMediaRight = document.querySelector('.E10ds-connector-layer.layer-2')

    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });
    
    /* GSAP */
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
                start: '0 50%',
                end: '100% 0',
                pin: false,
                pinSpacing: true,
                markers: false,
                scrub: 0.1,
            }
        });

        screenTl
            .addLabel('start')
            .to(screenMediaPhoneLeft, {
                xPercent: -15,
                yPercent: 7.5,
            }, 'start')
            .to(screenMediaPhoneRight, {
                xPercent: 15,
                yPercent: -7.5,
            }, 'start')
            .addLabel('end');

        const dockTl = gsap.timeline({
            scrollTrigger: {
                trigger: dockSection,
                toggleClass: {
                    targets: dockMedia,
                    className: 'aos-animate',
                },
                toggleActions: isPhone ? "play none play reverse" : "play reverse play reverse",
                markers: false,
                start: '0 75%',
                end: '100% 75%',
            },
        });
    
        dockTl
            .addLabel('start')
            .fromTo(dockMedia, {
                opacity: 0,
                x: -100,
            }, {
                opacity: 1,
                x: 0,
            }, 'start')
            .fromTo(dockTitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0,
            }, 'start')
            .fromTo(dockSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0,
            }, 'start')
            .addLabel('end');

        const connectorTl = gsap.timeline({
            scrollTrigger: {
                trigger: connectorSection,
                toggleActions: "play none play reverse",
                markers: false,
                start: '0 75%',
                end: '100% 75%',
            },
        });
    
        connectorTl
            .addLabel('start')
            .fromTo(connectorMediaLeft, {
                opacity: 0,
                x: -100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(connectorMediaRight, {
                opacity: 0,
                x: 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');
    });
});
