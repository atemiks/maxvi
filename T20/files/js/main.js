$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const batteryFigure = document.querySelector('.T20-battery-parallax');
    new Parallax(batteryFigure);
});
