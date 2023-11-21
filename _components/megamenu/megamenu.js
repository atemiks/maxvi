const megamenuToggle = document.querySelector('.header-megamenu-toggle'),
    megamenuContainer = document.querySelector('.megamenu-wrapper'),
    megamenuNavContainer = document.querySelector('.megamenu-nav-list'),
    megamenuNavChildren =
        megamenuNavContainer.querySelectorAll('.megamenu-nav-item'),
    megamenuNavLinks =
        megamenuNavContainer.querySelectorAll('.megamenu-nav-link'),
    megamenuPaneContainers =
        megamenuContainer.querySelectorAll('.megamenu-tab-pane');

function openMegamenu() {
    megamenuToggle.classList.add('active');
    megamenuContainer.classList.add('open');
}

function closeMegamenu() {
    megamenuToggle.classList.remove('active');
    megamenuContainer.classList.remove('open');
}

megamenuToggle.addEventListener('click', ({ target }) => {
    target.classList.contains('active') ? closeMegamenu() : openMegamenu();
});

megamenuNavLinks.forEach((navLink) => {
    navLink.addEventListener('mouseover', ({ target }) => {
        const targetNavItem = target.closest('.megamenu-nav-item');
        const targetPane = target.getAttribute('aria-controls');
        const targetPaneEl = document.getElementById(targetPane);

        megamenuNavChildren.forEach((item) => {
            item.classList.remove('active');
        });
        megamenuPaneContainers.forEach((pane) => {
            pane.classList.remove('active');
        });

        if (targetPaneEl) {
            targetNavItem.classList.add('active');
            targetPaneEl.classList.add('active');
        }
    });
});

$('.megamenu-pane-toggle').on('click', function () {
    const target = $(this);

    $(target).toggleClass('active');
    $(target).next().slideToggle('fast');
});

document.addEventListener('click', ({ target }) => {
    const megamenuContentContainer =
        megamenuContainer.querySelector('.megamenu-inner');

    if (
        !megamenuToggle.contains(target) &&
        !megamenuContentContainer.contains(target)
    ) {
        closeMegamenu();
    }
});
