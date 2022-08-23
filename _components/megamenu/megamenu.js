let megamenuToggle = $( ".header-megamenu-toggle" ),
    megamenuContainer = $( ".megamenu-wrapper" ),
    megamenuNavContainer = $('.megamenu-nav-list'),
    megamenuNavChildren = $(megamenuNavContainer).find('.megamenu-nav-item'),
    megamenuPaneContainers = $(megamenuContainer).find('.megamenu-tab-pane');

    console.log(megamenuPaneContainers);

function openMegamenu() {
    $(megamenuToggle).addClass('active');
    $(megamenuContainer).addClass('open');
}

function closeMegamenu() {
    $(megamenuToggle).removeClass('active');
    $(megamenuContainer).removeClass('open');
}



$(megamenuToggle).on('click', function() {
    $(this).hasClass('active') ? closeMegamenu() : openMegamenu();
});

$(document).on('click', function(e) {
    let megamenuContentContainer = $(megamenuContainer).find('.megamenu-inner');

    if ( !megamenuToggle.is(e.target) && megamenuToggle.has(e.target).length === 0 && !megamenuContentContainer.is(e.target) && megamenuContentContainer.has(e.target).length === 0 ) {
        closeMegamenu();
    }
});


$('.megamenu-nav-list .megamenu-nav-link').hover(function(e) {
    let target = $(this);

    if(!($(target)[0].hasAttribute('data-toggle'))) {
        $(megamenuNavChildren).removeClass('active');
        $(megamenuPaneContainers).removeClass('active');
    } else {
        $(target).tab('show');
    }
});


$('.megamenu-pane-toggle').on('click', function() {
    let target = $(this);

    $(target).toggleClass('active');
    $(target).next().slideToggle('fast');
})