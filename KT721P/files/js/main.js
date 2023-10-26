$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Sounds animation */
    const KT721PSpeakerSection = document.querySelector('.KT721P-speaker');
    const KT721PSpeakerSounds = KT721PSpeakerSection.querySelector('.KT721P-speaker-sounds');
    const KT721PSpeakerSoundsOptions = {
        animate: false,
        loop: true,
        frame: 0,
        sizeMode: 'fit',
        responsive: true,
        source: SpriteSpin.sourceArray(
        './files/images/section-speaker/sounds-resized-1000/01_000{frame}.png',
        {
            frame: [0, 90],
            digits: 1
        }),
        plugins: [
            '360',
        ]
    };

    $(KT721PSpeakerSounds).spritespin(KT721PSpeakerSoundsOptions);

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

    observer.observe(KT721PSpeakerSounds);
});
