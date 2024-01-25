$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Typing animation */
    const typingAnimation = () => {
        const blocks = document.querySelectorAll('[data-typing-animation]');
        console.log('blocks', blocks);

        const typingAnimationObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) =>{
                if(entry.isIntersecting && !entry.target.hasAttribute('data-typing-animation-started')) {
                    const typingAnimationBlock = entry.target;
                    const typingAnimationText = typingAnimationBlock.getAttribute('data-typing-animation-text');
                    const typingAnimationTextLength = typingAnimationText.length;
                    const typingAnimationDelay = Number(typingAnimationBlock.getAttribute('data-typing-animation-delay')) || 0;
                    const typingAnimationSpeed = Number(typingAnimationBlock.getAttribute('data-typing-animation-speed')) || 50;
                    
                    let typingAnimationCursonPosition = 0;
                    
                    const typing = () => {
                        if(typingAnimationCursonPosition < typingAnimationTextLength) {
                            typingAnimationBlock.innerHTML += typingAnimationText.charAt(typingAnimationCursonPosition);
                            typingAnimationCursonPosition++;
                            setTimeout(typing, typingAnimationSpeed);
                            return;
                        }
                        
                        typingAnimationCursonPosition = 0;
                        typingAnimationBlock.removeAttribute('data-typing-animation-started');
                    }

                    typingAnimationBlock.setAttribute('data-typing-animation-started', 'true');
                    typingAnimationBlock.innerHTML = '';
                    setTimeout(typing, typingAnimationDelay);
                }
            });
        });

        blocks.forEach((block) => {
            block.setAttribute('data-typing-animation-text', block.textContent.trim());
            typingAnimationObserver.observe(block);
        });
    }

    typingAnimation();


    /* Parallax */
    const introParallax = document.querySelector('.GSP01-intro-clouds');
    new Parallax(introParallax);

    const kitParallax = document.querySelector('.GSP01-kit-clouds');
    new Parallax(kitParallax);

    const kitIslandsParallax = document.querySelector('.GSP01-kit-islands');
    new Parallax(kitIslandsParallax);

    /* Intro */
    const handleIntroStart = () => {
        const handleButton = document.querySelector('.GSP01-intro-cta');

        handleButton.addEventListener('click', () => {
            const handleTarget = handleButton.getAttribute('data-target');
            const targetElement = document.querySelector(handleTarget);
    
            if(targetElement) {
                const targetElementOffset = targetElement.offsetTop;
                const header = document.querySelector('.header-box');
                let headerHeight = 0;
                
                if(header) {
                    headerHeight = header.clientHeight;
                }
                
                window.scrollTo({
                    top: targetElementOffset - headerHeight,
                    behavior: 'smooth',
                });
            }
        });
    }

    handleIntroStart();

});
