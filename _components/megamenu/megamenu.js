let megamenuToggle = $( ".header-megamenu-toggle" ),
    megamenuContainer = $( ".megamenu-wrapper" ),
    megamenuNavContainer = $('.megamenu-nav-list');

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
    if ( !megamenuToggle.is(e.target) && megamenuToggle.has(e.target).length === 0 && !megamenuNavContainer.is(e.target) && megamenuNavContainer.has(e.target).length === 0 ) {
        closeMegamenu();
    }
});

$('.megamenu-nav-item.has-children').hover(
    function () {
        let megamenuSubnavContainer = $(this).find($('.megamenu-subnav-wrapper'));

        $(this).parent(".megamenu-nav-list").css("min-height", megamenuSubnavContainer.outerHeight());
        $(megamenuSubnavContainer).toggleClass('open');
    },
    function () {
        let megamenuSubnavContainer = $(this).find($('.megamenu-subnav-wrapper'));
        $(megamenuSubnavContainer).toggleClass('open');
    }
);