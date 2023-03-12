$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const HD2001IntroScene = $('#HD2001-intro-parallax').get(0);
	const HD2001IntroInstance = new Parallax(HD2001IntroScene);

    const HD2001FreezeScene = $('#HD2001-freeze-parallax').get(0);
	const HD2001FreezeInstance = new Parallax(HD2001FreezeScene);
});
