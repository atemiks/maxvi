$('.mobile-navigation-toggle').on('click', function() {
    $(this).toggleClass('active');
    $(this).next().slideToggle();
})

$('.mobile-subnav-toggle').on('click', function() {
    $(this).toggleClass('active');
    $(this).next().slideToggle();
})