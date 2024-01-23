$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* SpriteSpin animation */
    const materialSection = document.querySelector('.SM751S-material');
    const materialFigure = materialSection.querySelector('.SM751S-material-figure')
    const materialAnimationOptions = {
        animate: false,
        loop: false,
        frame: 1,
        stopFrame: 30,
        sense: -1,
        source: SpriteSpin.sourceArray(
        './files/images/section-material/animation/SM751S-material-sandwichmaker-{frame}.png',
        {
            frame: [1, 31],
            digits: 1
        }),
    }

    $(materialFigure).spritespin(materialAnimationOptions)


    const bootSpriteSpin = (selector) => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if(entry.isIntersecting) {
                    $(entry.target).spritespin('api').startAnimation();
                } else {
                    $(entry.target).spritespin('api').stopAnimation();
                    $(entry.target).spritespin('api');
                }
            });
        }, {
            threshold: 0.5,
        });

        observer.observe(selector);
    }

    bootSpriteSpin(materialFigure);
});
