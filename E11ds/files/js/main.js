document.addEventListener('DOMContentLoaded', () => {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });


    const presentationSection = document.querySelector('.E11ds-presentation');

    const dockTitle = document.querySelector('.E11ds-dock-title');
    const dockSubtitle = document.querySelector('.E11ds-dock-subtitle');
    const dockFigure = document.querySelector('.E11ds-dock-figure');

    const connectionTitle = document.querySelector('.E11ds-connector-title');
    const connectionFigure = document.querySelector('.E11ds-connector-figure');
    const connectionSketch = document.querySelector('.E11ds-connector-sketch');

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
                trigger: presentationSection,
                start: '0 0',
                end: () => {
                    return `200% ${presentationSection.offsetHeight}`
                },
                endTrigger: presentationSection,
                pin: true,
                pinSpacing: true,
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

        presentationTl
            .addLabel('start')
            .to(dockTitle, {
                opacity: 0,
                x: 100,
            }, 'start')
            .to(dockSubtitle, {
                opacity: 0,
                x: 100,
            }, 'start')
            .to(dockFigure, {
                opacity: 0,
                scale: 0.8,
            }, 'start')
            .addLabel('connection')
            .fromTo(connectionTitle, {
                opacity: 0,
                x: 100,
            }, {
                opacity: 1,
                x: 0
            }, 'connection')
            .fromTo(connectionSketch, {
                opacity: 0,
                x: 100,
            }, {
                opacity: 1,
                x: 0,
            }, 'connection')
            .fromTo(connectionFigure, {
                opacity: 0,
                scale: 0.8,
                duration: 4,
            }, {
                opacity: 1,
                scale: 1,
                duration: 5,
            }, 'connection')
            .addLabel('end');
    });
});
