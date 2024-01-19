$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const SW03ScreenFigure = document.querySelector('.SW03-screen-figure');
    new Parallax(SW03ScreenFigure);

    const SW03PedometerTitle = document.querySelector('.SW03-pedometer-title');
    new Parallax(SW03PedometerTitle);

    const SW03SyncSection = document.querySelector('.SW03-sync');
    new Parallax(SW03SyncSection, {
        limitY: 1
    });

    const SW03CaseFigure = document.querySelector('.SW03-case-figure');
    new Parallax(SW03CaseFigure);
});
