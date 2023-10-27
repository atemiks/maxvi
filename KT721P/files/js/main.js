$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Pallet animation */
    const KT721pPalletSection = document.querySelector('.KT721P-pallet');
    const KT721pPalletFigure = KT721pPalletSection.querySelector('.KT721P-pallet-figure');
    const KT721pPalletFigureOptions = {
        loop: false,
        animate: false,
        frame: 1,
        stopFrame: 47,
        sizeMode: 'fit',
        responsive: true,
        source: SpriteSpin.sourceArray(
        './files/images/section-pallet/animation/KT721P-pallet-animation-920-{frame}.png',
        {
            frame: [1, 48],
            digits: 1
        }),
        plugins: [
            '360',
        ]
    };

    $(KT721pPalletFigure).spritespin(KT721pPalletFigureOptions);

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                $(entry.target).spritespin('api').startAnimation();
                return;
            }

            $(entry.target).spritespin('api').stopAnimation();
        },{
            rootMargin: '-50% 0px 0px 0px',
        });
    })

    observer.observe(KT721pPalletFigure);
});
