document.addEventListener('DOMContentLoaded', () => {
    const batterySection = document.querySelector('.P99-battery');
    const batteryMedia = document.querySelector('.P99-battery-figure');
    const batteryMediaUSB = document.querySelector('.P99-battery-usb');
    const connectorSection = document.querySelector('.P99-connector');
    const connectorTitle = document.querySelector('.P99-connector-title');
    const connectorSubtitle = document.querySelector('.P99-connector-subtitle');

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

         const batteryTl = gsap.timeline({
            scrollTrigger: {
                trigger: batterySection,
                start: '0 0',
                end: () => {
                    return `100% ${connectorSection.offsetHeight}`;
                },
                endTrigger: connectorSection,
                pin: batteryMedia,
                pinSpacing: true,
                markers: false,
                scrub: 0.1,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0, 
                    ease: 'power1.inOut'
                },
            }
        });

        batteryTl
            .addLabel('start')
            .fromTo(batteryMediaUSB, {
                opacity: 0,
            }, {
                opacity: 1,
                duration: 5,
                delay: 5,
            }, 'start')
            .fromTo(connectorTitle, {
                opacity: 0,
                x: -100,
            }, {
                opacity: 1,
                x: 0,
                duration: 5,
                delay: 5,
            }, 'start')
            .fromTo(connectorSubtitle, {
                opacity: 0,
                x: -100,
            }, {
                opacity: 1,
                x: 0,
                duration: 5,
                delay: 5,
            }, 'start')
            .addLabel('end');
    });
});
