document.addEventListener('DOMContentLoaded', () => {
  const body = document.querySelector('body');
  const landing = document.querySelector('.KE2021S-landing');

  /* Animation */
  AOS.init({
    anchorPlacement: 'bottom-bottom',
  });

  function imageSequence(config) {
    let playhead = { frame: 0 },
      canvas = config.canvas || console.warn("canvas not defined"),
      ctx = canvas.getContext("2d"),
      curFrame = -1,
      onUpdate = config.onUpdate,
      images,
      timeline = config.timeline,
      updateImage = function () {
        let frame = Math.round(playhead.frame);
        if (frame !== curFrame) { // only draw if necessary
          config.clear && ctx.clearRect(0, 0, canvas.width, canvas.height);
          ctx.drawImage(images[Math.round(playhead.frame)], 0, 0, canvas.width, canvas.height);
          curFrame = frame;
          onUpdate && onUpdate.call(this, frame, images[frame]);
        }
      };

    images = config.urls.map((url, i) => {
      const img = new Image();
      img.src = url;
      i || (img.onload = updateImage);
      return img;
    });

    return timeline.to(playhead, {
      frame: images.length - 1,
      ease: "none",
      onUpdate: updateImage,
      duration: images.length / (config.fps || 30),
      paused: !!config.paused,
    }, 'start');
  }

  /* capacity */
  const capacitySection = document.querySelector('.KE2021S-capacity');
  const capacityCanvas = document.querySelector('.KE2021S-capacity-canvas');
  const capacityFrameCount = 31;
  const capacityFrameURLs = new Array(capacityFrameCount).fill().map((o, i) => {
    return `./files/images/section-capacity/animation/K2021S-capacity-animation-${(i+1).toString().padStart(4, '0')}.png`
  });

  /* presentation */
  const presentationSection = document.querySelector('.KE2021S-presentation');
  const presentationScene = document.querySelector('.KE2021S-presentation-scene');
  const presentationSteam = document.querySelector('.KE2021S-presentation-steam');

  const handlePresentationSteam = () => {
    const handleEndedVideo = () => {
      presentationSection.removeAttribute('data-animation');
    }

    const presentationSteamPlay = () => {
      presentationSteam.addEventListener("ended", handleEndedVideo);
      presentationSteam.play();
    }

    const presentationSteamStop = () => {
      presentationSteam.removeEventListener("ended", handleEndedVideo);
      presentationSteam.pause();
      setTimeout(() => {
        presentationSteam.currentTime = 0;
      }, 300);
    }

    return {
      presentationSteamPlay,
      presentationSteamStop
    }
  }

  const {presentationSteamPlay, presentationSteamStop} = handlePresentationSteam();

  const powerSection = document.querySelector('.KE2021S-power');
  const powerBlock = document.querySelector('.KE2021S-power-block');

  const indicatorSection = document.querySelector('.KE2021S-indicator');
  const indicatorBlock = document.querySelector('.KE2021S-indicator-block');

  const poweroffSection = document.querySelector('.KE2021S-poweroff');
  const poweroffBlock = document.querySelector('.KE2021S-poweroff-block');


  const mm = gsap.matchMedia();

  // https://gsap.com/docs/v3/Plugins/ScrollTrigger/?page=1#containerAnimation
  mm.add({
    isDesktop: '(min-width: 1200px)',
    isLaptop: '(min-width: 992px) and (max-width: 1199.98px)',
    isTablet: '(min-width: 768px) and (max-width: 991.98px)',
    isPhone: '(max-width: 767.98px)'
  }, ({ conditions }) => {
    const { isPhone } = conditions;
    const screenWidth = body.offsetWidth;
    const landingWidth = landing.offsetWidth;
    const scrollerXOffset = (screenWidth - landingWidth) / 2;
    const presentationPanels = [powerSection, indicatorSection, poweroffSection];

    const capacityTl = gsap.timeline({
      scrollTrigger: {
        trigger: capacitySection,
        markers: false,
        start: () => {
          return isPhone ? '-25% 0' : '-50% 0';
        },
        end: '100% 0',
        toggleActions: "play reverse play reverse",
      },
    });

    imageSequence({
      urls: capacityFrameURLs,
      canvas: capacityCanvas,
      clear: true,
      timeline: capacityTl,
    });

    const presentationTl = gsap.timeline({
      scrollTrigger: {
        trigger: presentationScene,
        pin: true,
        scrub: 0.1,
        markers: false,
        pinSpacing: false,
      }
    });

    presentationTl
      .addLabel('start')
      .to(presentationPanels, {
        xPercent: -100 * (presentationPanels.length - 1),
        ease: "none" // IMPORTANT
      })
      .addLabel('end');

    const powerTl = gsap.timeline({
      scrollTrigger: {
        trigger: powerSection,
        containerAnimation: presentationTl,
        start: () => {
          return `0 ${scrollerXOffset}`;
        },
        end: '100% 50%',
        toggleActions: "none play reverse none",
        markers: false,
        onEnter: () => {
          presentationSection.setAttribute('data-animation', 'power');
        },
        onEnterBack: () => {
          presentationSection.setAttribute('data-animation', 'power');
        },
        onLeaveBack: () => {
          presentationSection.removeAttribute('data-animation');
        }
      },
    });

    powerTl
      .addLabel('start')
      .to(powerBlock, {
        opacity: 0,
        duration: 0.4,
      }, 'start')
      .addLabel('end');

    const indicatorTl = gsap.timeline({
      scrollTrigger: {
        trigger: indicatorSection,
        containerAnimation: presentationTl,
        start: "0 50%",
        end: '100% 50%',
        toggleActions: "play reverse play reverse",
        markers: false,
        onEnter: () => {
          presentationSection.setAttribute('data-animation', 'indicator');
        },
        onEnterBack: () => {
          presentationSection.setAttribute('data-animation', 'indicator');
        },
      }
    });

    indicatorTl
      .addLabel('start')
      .fromTo(indicatorBlock, {
        opacity: 0,
      }, {
        opacity: 1,
        duration: 0.4,
      }, 'start')
      .addLabel('end');

    const poweroffTl = gsap.timeline({
      scrollTrigger: {
        trigger: poweroffSection,
        containerAnimation: presentationTl,
        start: "0 50%",
        end: '100% 50%',
        toggleActions: "play reverse play reverse",
        markers: false,
        onEnter: () => {
          presentationSection.setAttribute('data-animation', 'poweroff');
          presentationSteamPlay();
        },
        onEnterBack: () => {
          presentationSection.setAttribute('data-animation', 'poweroff');
          presentationSteamPlay();
        },
        onLeaveBack: () => {
          presentationSteamStop();
        }
      }
    });

    poweroffTl
      .addLabel('start')
      .fromTo(poweroffBlock, {
        opacity: 0,
      }, {
        opacity: 1,
        duration: 0.4,
      }, 'start')
      .addLabel('end');
  });
});
