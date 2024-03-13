$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const presentationSection = document.querySelector('.C40-presentation');
    const caseSection = document.querySelector('.C40-case');
    const keyboardSection = document.querySelector('.C40-keyboard');
    const designMediaFront = document.querySelector('.C40-design-media-front');
    const designMediaBack = document.querySelector('.C40-design-media-back');

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, (context) => {
        const { isPhone } = context.conditions;
        const caseSectionOffset = caseSection.offsetTop;
        const keyboardSectionOffset = keyboardSection.offsetTop;
        const designMediaFrontHeight = designMediaFront.clientHeight;
        const designMediaFrontCaseOffset = isPhone ? (caseSectionOffset + 20) : (caseSectionOffset - designMediaFrontHeight / 6);
        const designMediaFrontKeyboardOffset = isPhone ? (keyboardSectionOffset + 30) : (keyboardSectionOffset - designMediaFrontHeight / 4);

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: presentationSection,
                markers: false,
                start: '0 0%',
                end: '100% 100%',
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
            .to(
                designMediaFront,
                {
                    top: designMediaFrontCaseOffset,
                    xPercent: isPhone ? 45 : -150,
                    scale: 1.15,
                    duration: 6,
                },
                'start'
            )
            .to(
                designMediaBack,
                { transform: 'rotate(17deg)', duration: 6 },
                'start'
            );
        tl.addLabel('case').to(
            designMediaFront,
            {
                top: designMediaFrontKeyboardOffset,
                xPercent: 0,
                rotation: -30,
                duration: isPhone ? 6 : 7,
            },
            'case'
        );
        tl.addLabel('end');
    });
});
