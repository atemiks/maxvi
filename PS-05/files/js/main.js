$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const PS05DesignSection = document.querySelector('.PS05-design');
    const PS05DesignFigure = PS05DesignSection.querySelector('.PS05-design-figure');
    new Parallax(PS05DesignFigure);
});
