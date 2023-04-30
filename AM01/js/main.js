$(document).ready(function () {
    //animation
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* presentation */
    const presentationSection = document.querySelector('.AM01-presentation');
    const presentationFigure = presentationSection.querySelector(
        '.AM01-presentation-figure'
    );
    const presentationDock = presentationFigure.querySelector(
        '.AM01-presentation-dock'
    );

    let presentationTl = undefined;

    const initPresentationAnimation = () => {
        presentationTl = gsap.timeline({
            scrollTrigger: {
                id: 'presentationTrigger',
                trigger: presentationSection,
                scrub: true,
                start: '0% 50%',
                end: '+=600%',
                markers: false,
                pin: presentationFigure,
            },
        }).to(presentationFigure, {
            // animation screen
            duration: 2.25,
            transform: 'translateY(-15%)',
        }).to(presentationFigure, {
            // animation buttons
            delay: 4.5,
            duration: 1.25,
            transform: 'translateY(-20%)',
        }).to(presentationFigure, {
            // animation keyboard
            delay: 3.5,
            duration: 1.5,
            transform: 'translateY(-50%)',
        }).to(presentationDock, {
            // animation dock
            delay: 0,
            duration: 3.5,
            transform: 'translateY(-73.75%)',
        }).to(presentationFigure, {
            // final transition
            delay: 0.5,
            duration: 4,
            transform: 'translate(-20%, -50%) scale(0.65)',
            filter: 'blur(10px)',
        });
    }

    const rebuildPresentationAnimation = () => {
        if(presentationTl) {
            destroyPresentationAnimation();
            initPresentationAnimation();
        }

        if(!presentationTl) {
            initPresentationAnimation();
        }
    }

    const destroyPresentationAnimation = () => {
        if(presentationTl) {
            presentationTl.kill(true);
            presentationTl = null;
            gsap.set('.pin-spacer-presentationTrigger', {clearProps: true});
            gsap.set(presentationFigure, {clearProps: true});
            gsap.set(presentationDock, {clearProps: true});
        }
    }

    const isPhone = window.matchMedia('(max-width: 767px)');
    const isTablet = window.matchMedia('(min-width: 768px) and (max-width: 991px)');
    const isLaptop = window.matchMedia('(min-width: 992px) and (max-width: 1199px)');
    const isDesktop = window.matchMedia('(min-width: 1200px)');

    const handlePhoneScreenChange = (e) => {
        if(e.matches) {
            destroyPresentationAnimation();
        }
    }

    const handleDesktopScreenChange = (e) => {
        if(e.matches) {
            rebuildPresentationAnimation();
        }
    }

    isPhone.addEventListener('change', handlePhoneScreenChange);
    isTablet.addEventListener('change', handleDesktopScreenChange);
    isLaptop.addEventListener('change', handleDesktopScreenChange);
    isDesktop.addEventListener('change', handleDesktopScreenChange);

    if(!isPhone.matches) {
        initPresentationAnimation();
    }
});
