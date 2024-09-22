document.addEventListener('DOMContentLoaded', () => {
  const headerHeight = 68;
  const landingContainer = document.querySelector('.KT723P-landing .container');
  const landingContainerWidth = landingContainer.offsetWidth;

  const introSection = document.querySelector('.KT723P-intro');
  const introFigure = document.querySelector('.KT723P-intro-figure');

  const powerSection = document.querySelector('.KT723P-power');
  const powerBg = document.querySelector('.KT723P-power-bg');
  const powerTitle = document.querySelector('.KT723P-power-title');
  const powerValue = document.querySelector('.KT723P-power-value');


  const presentationSection = document.querySelector('.KT723P-presentation');
  const presentationScene = document.querySelector('.KT723P-presentation-scene');
  const presentationMediaContainer = document.querySelector('.KT723P-presentation .KT723P-media-container');
  const presentationFigure = document.querySelector('.KT723P-presentation-figure');


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
    const screenHeight = window.innerHeight;

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
        delay: isPhone ? 7.5 : 8,
        duration: isPhone ? 2.5 : 2,
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

    const presentationTl = gsap.timeline({
      scrollTrigger: {
        trigger: presentationSection,
        pin: presentationScene,
        pinSpacing: true,
        markers: false,
        start: () => {
          return `0 ${headerHeight}`;
        },
        end: () => {
          return `100% ${screenHeight + headerHeight}`
        },
        endTrigger: presentationSection,
        scrub: 0.1,
        snap: {
          snapTo: 'labelsDirectional',
          duration: { min: 0.1, max: 0.8 },
          delay: 0,
          ease: 'power1.inOut'
        }
      },
    });

    presentationTl
      .addLabel('start')
      .to(presentationFigure, {
        delay: 2,
        duration: 3,
        x: () => {
          return isPhone ? 0 : landingContainerWidth / 2 - presentationFigure.offsetLeft;
        },
      }, 'start')
      .addLabel('end');

    const levelsTl = gsap.timeline({
      scrollTrigger: {
        trigger: levelsSection,
        pin: isPhone ? false : levelsSection,
        pinSpacing: false,
        markers: false,
        start: () => {
          return  `0 ${headerHeight}`;
        },
        end: () => {
          return `100% ${headerHeight}`;
        },
        scrub: 0.1,
      },
    });

    levelsTl
      .addLabel('start')
      .to(levelsBlock, {
        delay: 2,
        duration: 3,
        x: () => {
          return isPhone ? 0 : landingContainerWidth / 2 - presentationFigure.offsetLeft;
        },
      })
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
        x: isPhone ? 0 : -100,
        y: isPhone ? 100 : 0,
      }, {
        opacity: 1,
        x: 0,
        y: 0,
        duration: 0.5,
      }, 'start')
      .addLabel('end');

  });

  /* Animation */
  AOS.init({
    anchorPlacement: 'bottom-bottom',
  });
});
