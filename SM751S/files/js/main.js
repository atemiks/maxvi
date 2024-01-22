$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const materialSection = document.querySelector('.SM751S-material');
    const sizeJuicerFigure = materialSection.querySelector('.SM751S-material-figure');

    const tl = gsap.timeline({
        scrollTrigger: {
          trigger: materialSection,
          markers: false,
          start: "0 50%",
          end: "50% 50%",
          scrub: 0.1,
          snap: {
            snapTo: "labels",
            duration: { min: 0.2, max: 1 },
            delay: 0.2,
            ease: "power1.inOut",
          },
        },
      });

      tl.addLabel("start")
        .to(sizeJuicerFigure, {rotate: '0deg'})
        .addLabel("end")
});
