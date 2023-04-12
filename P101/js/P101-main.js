$(document).ready(function () {
    //animation
    setTimeout(function () {
        AOS.init({
            anchorPlacement: 'top-bottom',
        });
    }, 100);

    // parallax
    const P101BatteryScene = document.getElementById('P101-battery-parallax');
    const P101BatteryInstance = new Parallax(P101BatteryScene);
});
