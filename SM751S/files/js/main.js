$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* SpriteSpin animation */
    const materialSection = document.querySelector('.SM751S-material');
    const materialFigure = materialSection.querySelector(
        '.SM751S-material-figure'
    );
    const materialAnimationFirstFrame = 1;
    const materialAnimationLastFrame = 30;
    const materialAnimationOptions = {
        animate: false,
        loop: false,
        frame: materialAnimationFirstFrame,
        stopFrame: materialAnimationLastFrame,
        sense: -1,
        source: SpriteSpin.sourceArray(
            './files/images/section-material/animation/SM751S-material-sandwichmaker-{frame}.png',
            {
                frame: [1, 31],
                digits: 1,
            }
        ),
    };

    $(materialFigure).spritespin(materialAnimationOptions);

    const bootSpriteSpin = (selector) => {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (
                        entry.isIntersecting &&
                        entry.intersectionRatio >= 0.25
                    ) {
                        $(entry.target).spritespin('api').playTo(materialAnimationLastFrame);
                        return;
                    }
                    if (entry.intersectionRatio < 0.01) {
                        $(entry.target).spritespin('api').playTo(materialAnimationFirstFrame);
                        return;
                    }
                });
            },
            {
                threshold: [0, 0.5, 1],
            }
        );

        observer.observe(selector);
    };

    bootSpriteSpin(materialFigure);
});
