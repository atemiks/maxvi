$(document).ready(function () {
    setTimeout(function () {}, 100);
});

document.addEventListener('DOMContentLoaded', () => {
    //animation
    AOS.init({
        anchorPlacement: 'top-bottom',
    });

    // parallax Fm scene
    new Parallax(document.getElementById('B100i-fm-parallax'));
});
