$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: "top-bottom",
        });
    }, 100);

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE111-indicator",
            toggleActions: "restart none none none",
            start: "50% 100%",
            end: "75% 50%",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE111-indicator .HE111-media-active", {
        opacity: 1,
    });

    gsap.timeline({
        scrollTrigger: {
            trigger: ".HE111-mode",
            start: "25% 100%",
            end: "50% 50%",
            toggleActions: "restart none none none",
            scrub: 3,
            // markers: true,
        },
    }).to(".HE111-mode .HE111-media-active", {
        opacity: 1,
    });
});
