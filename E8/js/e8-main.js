$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax intro scene
    let e8IntroScene = $('#e8-intro-parallax').get(0);
    let e8IntroParallaxInstance = new Parallax(e8IntroScene);

    // parallax screen scene
    let e8ScreenScene = $('#e8-screen-parallax').get(0);
    let e8ScreenParallaxInstance = new Parallax(e8ScreenScene);
});
