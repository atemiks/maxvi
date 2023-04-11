$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);
    
    const KE1821SErgonomicsAnimationBlock = document.querySelector('#KE1821S-ergonomics-animation');
    const KE1821SErgonomicsAnimationOptions = {
        animate: false,
        loop: false,
        frame: 0,
        stopFrame: 30,
        sense: -1,
        source: SpriteSpin.sourceArray(
        './images/section-ergonomics/animation/KE1821S-ergonomics-media-0_{frame}.png',
        {
            frame: [0, 30],
            digits: 1
        }),
    }

    $(KE1821SErgonomicsAnimationBlock).spritespin(KE1821SErgonomicsAnimationOptions)

    const KE1821SStandAnimationBlock = document.querySelector('#KE1821S-stand-animation');
    const KE1821SStandAnimationOptions = {
        animate: false,
        loop: true,
        frame: 0,
        sense: -1,
        source: SpriteSpin.sourceArray(
        './images/section-stand/animation/KE1821S-stand-media-0_{frame}.png',
        {
            frame: [0, 59],
            digits: 1
        }),
        plugins: [
            '360',
            'drag'
        ]
    }

    $(KE1821SStandAnimationBlock).spritespin(KE1821SStandAnimationOptions);

    KE1821SStandAnimationBlock.addEventListener('mouseleave', (event) => {
        const target = event.target.closest('#KE1821S-stand-animation');
        $(target).spritespin('api').startAnimation();
    });

    KE1821SStandAnimationBlock.addEventListener('touchend', (event) => {
        const target = event.target.closest('#KE1821S-stand-animation');
        $(target).spritespin('api').startAnimation();
    });


    const bootSpriteSpin = (selector, options) => {
        const observer = new IntersectionObserver((entries, observe) => {
            entries.forEach((entry) => {
                if(entry.isIntersecting) {
                    $(entry.target).spritespin('api').startAnimation();
                } else {
                    $(entry.target).spritespin('api').stopAnimation();
                }
            });
        }, {
            threshold: 0.5,
        });

        observer.observe(selector);
    }

    bootSpriteSpin(KE1821SErgonomicsAnimationBlock, KE1821SErgonomicsAnimationOptions);
    bootSpriteSpin(KE1821SStandAnimationBlock, KE1821SStandAnimationOptions);
});
