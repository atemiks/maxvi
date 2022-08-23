let headerSearchToggle = $('.header-search-toggle'),
    headerSearchContainer = $('.header-search-overlay'),
    headerSearchInput = $(headerSearchContainer).find('.header-search-input'),
    headerSearchSuggestionList = $(headerSearchContainer).find('.header-search-suggestion-list')
    headerSearchBg = $(headerSearchContainer).find('.header-search-backdrop'),
    headerNavigationToggle = $('.header-toggle');

function showSearch() {
    $(headerNavigationToggle).addClass('hide');
    $(headerSearchToggle).addClass('active');
    $(headerSearchContainer).addClass('show');
    $(headerSearchInput).focus();
}

function hideSearch() {
    $(headerNavigationToggle).removeClass('hide');
    $(headerSearchToggle).removeClass('active');
    $(headerSearchContainer).removeClass('show');
    $(headerSearchInput).blur();
}

$(headerSearchToggle).on('click', function() {
    if($(headerSearchToggle).hasClass('active')) {
        hideSearch();
    } else {
        showSearch();
    }
});

$(headerSearchBg).on('click', function() {
    hideSearch();
});

$(headerSearchInput).on('input', function (e) {
    if(headerSearchInput[0].value.length == 0) {
        $(headerSearchSuggestionList).removeClass('show');
    }
    
    if(headerSearchInput[0].value.length >= 1) {
        $(headerSearchSuggestionList).addClass('show');
    }
});