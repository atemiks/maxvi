$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const slotsParallax = document.querySelector('.E5-slots-parallax');
    new Parallax(slotsParallax);

    // /* ScrollTrigger */
    const phoneFigure = document.querySelector('.E5-phone');
    const phoneScene = document.querySelector('.E5-phone-layer');
    const phoneBlock = document.querySelector('.E5-phone-block')
    const phoneCanvas = document.querySelector('.E5-phone-canvas');
    const phoneDock = document.querySelector('.E5-phone-dock');
    const phoneSosButton = document.querySelector('.E5-phone-buttons-sos');
    const phoneFmButton = document.querySelector('.E5-phone-buttons-fm');
    const phoneCallButton = document.querySelector('.E5-phone-buttons-call');
    const phoneIndicatorRed = document.querySelector('.E5-phone-indicators-red');
    const phoneIndicatorGreen = document.querySelector('.E5-phone-indicators-green');

    const animationSection = document.querySelector('.E5-animation');
    const screenSection = document.querySelector('.E5-screen');
    const screenBgLayers = document.querySelectorAll('.E5-screen-bg-layer');
    
    const dockSection = document.querySelector('.E5-dock');
    const dockTitle = document.querySelector('.E5-dock-title');
    const dockSubtitle = document.querySelector('.E5-dock-subtitle');
    const dockSketch = document.querySelector('.E5-dock-sketch');
    
    const sosSection = document.querySelector('.E5-sos');
    const sosTitle = document.querySelector('.E5-sos-title');
    const sosSubtitle = document.querySelector('.E5-sos-subtitle');
    
    const fmSection = document.querySelector('.E5-fm');
    const fmTilte = document.querySelector('.E5-fm-title');
    const fmSubtitle = document.querySelector('.E5-fm-subtitle');
    
    const callSection = document.querySelector('.E5-call');
    const callTilte = document.querySelector('.E5-call-title');
    const callSubtitle = document.querySelector('.E5-call-subtitle');
    
    const indicatorSection = document.querySelector('.E5-indicator');
    const indicatorTitle = document.querySelector('.E5-indicator-title');
    const indicatorSubtitle = document.querySelector('.E5-indicator-subtitle');

    const materialSection = document.querySelector('.E5-material');
    const materialTitle = document.querySelector('.E5-material-title');
    const materialSubtitle = document.querySelector('.E5-material-subtitle');

    const connectorSection = document.querySelector('.E5-connector');
    
    const sosBg = document.querySelector('.E5-sos-bg');

    
    const phoneFrameCounts = 36;
    const phoneImageUlrs = new Array(phoneFrameCounts).fill().map((o, i) => `./files/images/phone/animation/E5-screen-animation-${(i+1).toString().padStart(4, '0')}.png`);

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, ({conditions}) => {
        const {isPhone} = conditions;

        const triggerSections = [
            screenSection, 
            dockSection, 
            sosSection, 
            fmSection, 
            callSection, 
            indicatorSection, 
            materialSection,
        ];

        const triggerSectionsSnaps = triggerSections.map(section => {
            return section.offsetTop / (animationSection.scrollHeight - window.innerHeight / 2);
        });

        const animationTl = gsap.timeline({
            scrollTrigger: {
                trigger: animationSection,
                markers: false,
                start: '0% 0%',
                end: '100% 50%',
                snap: {
                    snapTo:  triggerSectionsSnaps,
                    duration: { min: 0.1, max: 0.8 }, 
                    delay: 0, 
                    ease: 'power1.inOut'
                },
                scrub: 0.1,
            },
        });

        const phoneTl = gsap.timeline({
            scrollTrigger: {
                trigger: animationSection,
                start: () => {
                    const startOffset = screenSection.offsetHeight;
                    return `${startOffset} 0`;
                },
                endTrigger: '.E5-indicator',
                pin: phoneFigure,
                pinSpacing: false,
                markers: false
            }
        })

        const phoneFlipTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenSection,
                markers: false,
                start: isPhone ? '50% 25%' : '50% 0',
                end: '100% 0',
                scrub: true, // important!
            },
        });

        phoneFlipTl
            .addLabel('start')
            .to(phoneScene, {
                y: () => {
                    if(isPhone) {
                        return;
                    }

                    const spacer = phoneFigure.closest('.pin-spacer');
                    const spacerOffset = parseInt(spacer.style.top);
                    const phoneFixedHeight = phoneFigure.offsetHeight - screenSection.offsetHeight + spacerOffset;
                    const windowHeight = window.innerHeight;
                    const differents = windowHeight - phoneFixedHeight;

                    if(differents < 0) {
                        return differents;
                    }
                }
            }, 'start')
            .to(phoneBlock, {
                duration: 3,
                y: () => {
                    return phoneScene.offsetHeight - phoneBlock.offsetHeight - (phoneDock.offsetHeight / 6);
                },
            }, 'start')
            .addLabel('end');

        imageSequence({
            urls: phoneImageUlrs, // Array of image URLs
            canvas: phoneCanvas, // <canvas> object to draw images to
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

        const screenTl = gsap.timeline({
            scrollTrigger: {
                trigger: screenSection,
                markers: false,
                start: '0 0',
                end: '100% 0',
                scrub: 1,
            },
        });

        screenTl
            .addLabel('start')
            .to(screenBgLayers[0], {
                xPercent: -5,
                yPercent: -5,
            }, 'start')
            .to(screenBgLayers[1], {
                yPercent: 5,
            }, 'start')
            .to(screenBgLayers[2], {
                yPercent: -5,
            }, 'start')
            .to(screenBgLayers[3], {
                yPercent: 5,
            }, 'start')
            .addLabel('end');

        const dockTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: dockSection,
                toggleActions: "play reverse play reverse",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        dockTl
            .addLabel('start')
            .fromTo(dockTitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(dockSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(dockSketch, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');

        const sosTypographyTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: sosSection,
                toggleActions: "play reverse restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        sosTypographyTl
            .addLabel('start')
            .fromTo(sosTitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0,
            }, 'start')
            .fromTo(sosSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0,
            }, 'start')
            .addLabel('end');

        const sosMediaTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: sosSection,
                toggleActions: "play reset restart reset",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        sosMediaTl
            .addLabel('start')
            .fromTo(phoneSosButton, {
                opacity: 0,
                scale: 1
            }, {
                opacity: 1,
                scale: 1.2,
                delay: 0.1,
            }, 'start')
            .to(phoneSosButton, {
                opacity: 0,
                scale: 1,
                delay: 0.3,
            })
            .addLabel('end');

        const sosBgTl = gsap.timeline({
            scrollTrigger: {
                trigger: sosSection,
                markers: false,
                end: isPhone ? '100% 650px' : '100% 100%',
                endTrigger: '.E5-indicator',
                pin: sosBg,
                pinSpacing: false,
            },
        });

        const fmTypographyTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: fmSection,
                toggleActions: "play reverse restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        fmTypographyTl
            .addLabel('start')
            .fromTo(fmTilte, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(fmSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');

        const fmMediaTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: fmSection,
                toggleActions: "play reset restart reset",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        fmMediaTl
            .addLabel('start')
            .fromTo(phoneFmButton, {
                opacity: 0,
                scale: 1
            }, {
                opacity: 1,
                scale: 1.2,
                delay: 0.1,
            }, 'start')
            .to(phoneFmButton, {
                opacity: 0,
                scale: 1,
                delay: 0.3,
            })
            .addLabel('end');

        const callTypographyTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: callSection,
                toggleActions: "play reverse restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        callTypographyTl
            .addLabel('start')
            .fromTo(callTilte, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(callSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');

        const callMediaTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: callSection,
                toggleActions: "play reset restart reset",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        callMediaTl
            .addLabel('start')
            .fromTo(phoneCallButton, {
                opacity: 0,
                scale: 1
            }, {
                opacity: 1,
                scale: 1.2,
                delay: 0.1,
            }, 'start')
            .to(phoneCallButton, {
                opacity: 0,
                scale: 1,
                delay: 0.3,
            })
            .addLabel('end');

        const indicatorTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: indicatorSection,
                toggleActions: "play reset restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        indicatorTl
            .addLabel('start')
            .fromTo(indicatorTitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(indicatorSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('inidication')
            .fromTo(phoneIndicatorRed, {
                opacity: 0,
            }, {
                opacity: 1,
                delay: 0.1,
            }, 'inidication')
            .to(phoneIndicatorRed, {
                opacity: 0,
                delay: 0.8,
            }, 'inidication')
            .fromTo(phoneIndicatorGreen, {
                opacity: 0,
            }, {
                opacity: 1,
                delay: 0.8
            }, 'inidication')
            .addLabel('end');

        const materialTl = gsap.timeline({
            defaults: {
                duration: 0.5,
                delay: 0,
            },
            scrollTrigger: {
                trigger: materialSection,
                toggleActions: "play reverse restart reverse",
                markers: false,
                start: () => {
                    return isPhone ? '50% 50%' : '25% 50%'
                },
            },
        });

        materialTl
            .addLabel('start')
            .fromTo(materialTitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .fromTo(materialSubtitle, {
                opacity: 0,
                x: isPhone ? -100 : 100,
            }, {
                opacity: 1,
                x: 0
            }, 'start')
            .addLabel('end');
    });
});
