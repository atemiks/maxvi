$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const E9IntroScene = document.getElementById('E9-intro-parallax');
    const E9IntroInstance = new Parallax(E9IntroScene);

    // E9 indication scroll animation
    const E9Indication = document.querySelector('.E9-indication');
    const E9IndicationBlocks = E9Indication.querySelectorAll('.E9-indication-block');

    const E9IndicationToggleActiveBlock = (block, blocks) => {
        blocks.forEach((block) => block.classList.remove('active'));
        block.classList.add('active')
    }

    E9IndicationBlocks.forEach((block, index, array) => {
        gsap.to(block, {
            scrollTrigger: {
                trigger: E9Indication,
                start: `${index * 5 + 50}% 50%`,
                end: '+=0 50%',
                scrub: true,
                markers: false,
                toggleClass: 'active',
                onEnter: () => {
                    E9IndicationToggleActiveBlock(block, array);
                },
                onLeaveBack: () => {
                    E9IndicationToggleActiveBlock(block, array);
                },
            }
        });
    });
});
