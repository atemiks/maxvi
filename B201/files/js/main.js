$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const landing = document.querySelector('.B201-landing');
    const landingBg = document.querySelector('.B201-landing-bg')
    const presentationSection = document.querySelector('.B201-presentation');
    const presentationScene = document.querySelector('.B201-presentation-scene');
    const presentationFigure = document.querySelector('.B201-presentation-figure');
    
    const keyboardSection = document.querySelector('.B201-keyboard');
    const keyboardBlock = document.querySelector('.B201-keyboard-block');
    
    const sosSection = document.querySelector('.B201-sos');
    const sosBlock = document.querySelector('.B201-sos-block');

    const screenSection = document.querySelector('.B201-screen');
    const screenBlock = document.querySelector('.B201-screen-block');
    
    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const triggerSections = [
            keyboardSection,
            sosSection, 
            screenSection, 
        ];

        const triggerStartOffset = 60;
        const triggerEndOffset = screenSection.offsetHeight;

        const landingTl = gsap.timeline({
            scrollTrigger: {
                trigger: landing,
                markers: false,
                start: '0 0',
                end: '100% 100%',
                pin: landingBg,
                scrub: true,
            },
        });

        const presentationTl = gsap.timeline({
            scrollTrigger: {
                trigger: presentationScene,
                markers: false,
                start: () => {
                    return `0 ${triggerStartOffset}px`;
                },
                end: () => {
                    return `100% ${triggerEndOffset}px`
                },
                endTrigger: presentationSection,
                pin: presentationScene,
                scrub: 0.1,
            },
        });

        const keyboardTl = gsap.timeline({
            scrollTrigger: {
                trigger: keyboardSection,
                toggleActions: "play reverse play reverse",
                markers: false,
                start: '0 75%',
                end: () => {
                    return isPhone ? '100% 10%' : '100% 15%';
                },
                onEnter: () => {
                    presentationFigure.setAttribute('data-animation', 'keyboard');
                },
                onEnterBack: () => {
                    presentationFigure.setAttribute('data-animation', 'keyboard');
                },
                onLeaveBack: () => {
                    presentationFigure.removeAttribute('data-animation');
                }
            },
        });

        keyboardTl
            .addLabel('start')
            .fromTo(keyboardBlock, {
                opacity: 0,
            }, {
                opacity: 1,
                delay: 0,
                duration: 0.4,
            }, 'start')
            .addLabel('end');

        const sosTl = gsap.timeline({
            scrollTrigger: {
                trigger: sosSection,
                toggleActions: "play reverse play reverse",
                markers: false,
                start: () => {
                    return isPhone ? '0 10%' : '0 15%';
                },
                end: () => {
                    return isPhone ? '100% 10%' : '100% 15%';
                },
                onEnter: () => {
                    presentationFigure.setAttribute('data-animation', 'sos');
                },
                onEnterBack: () => {
                    presentationFigure.setAttribute('data-animation', 'sos');
                }
            },
        });

        sosTl
            .addLabel('start')
            .fromTo(sosBlock, {
                opacity: 0,
            }, {
                opacity: 1,
                delay: 0,
                duration: 0.4,
            }, 'start')
            .addLabel('end');

        const screenTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenSection,
                toggleActions: "play reverse restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '0 10%' : '0% 15%'
                },
                onEnter: () => {
                    presentationFigure.setAttribute('data-animation', 'screen');
                },
                onEnterBack: () => {
                    presentationFigure.setAttribute('data-animation', 'screen');
                }
            },
        });

        screenTl
            .addLabel('start')
            .fromTo(screenBlock, {
                opacity: 0,
            }, {
                opacity: 1,
                delay: 0,
                duration: 0.4,
            }, 'start')
            .addLabel('end');
    });
});
