$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: "top-bottom",
        });
    }, 100);

    const HE111IndicatiorAnimate = gsap.timeline({
        scrollTrigger: {
            trigger: ".HE111-indicator",
            startAnimation: "bottom bottom",
            start: "0",
            end: "50%",
            toggleActions: "restart none none none",
            scrub: 3,
        },
    });

    const HE111ModeAnimate = gsap.timeline({
        scrollTrigger: {
            trigger: ".HE111-mode",
            startAnimation: "bottom bottom",
            start: "0",
            end: "50%",
            toggleActions: "restart none none none",
            scrub: 3,
        },
    });

    HE111IndicatiorAnimate.to(".HE111-indicator .HE111-media-active", {
        opacity: 1,
    });

    HE111IndicatiorAnimate.to(".HE111-mode .HE111-media-active", {
        opacity: 1,
    });
});
