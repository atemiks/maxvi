$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

     /* SpriteSpin animation */
     const dockSection = document.querySelector('.B6ds-dock');
     const dockFigure = dockSection.querySelector(
         '.B6ds-dock-animation'
     );
     const dockAnimationFirstFrame = 1;
     const dockAnimationLastFrame = 24;
     const dockAnimationOptions = {
         animate: false,
         loop: false,
         frame: dockAnimationFirstFrame,
         stopFrame: dockAnimationLastFrame,
         responsive: true,
         sizeMode: 'fill',
         sense: -1,
         source: SpriteSpin.sourceArray(
             './files/images/section-dock/animation/B6ds-dock-animation-media-{frame}.png',
             {
                 frame: [1, 25],
                 digits: 1,
             }
         ),
     };
 
     $(dockFigure).spritespin(dockAnimationOptions);
 
     const bootSpriteSpin = (selector) => {
         const observer = new IntersectionObserver(
             (entries) => {
                 entries.forEach((entry) => {
                     if (
                         entry.isIntersecting &&
                         entry.intersectionRatio >= 0.25
                     ) {
                         $(entry.target).spritespin('api').playTo(dockAnimationLastFrame);
                         return;
                     }
                     if (entry.intersectionRatio < 0.01) {
                         $(entry.target).spritespin('api').playTo(dockAnimationFirstFrame);
                         return;
                     }
                 });
             },
             {
                 threshold: [0, 0.5, 1],
             }
         );
 
         observer.observe(selector);
     };
 
     bootSpriteSpin(dockFigure);

    /* ScrollTrigger */
    const simSection = document.querySelector('.B6ds-sim');
    const simMedia = document.querySelector('.B6ds-sim-media');
    const simLayer1 = document.querySelector('.B6ds-sim-layer.layer-1');
    const simLayer2 = document.querySelector('.B6ds-sim-layer.layer-2');
    const mm = gsap.matchMedia();

    mm.add({
        isDesktop: '(min-width: 1200px)',
        isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
        isTablet: '(min-width: 768px) and (max-width: 991.98px)',
        isPhone: '(max-width: 767.98px)'
    }, () => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: simSection,
                markers: false,
                start: '25% 25%',
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
        .to(simMedia, {
            yPercent: 5,
        }, 'start')
        .to(simLayer1, {
            xPercent: -5,
            yPercent: -5,
        }, 'start')
        .to(simLayer2, {
            xPercent: 5,
            yPercent: -5,
        }, 'start')
        tl.addLabel('end');
    });
});
