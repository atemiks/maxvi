$(document).ready(function () {
    const isTabletOrDesktop = window.matchMedia('(min-width: 768px)').matches;

    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Sounds animation */
    const P110SpeakerSection = document.querySelector('.P110-speaker');
    const P110SpeakerSounds = P110SpeakerSection.querySelector('.P110-speaker-sounds');
    const P110SpeakerSoundsOptions = {
        animate: false,
        loop: true,
        frame: 0,
        sizeMode: 'fit',
        responsive: true,
        source: SpriteSpin.sourceArray(
        './files/images/section-speaker/animation/orig_0000{frame}.png',
        {
            frame: [1, 9],
            digits: 1
        }),
        plugins: [
            '360',
        ]
    };

    if(isTabletOrDesktop) {
        $(P110SpeakerSounds).spritespin(P110SpeakerSoundsOptions);

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if(entry.isIntersecting) {
                    $(entry.target).spritespin('api').startAnimation();
                    return;
                }
    
                $(entry.target).spritespin('api').stopAnimation();
            }, {
                threshold: 0.5,
            });
        })
    
        observer.observe(P110SpeakerSounds);
    }
});
