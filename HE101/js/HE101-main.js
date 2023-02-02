$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: "top-bottom",
        });
    }, 100);

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE101-indicator",
            toggleActions: "restart none none none",
            start: "25% 100%",
            end: "75% 0",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE101-indicator .HE101-media-active", {
        opacity: 1,
    });

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE101-mode",
            start: "25% 100%",
            end: "50% 50%",
            toggleActions: "restart none none none",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE101-mode .HE101-media-active", {
        opacity: 1,
    });
});
