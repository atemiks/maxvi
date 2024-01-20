$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* ScrollTrigger */
    const sizeSection = document.querySelector('.SG401-size');
    const sizeJuicerCap = sizeSection.querySelector('.layer-cap');
    const sizeJuicerPress = sizeSection.querySelector('.layer-press');
    const sizeJuicerSieve = sizeSection.querySelector('.layer-sieve');
    const sizeJuicerBowl = sizeSection.querySelector('.layer-bowl');

    const tl = gsap.timeline({
        scrollTrigger: {
          trigger: sizeSection,
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
        .to(sizeJuicerCap, {y: 0})
        .to(sizeJuicerPress, {y: 0}, 'start')
        .to(sizeJuicerSieve, {y: 0}, 'start')
        .to(sizeJuicerBowl, {y: 0}, 'start')
        .addLabel("end")
});
