$(document).ready(function () {
    /* Animation */
    AOS.init({
        anchorPlacement: 'bottom-bottom',
    });

    /* Parallax */
    const C30DesignSection = document.querySelector('.C30-design');
    const C30DesignFigure = C30DesignSection.querySelector('.C30-design-figure');
    new Parallax(C30DesignFigure);
});
