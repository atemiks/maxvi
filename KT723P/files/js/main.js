document.addEventListener('DOMContentLoaded', () => {
  const headerHeight = 68;
  const introSection = document.querySelector('.KT723P-intro');
  const introFigure = document.querySelector('.KT723P-intro-figure');

  const powerSection = document.querySelector('.KT723P-power');
  const powerBg = document.querySelector('.KT723P-power-bg');
  const powerTitle = document.querySelector('.KT723P-power-title');
  const powerValue = document.querySelector('.KT723P-power-value');

  const levelsSection = document.querySelector('.KT723P-levels');
  const levelsScene = document.querySelector('.KT723P-levels-scene');
  const levelsFigure = document.querySelector('.KT723P-levels-figure');
  const levelsBlock = document.querySelector('.KT723P-levels-block');

  const poweroffSection = document.querySelector('.KT723P-poweroff');
  const poweroffFigure = document.querySelector('.KT723P-poweroff-figure');
  const poweroffBlock = document.querySelector('.KT723P-poweroff-block');

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

    introTl
      .add('start')
      .to(powerBg, {
        opacity: 1,
        delay: 7,
        duration: 2.5,
      })
      .add('end');

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
        pin: true,
        pinSpacing: false,
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
      .to(levelsScene, {
        delay: 2,
        duration: 3,
        x: () => {
          return poweroffFigure.offsetParent.offsetLeft;
        },
      }, 'start')
      .to(levelsBlock, {
        delay: 2,
        duration: 3,
        xPercent: () => {
          return 50;
        },
      }, 'start')
      .to(levelsFigure, {
        delay: 1,
        duration: 4,
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
      .fromTo(poweroffBlock, {
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
