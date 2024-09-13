document.addEventListener('DOMContentLoaded', () => {
  const headerHeight = 68;
  const introSection = document.querySelector('.KT723P-intro');
  const introFigure = document.querySelector('.KT723P-intro-figure');

  const powerSection = document.querySelector('.KT723P-power');
  const powerTitle = document.querySelector('.KT723P-power-title');
  const powerValue = document.querySelector('.KT723P-power-value');

  const levelsSection = document.querySelector('.KT723P-levels');
  const levelsBg = document.querySelector('.KT723P-levels-bg');
  const levelsScene = document.querySelector('.KT723P-levels-scene');
  const levelsFigure = document.querySelector('.KT723P-levels-figure');
  const levelsTitle = document.querySelector('.KT723P-levels-title');
  const levelsSubTitle = document.querySelector('.KT723P-levels-subtitle');

  const poweroffSection = document.querySelector('.KT723P-poweroff');
  const poweroffFigure = document.querySelector('.KT723P-poweroff-figure');
  const poweroffTitle = document.querySelector('.KT723P-poweroff-title');
  const poweroffSubtitle = document.querySelector('.KT723P-poweroff-subtitle');

  const mm = gsap.matchMedia();

  mm.add({
    isDesktop: '(min-width: 1200px)',
    isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
    isTablet: '(min-width: 768px) and (max-width: 991.98px)',
    isPhone: '(max-width: 767.98px)'
  }, ({ conditions }) => {
    const { isPhone } = conditions;

    const introTl = gsap.timeline({
      scrollTrigger: {
        trigger: introSection,
        pin: introFigure,
        pinSpacing: false,
        markers: false,
        start: () => {
          return `0 ${headerHeight}`;
        },
        end: () => {
          return `100% ${headerHeight + introSection.offsetHeight}`;
        },
        endTrigger: powerSection,
        scrub: 0.1,
        snap: {
          snapTo: [0, 1],
          duration: { min: 0.1, max: 0.8 },
          delay: 0,
          ease: 'power1.inOut'
        }
      },
    });

    const powerTl = gsap.timeline({
      scrollTrigger: {
        trigger: powerSection,
        markers: false,
        start: () => {
          return `0 ${powerSection.offsetHeight / 3}`;
        },
        toggleActions: "play none none reverse",
      },
    });

    powerTl
      .addLabel('start')
      .fromTo(powerTitle, {
        opacity: 0,
        x: -100,
      }, {
        opacity: 1,
        x: 0,
      }, 'start')
      .fromTo(powerValue, {
        opacity: 0,
        x: -100,
      }, {
        opacity: 1,
        x: 0,
      }, 'start')
      .addLabel('end');

    const levelsTl = gsap.timeline({
      scrollTrigger: {
        trigger: levelsSection,
        markers: false,
        start: () => {
          return `0 ${headerHeight}`;
        },
        end: () => {
          return `100% ${headerHeight + levelsSection.offsetHeight}`;
        },
        endTrigger: poweroffSection,
        scrub: 0.1,
        snap: {
          snapTo: 'labelsDirectional',
          duration: { min: 0.1, max: 0.8 },
          delay: 0,
          ease: 'power1.inOut'
        }
      },
    });

    levelsTl
      .addLabel('start')
      .to(levelsBg, {
        scrollTrigger: {
          trigger: levelsSection,
          pin: levelsBg,
          pinSpacing: false,
          start: () => {
            return `0 ${headerHeight}`;
          },
          end: () => {
            return `100% ${headerHeight + levelsSection.offsetHeight}`;
          },
          endTrigger: poweroffSection,
          markers: false,
        },
        duration: 5,
      }, 'start')
      .to(levelsScene, {
        scrollTrigger: {
          trigger: levelsSection,
          pin: levelsScene,
          pinSpacing: false,
          start: () => {
            return `0 ${headerHeight}`;
          },
          end: () => {
            return `100% ${headerHeight + levelsSection.offsetHeight}`;
          },
          endTrigger: poweroffSection,
          markers: false,
        },
        delay: 1,
        duration: 4,
        x: () => {
          return isPhone ? 0 : poweroffFigure.offsetParent.offsetLeft;
        },
      }, 'start')
      .to(levelsTitle, {
        delay: 1,
        duration: 4,
        xPercent: () => {
          return isPhone ? 0: 50;
        },
        y: () => {
          return isPhone ? -115 : 0;
        }
      }, 'start')
      .to(levelsSubTitle, {
        delay: 1,
        duration: 4,
        y: () => {
          return isPhone ? -115 : 0;
        }
      }, 'start')
      .to(levelsFigure, {
        delay: 1,
        duration: 4,
        y: () => {
          return isPhone ? -115 : 0;
        }
      }, 'start')
      .addLabel('end');

    const poweroffTl = gsap.timeline({
      scrollTrigger: {
        trigger: poweroffSection,
        start: () => {
          return `0 ${poweroffSection.offsetHeight / 3}`
        },
        toggleActions: "play none none reverse",
        markers: false,
      }
    });

    poweroffTl
      .addLabel('start')
      .fromTo(poweroffTitle, {
        opacity: 0,
        x: -100,
      }, {
        opacity: 1,
        x: 0,
        duration: 0.5,
      }, 'start')
      .fromTo(poweroffSubtitle, {
        opacity: 0,
        x: -100,
      }, {
        opacity: 1,
        x: 0,
        duration: 0.5,
      }, 'start')
      .addLabel('end');

  });

  /* Animation */
  AOS.init({
    anchorPlacement: 'bottom-bottom',
  });
});
