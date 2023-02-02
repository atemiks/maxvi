$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: "top-bottom",
        });
    }, 100);

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE201-power",
            toggleActions: "restart none none none",
            start: "50% 100%",
            end: "75% 50%",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE201-power .HE201-media-active", {
        opacity: 1,
    });

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE201-indicator",
            toggleActions: "restart none none none",
            start: "50% 100%",
            end: "75% 50%",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE201-indicator .HE201-media-active", {
        opacity: 1,
    });

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE201-mode",
            start: "25% 100%",
            end: "75% 50%",
            toggleActions: "restart none none none",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE201-mode .HE201-media-active", {
        opacity: 1,
    });
});
