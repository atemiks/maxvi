$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const slotsParallax = document.querySelector('.E5-slots-parallax');
    new Parallax(slotsParallax);


    // /* ScrollTrigger */
    const animationSection = document.querySelector('.E5-animation');
    const screenSection = document.querySelector('.E5-screen');
    const screenBgLayers = document.querySelectorAll('.E5-screen-bg-layer');
    const screenFigure = document.querySelector('.E5-screen-figure');
    const screenScene = document.querySelector('.E5-screen-scene');
    const screenPhone = document.querySelector('.E5-screen-phone');
    const screenDock = document.querySelector('.E5-screen-dock');
    const dockSection = document.querySelector('.E5-dock');
    const sosSection = document.querySelector('.E5-sos');
    const fmSection = document.querySelector('.E5-fm');
    const callSection = document.querySelector('.E5-call');
    const indicatorSection = document.querySelector('.E5-indicator');
    const materialSection = document.querySelector('.E5-material');
    
    const sosBg = document.querySelector('.E5-sos-bg');

    
    const frameCount = 36;
    const urls = new Array(frameCount).fill().map((o, i) => `./files/images/section-screen/animation/E5-screen-animation-${(i+1).toString().padStart(4, '0')}.png`);
    console.log('urls', urls);

    const phoneFlipTl = gsap.timeline({
        scrollTrigger: {
            trigger: screenSection,
            markers: false,
            start: '50% 0',
            end: '100% 0',
            scrub: true, // important!
        },
    });

    const offset = screenPhone.offsetHeight - window.innerHeight;

    phoneFlipTl
        .addLabel('start')
        .to(screenScene, {
        }, 'start')
        .to(screenPhone, {
            duration: 3,
            y: () => {
                return screenScene.offsetHeight - screenPhone.offsetHeight - (screenDock.offsetHeight / 6);
            },
        }, 'start')
        .addLabel('end');

    imageSequence({
        urls, // Array of image URLs
        canvas: screenPhone, // <canvas> object to draw images to
        clear: true, // only necessary if your images contain transparency
    });

    function imageSequence(config) {
        let playhead = {frame: 0},
            canvas = gsap.utils.toArray(config.canvas)[0] || console.warn("canvas not defined"),
            ctx = canvas.getContext("2d"),
            curFrame = -1,
            onUpdate = config.onUpdate,
            images,
            updateImage = function() {
                let frame = Math.round(playhead.frame);
                if (frame !== curFrame) { // only draw if necessary
                    config.clear && ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.drawImage(images[Math.round(playhead.frame)], 0, 0, canvas.width, canvas.height);
                    curFrame = frame;
                    onUpdate && onUpdate.call(this, frame, images[frame]);
                }
            };
        images = config.urls.map((url, i) => {
            let img = new Image();
            img.src = url;
            i || (img.onload = updateImage);
            return img;
        });
        return phoneFlipTl.to(playhead, {
            frame: images.length - 1,
            ease: "none",
            onUpdate: updateImage,
            duration: images.length / (config.fps || 30),
            paused: !!config.paused,
        }, 'start');
    }


    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const animationTl = gsap.timeline({
            scrollTrigger: {
                trigger: animationSection,
                markers: false,
                start: () => {
                    const offsetTop = screenSection.offsetHeight;
                    return `${offsetTop} 0`;
                },
                end: () => {
                    const offsetTop = animationSection.offsetHeight - materialSection.offsetHeight;
                    return `${offsetTop} 0`;
                },
                scrub: 0.1,
                pin: screenFigure,
                pinSpacing: false,
            },
        });

        const screenTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: false,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });

        screenTl
            .addLabel('start')
            .to(screenBgLayers[0], {
                xPercent: -5,
                yPercent: -5,
            }, 'start')
            .to(screenBgLayers[1], {
                xPercent: 2.5,
                yPercent: 5,
            }, 'start')
            .to(screenBgLayers[2], {
                xPercent: -2.5,
                yPercent: -10,
            }, 'start')
            .to(screenBgLayers[3], {
                xPercent: 2.5,
                yPercent: 10,
            }, 'start')
            .to(screenBgLayers[4], {
                xPercent: -2.5,
                yPercent: 5,
            }, 'start')
            .to(screenBgLayers[5], {
                xPercent: 2.5,
                yPercent: -10,
            }, 'start')
            .to(screenBgLayers[6], {
                xPercent: -5,
            }, 'start')
            .to(screenBgLayers[7], {
                yPercent: 5,
            }, 'start')
            .to(screenBgLayers[8], {
                xPercent: -7.5,
            }, 'start')
            .addLabel('end');

        const dockTl = gsap.timeline({
            scrollTrigger: {
                trigger: dockSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: sosBg,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });

        const sosTl = gsap.timeline({
            scrollTrigger: {
                trigger: sosSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: sosBg,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });

        const fmTl = gsap.timeline({
            scrollTrigger: {
                trigger: fmSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: sosBg,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });

        const callTl = gsap.timeline({
            scrollTrigger: {
                trigger: callSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 0.1,
                pin: sosBg,
                pinSpacing: false,
                snap: {
                    snapTo:  [0, 1],
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0.1, 
                    ease: 'power1.inOut'
                },
            },
        });
    });
});
