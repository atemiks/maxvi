$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax design scene
    let b32DesignScene = $('#b32-design-parallax').get(0);
    let b32DesignParallaxInstance = new Parallax(b32DesignScene);

    // parallax keyboard scene
    let b32KeyboardScene = $('#b32-keyboard-parallax').get(0);
    let b32KeyboardParallaxInstance = new Parallax(b32KeyboardScene);
});
