$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const KE1701PFilterScene = $('#KE1701P-filter-parallax').get(0);
    const KE1701PFilterInstance = new Parallax(KE1701PFilterScene);

    const toggleActiveImages = (image, index, arrayOfImages) => {
        image.classList.add('active');

        arrayOfImages.forEach((image, idx) => {
            if (index !== idx) {
                image.classList.remove('active');
            }
        });
    };

    // hover intro section animation
    const KE1701PIntroImages = document.querySelectorAll(
        '.KE1701P-intro .KE1701P-media-layers .KE1701P-media-layer'
    );
    const KE1701PIntroPaginationItems = document.querySelectorAll(
        '.KE1701P-intro .KE1701P-media-pagination .KE1701P-media-layer'
    );
    let KE1701PIntroActiveImage = undefined;

    KE1701PIntroPaginationItems.forEach((paginationItem, index) => {
        paginationItem.setAttribute('data-index', index);
        paginationItem.addEventListener('mouseover', (e) => {
            const currentIndex = Number(e.target.getAttribute('data-index'));
            toggleActiveImages(
                KE1701PIntroImages[currentIndex],
                currentIndex,
                KE1701PIntroImages
            );
        });
        paginationItem.addEventListener('touchmove', (e) => {
            const pointerLocation = e.changedTouches[0];
            const realTarget = document.elementFromPoint(
                pointerLocation.clientX,
                pointerLocation.clientY
            );

            if (realTarget !== KE1701PIntroActiveImage) {
                const realTargetIndex = Number(
                    realTarget.getAttribute('data-index')
                );
                KE1701PIntroActiveImage = realTarget;
                toggleActiveImages(
                    KE1701PIntroImages[realTargetIndex],
                    realTargetIndex,
                    KE1701PIntroImages
                );
            }
        });
    });

    // scroll design section animation
    const KE1701PDesignImages = document.querySelectorAll(
        '.KE1701P-design .KE1701P-media-figure .KE1701P-media-layer'
    );

    KE1701PDesignImages.forEach((image, index, array) => {
        gsap.to(image, {
            scrollTrigger: {
                trigger: '.KE1701P-design',
                start: `${index * 1.5 + 25}% 50%`,
                end: '+=0 50%',
                scrub: true,
                markers: false,
                onEnter: () => {
                    toggleActiveImages(image, index, array);
                },
                onEnterBack: () => {
                    toggleActiveImages(image, index, array);
                },
            },
            opacity: '1',
            visibility: 'visible',
        });
    });
});
