let headerSearchToggle = $('.header-search-toggle'),
    headerSearchContainer = $('.header-search-overlay'),
    headerSearchInput = $(headerSearchContainer).find('.header-search-input'),
    headerSearchSuggestionList = $(headerSearchContainer).find('.header-search-suggestion-list')
    headerSearchBg = $(headerSearchContainer).find('.header-search-backdrop');

function showSearch() {
    $(headerSearchContainer).addClass('show');
    $(headerSearchInput).focus();
}

function hideSearch() {
    $(headerSearchContainer).removeClass('show');
    $(headerSearchInput).blur();
}

$(headerSearchToggle).on('click', function() {
    showSearch();
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