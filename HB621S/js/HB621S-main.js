$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const HB621SNozzleScene = $('#HB621S-nozzle-parallax').get(0);
	const HB621SNozzleInstance = new Parallax(HB621SNozzleScene);

    /* scroll animations */ 
    const toggleActiveImages = (image, index, arrayOfImages) => {
        image.classList.add('active');
        arrayOfImages.forEach((image, idx) => {
            if(index !== idx) {
                image.classList.remove('active');
            }
        })
    }

    // scroll design section animation
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

    // scroll mode section animation
    let HB621ModeImageIndex = 0;
    let HB621ModeIsIntersecting = false;
    const HB621ModeSection = document.querySelector('.HB621S-mode');
    const HB621ModeImages = document.querySelectorAll('.HB621S-mode .HB621S-media-figure .HB621S-media-layer');
    
    const HB621ModeAnimation = () => {
        if(HB621ModeIsIntersecting) {
            HB621ModeImageIndex++;
            if(HB621ModeImageIndex > HB621ModeImages.length - 1) {
                HB621ModeImageIndex = 0;
            }
            
            HB621ModeImages.forEach((image, _, array) => {
                toggleActiveImages(image, HB621ModeImageIndex, array);
            });
    
            setTimeout(HB621ModeAnimation, 100);
        }
    }

    const HB621ModeObserver = new IntersectionObserver((entries, observe) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                HB621ModeIsIntersecting = true;
                HB621ModeAnimation();
            } else {
                HB621ModeIsIntersecting = false;
            }
        });
    }, {
        rootMargin: '25% 0px -75%',
    });

    HB621ModeObserver.observe(HB621ModeSection);
    

    // scroll equipment section animation
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
