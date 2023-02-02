$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: "top-bottom",
        });
    }, 100);

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE211-indicator",
            toggleActions: "restart none none none",
            start: "50% 100%",
            end: "75% 50%",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE211-indicator .HE211-media-active", {
        opacity: 1,
    });

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE211-mode",
            start: "25% 100%",
            end: "75% 50%",
            toggleActions: "restart none none none",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE211-mode .HE211-media-active", {
        opacity: 1,
    });
});
