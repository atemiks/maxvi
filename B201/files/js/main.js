$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
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

        const triggerSectionsSnaps = triggerSections.map(section => {
            return section.offsetTop / (presentationSection.offsetHeight + triggerStartOffset - triggerEndOffset);
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
                snap: {
                    snapTo:  triggerSectionsSnaps,
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0, 
                    ease: 'power1.inOut'
                },
                scrub: true,
            },
        });

        const keyboardTl = gsap.timeline({
            scrollTrigger: {
                trigger: keyboardSection,
                toggleActions: "play reverse play reverse",
                markers: false,
                start: () => {
                    return isPhone ? '0 75%' : '0 75%';
                },
                end: () => {
                    return '100% 75%';
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
                x: isPhone ? -20 : -50,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');

        const sosTl = gsap.timeline({
            scrollTrigger: {
                trigger: sosSection,
                toggleActions: "play reverse play reverse",
                markers: false,
                start: () => {
                    return isPhone ? '15% 25%' : '15% 25%';
                },
                end: () => {
                    return '100% 75%';
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
                x: isPhone ? -20 : -50,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');

        const screenTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenSection,
                toggleActions: "play reverse restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '15% 25%' : '15% 25%'
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
                x: isPhone ? -20 : -50,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');
    });
});
