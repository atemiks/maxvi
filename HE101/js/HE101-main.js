$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: "top-bottom",
        });
    }, 100);

    const HE101IndicatiorAnimate = gsap.timeline({
        scrollTrigger: {
            trigger: ".HE101-indicator",
            startAnimation: "bottom bottom",
            start: "0",
            end: "50%",
            toggleActions: "restart none none none",
            scrub: 3,
        },
    });

    const HE101ModeAnimate = gsap.timeline({
        scrollTrigger: {
            trigger: ".HE101-mode",
            startAnimation: "bottom bottom",
            start: "0",
            end: "50%",
            toggleActions: "restart none none none",
            scrub: 3,
        },
    });

    HE101IndicatiorAnimate.to(".HE101-indicator .HE101-media-active", {
        opacity: 1,
    });

    HE101IndicatiorAnimate.to(".HE101-mode .HE101-media-active", {
        opacity: 1,
    });
});
