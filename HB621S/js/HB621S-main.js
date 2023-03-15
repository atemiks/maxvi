$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);


    // scroll animation
    const toggleActiveImages = (ctx, arrayOfImages) => {
        arrayOfImages.forEach((image, index) => {
            if(ctx !== index) {
                image.classList.remove('active');
            }
        })
    }

    const HB621SDesignImages = document.querySelectorAll('.HB621S-intro .HB621S-media-figure .HB621S-media-layer');
    
    HB621SDesignImages.forEach((image, index, array) => {
        gsap.to(image, {
            scrollTrigger: {
                trigger: '.HB621S-intro',
                start: `${index * 1.5 + 50}% 50%`, 
                end: '+=0 50%',
                scrub: true,
                markers: false,
                onEnter: () => {
                    image.classList.add('active');
                    toggleActiveImages(index, array);
                },
                onEnterBack: () => {
                    image.classList.add('active');
                    toggleActiveImages(index, array);
                },
            },
            opacity: '1',
            visibility: 'visible',
        });
    });

    // const interval = 1000;
    // const index = 0;

    // const HB621ModeImages = document.querySelectorAll('.HB621S-mode .HB621S-media-figure .HB621S-media-layer');
    // console.log(HB621ModeImages);
    
    // const HB621ModeAnimation = () => {
        
    // }

    gsap.timeline({
        scrollTrigger: {
            trigger: '.HB621S-equipment',
            toggleActions: 'restart none none none',
            start: '50% 100%',
            end: '100% 100%',
            scrub: 1,
            markers: false,
        },
    }).to('.HB621S-equipment .HB621S-media-scale', {
        height: '100%',
        onComplete: function() {
              this.targets()[0].classList.add('completed');
        },
        onReverseComplete() {
            this.targets()[0].classList.remove('completed');
        }
    });
});
