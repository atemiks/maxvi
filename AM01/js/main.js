$(document).ready(function () {
    //animation
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* presentation */
    const presentationSection = document.querySelector('.AM01-presentation');
    const presentationScreenBlock = presentationSection.querySelector(
        '.AM01-presentation-screen-block '
    );
    const presentationContactsBlock = presentationSection.querySelector(
        '.AM01-presentation-contacts-block '
    );
    const presentationKeyboardBlock = presentationSection.querySelector(
        '.AM01-presentation-keyboard-block'
        );
    const presentationMediaContainer = presentationSection.querySelector(
        '.AM01-presentation-media-container'
    );
    const presentationFigure = presentationSection.querySelector(
        '.AM01-presentation-figure'
    );
    const presentationDock = presentationFigure.querySelector(
        '.AM01-presentation-dock'
    );

    let presentationBlocksTl = undefined;
    let presentationFigureTl = undefined;

    const initMobilePresentationAnimation = () => {
        presentationBlocksTl = gsap
            .timeline({
                scrollTrigger: {
                    id: 'presentationBlocksTrigger',
                    trigger: presentationSection,
                    scrub: true,
                    start: '0% 0%',
                    end: '+=400%',
                    markers: true,
                    pin: presentationSection,
                },
            })
            .fromTo(
                [presentationContactsBlock, presentationKeyboardBlock],
                { tra: '140px', opacity: 0 },
                { top: '140px', opacity: 0 }
            )
            .to(presentationScreenBlock, {
                top: '-140px',
                opacity: 0,
                delay: 1.5,
                duration: 1,
            })
            .to(presentationContactsBlock, {
                top: '40px',
                opacity: 1,
                duration: 1,
            })
            .to(presentationContactsBlock, {
                top: '-140px',
                opacity: 1,
                delay: 0.5,
                duration: 1,
            })
            .to(presentationKeyboardBlock, {
                top: '40px',
                opacity: 1,
                duration: 1,
            })
            .to(presentationKeyboardBlock, {
                top: '40px',
                opacity: 1,
                duration: 6,
            });

        presentationFigureTl = gsap
            .timeline({
                scrollTrigger: {
                    id: 'presentationFigureTrigger',
                    trigger: presentationSection,
                    scrub: true,
                    start: '0% 0%',
                    end: '+=400%',
                    markers: true,
                    pin: presentationSection,
                },
            })
            .to(presentationFigure, {
                // animation screen
                duration: 1.5,
                transform: 'translateY(-15%)',
                onStart() {
                    presentationMediaContainer.classList.add('is-overflow');
                },
                onReverseComplete() {
                    presentationMediaContainer.classList.remove('is-overflow');
                },
            })
            .to(presentationFigure, {
                // animation buttons
                delay: 0.5,
                duration: 1.5,
                transform: 'translateY(-30%)',
            })
            .to(presentationFigure, {
                // animation keyboard
                delay: 0.5,
                duration: 1.5,
                transform: 'translateY(-45%)',
            })
            .to(presentationDock, {
                // animation dock
                delay: 0.5,
                duration: 1.5,
                transform: 'translateY(-73.75%)',
            })
            .to(presentationFigure, {
                // animation dock
                delay: 0.5,
                duration: 3,
                scale: 0.65,
                transform: 'translateY(-12.5%)',
                onUpdate() {
                    const progress = this.totalProgress();

                    if (progress >= 0.7) {
                        presentationMediaContainer.classList.remove(
                            'is-overflow'
                        );
                    } else {
                        presentationMediaContainer.classList.add('is-overflow');
                    }
                },
            });
    };

    const initDesktopPresentationAnimation = () => {
        presentationFigureTl = gsap
            .timeline({
                scrollTrigger: {
                    id: 'presentationFigureTrigger',
                    trigger: presentationSection,
                    scrub: true,
                    start: '0% 50%',
                    end: '+=600%',
                    markers: false,
                    pin: presentationFigure,
                },
            })
            .to(presentationFigure, {
                // animation screen
                duration: 2.25,
                transform: 'translateY(-15%)',
            })
            .to(presentationFigure, {
                // animation buttons
                delay: 4.5,
                duration: 1.25,
                transform: 'translateY(-20%)',
            })
            .to(presentationFigure, {
                // animation keyboard
                delay: 3.5,
                duration: 1.5,
                transform: 'translateY(-50%)',
            })
            .to(presentationDock, {
                // animation dock
                delay: 0,
                duration: 3.5,
                transform: 'translateY(-73.75%)',
            })
            .to(presentationFigure, {
                // final transition
                delay: 0.5,
                duration: 4,
                transform: 'translate(-20%, -50%) scale(0.65)',
                filter: 'blur(10px)',
            });
    };

    const rebuildPresentationAnimation = () => {
        destroyPresentationAnimation();
        initDesktopPresentationAnimation();
    };

    const destroyPresentationAnimation = () => {
        if(presentationBlocksTl) {
            presentationBlocksTl.kill(true);
            presentationBlocksTl = null;
            gsap.set('.pin-spacer-presentationBlocksTrigger', {
                clearProps: true,
            });
            gsap.set(presentationSection, { clearProps: true });
            gsap.set(presentationScreenBlock, { clearProps: true });
            gsap.set(presentationContactsBlock, { clearProps: true });
            gsap.set(presentationKeyboardBlock, { clearProps: true });
        }

        if (presentationFigureTl) {
            presentationFigureTl.kill(true);
            presentationFigureTl = null;
            gsap.set('.pin-spacer-presentationFigureTrigger', {
                clearProps: true,
            });
            gsap.set(presentationFigure, { clearProps: true });
            gsap.set(presentationDock, { clearProps: true });
            presentationMediaContainer.classList.remove('is-overflow');
        }
    };

    const isPhone = window.matchMedia('(max-width: 767px)');
    const isTablet = window.matchMedia(
        '(min-width: 768px) and (max-width: 991px)'
    );
    const isLaptop = window.matchMedia(
        '(min-width: 992px) and (max-width: 1199px)'
    );
    const isDesktop = window.matchMedia('(min-width: 1200px)');

    const handlePhoneScreenChange = (e) => {
        if (e.matches) {
            destroyPresentationAnimation();
            initMobilePresentationAnimation();
        }
    };

    const handleDesktopScreenChange = (e) => {
        if (e.matches) {
            rebuildPresentationAnimation();
        }
    };

    isPhone.addEventListener('change', handlePhoneScreenChange);
    isTablet.addEventListener('change', handleDesktopScreenChange);
    isLaptop.addEventListener('change', handleDesktopScreenChange);
    isDesktop.addEventListener('change', handleDesktopScreenChange);
    
    
    if (isPhone.matches) {
        initMobilePresentationAnimation();
    }

    if(!isPhone.matches) {
        initDesktopPresentationAnimation();
    }
});
