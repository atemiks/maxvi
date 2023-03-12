$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const HD2201ModeScene = $('#HD2201-mode-parallax').get(0);
	const HD2201ModeInstance = new Parallax(HD2201ModeScene);
});
