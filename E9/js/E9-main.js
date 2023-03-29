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

    // E9 indication animation
    const E9Indication = document.querySelector('.E9-indication');
    const E9IndicationBlocks = E9Indication.querySelectorAll('.E9-indication-block');
    let E9IndicationIndexBlock = 0;
    let E9IndicationIsIntersecting = false;

    const E9IndicationBlocksAnimation = () => {
        if(E9IndicationIsIntersecting) {
            E9IndicationBlocks[E9IndicationIndexBlock].classList.remove('active');
            E9IndicationIndexBlock++;
            
            if(E9IndicationIndexBlock > E9IndicationBlocks.length - 1) {
                E9IndicationIndexBlock = 0;
            }

            E9IndicationBlocks[E9IndicationIndexBlock].classList.add('active');
            
            setTimeout(E9IndicationBlocksAnimation, 1800);
        }
    }

    const E9IndicationObserver = new IntersectionObserver((entries, observe) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                E9IndicationIsIntersecting = true;
                setTimeout(E9IndicationBlocksAnimation, 1800)
            } else {
                E9IndicationIsIntersecting = false;
            }
        });
    }, {
        rootMargin: '0% 0% 0%',
    });

    E9IndicationObserver.observe(E9Indication);
});
