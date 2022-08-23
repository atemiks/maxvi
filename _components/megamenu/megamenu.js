let megamenuToggle = $( ".header-megamenu-toggle" ),
    megamenuContainer = $( ".megamenu-wrapper" ),
    megamenuNavContainer = $('.megamenu-nav-list'),
    megamenuNavChildren = $(megamenuNavContainer).find('.megamenu-nav-item'),
    activeSubnavContainer = undefined;

function openMegamenu() {
    $(megamenuToggle).addClass('active');
    $(megamenuContainer).addClass('open');
}

function closeMegamenu() {
    $(megamenuToggle).removeClass('active');
    $(megamenuContainer).removeClass('open');
}


function setMegamenuHeight(height) {
    $(".megamenu-nav-list").css("min-height", height);
}


$(megamenuToggle).on('click', function() {
    $(this).hasClass('active') ? closeMegamenu() : openMegamenu();
});

$(document).on('click', function(e) {
    if ( !megamenuToggle.is(e.target) && megamenuToggle.has(e.target).length === 0 && !megamenuNavContainer.is(e.target) && megamenuNavContainer.has(e.target).length === 0 ) {
        closeMegamenu();
    }
});

$('.megamenu-nav-item').hover(
    function () {
        let target = $(this);
        
        $(megamenuNavChildren).each(function(index) {
            $(megamenuNavChildren[index]).removeClass('active');
        });

        $(target).addClass('active');
        activeSubnavContainer = $(target).find($('.megamenu-subnav-wrapper'));
        setMegamenuHeight(activeSubnavContainer.outerHeight());
    }
);

$('.megamenu-subnav-toggle').on('click', function() {
    let target = $(this);

    $(target).toggleClass('active');
    $(target).next().slideToggle('fast', function() {
        setMegamenuHeight(activeSubnavContainer.outerHeight());
    });
})