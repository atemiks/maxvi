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
    const KE1701PIntro = document.querySelector('.KE1701P-intro');
    const KE1701PIntroImages = document.querySelectorAll(
        '.KE1701P-intro .KE1701P-media-layers .KE1701P-media-layer'
    );
    const KE1701PIntroPaginationItems = document.querySelectorAll(
        '.KE1701P-intro .KE1701P-media-pagination .KE1701P-media-layer'
    );

    function isTouchDevice() {
        return (('ontouchstart' in window) ||
        (navigator.maxTouchPoints > 0) ||
        (navigator.msMaxTouchPoints > 0));
    }
    
    const KE1701PIntroInitDesktopAnimation = () => {
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
        });
    }

    const KE1701PIntroInitMobileAnimation = () => {
        let KE1701PIntroActiveIndex = 0;
        let KE1701PIntroTouchStart, KE1701PIntroTouchPrev = undefined;
        
        KE1701PIntro.addEventListener('touchstart', (e) => {
            KE1701PIntroTouchStart = KE1701PIntroTouchPrev = e.changedTouches[0].clientX;
        });

        KE1701PIntro.addEventListener('touchmove', (e) => {
            const pointerLocationX = e.changedTouches[0].clientX;
            
            // step in px
            if((Math.floor(pointerLocationX - KE1701PIntroTouchStart) % 1) == 0) {
                // swipe to right
                if(pointerLocationX > KE1701PIntroTouchPrev && KE1701PIntroActiveIndex !== KE1701PIntroImages.length - 1) {
                    KE1701PIntroActiveIndex++;
                    toggleActiveImages(
                        KE1701PIntroImages[KE1701PIntroActiveIndex],
                        KE1701PIntroActiveIndex,
                        KE1701PIntroImages
                    );
                }

                // swipe to left
                if(pointerLocationX < KE1701PIntroTouchPrev && KE1701PIntroActiveIndex !== 0) {
                    KE1701PIntroActiveIndex--;
                    toggleActiveImages(
                        KE1701PIntroImages[KE1701PIntroActiveIndex],
                        KE1701PIntroActiveIndex,
                        KE1701PIntroImages
                    );
                }

            }

            KE1701PIntroTouchPrev = pointerLocationX;
        });

        KE1701PIntro.addEventListener('touchend', (e) => {
            KE1701PIntroTouchStart = undefined;
        });
    }

    if(isTouchDevice()) {
        KE1701PIntroInitMobileAnimation();
    } else {
        KE1701PIntroInitDesktopAnimation();
    }

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
