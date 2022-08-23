$('.mobile-navigation-toggle').on('click', function() {
    $(this).toggleClass('active');
    $(this).next().slideToggle();
})