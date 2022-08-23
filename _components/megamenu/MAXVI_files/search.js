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

$(headerSearchToggle).on('click', function () {
    if ($(headerSearchToggle).hasClass('active')) {
        hideSearch();
    } else {
        showSearch();
    }
});

$(headerSearchBg).on('click', function () {
    hideSearch();
});

// $(headerSearchInput).on('input', function (e) {
//     if(headerSearchInput[0].value.length == 0) {
//         $(headerSearchSuggestionList).removeClass('show');
//     }
//
//     if(headerSearchInput[0].value.length >= 1) {
//         $(headerSearchSuggestionList).addClass('show');
//     }
// });
//

var delay = 200;
var topSearchTimer = null;

$(headerSearchInput).bind("input", function () {
    var val = this.value;
    if (this.value.length >= 2) {

        if (topSearchTimer) {
            clearTimeout(topSearchTimer);
        }

        topSearchTimer = setTimeout(function () {
            $.ajax({
                type: 'post',
                url: "/api/v1/",
                contentType: "application/json; charset=utf-8",
                data: JSON.stringify({'action': 'search', 'q': val}),
                response: 'json',
                success: function (data) {
                    if (data.success) {
                        var result = '';


                        if (data.sections.length) {
                            result += '<li class="header-search-suggestion-item">' +
                                '<div class="header-search-suggestion-category">' +
                                '<div class="header-search-suggestion-category-title">Открыть раздел</div>';
                            data.sections.forEach(function (item) {
                                result += '<a href="' +
                                    item.url +
                                    '" class="header-search-suggestion-link">';
                                if(item.icon){
                                    result +='<span class="header-search-suggestion-thumbnail">' +
                                        item.icon +
                                        '</span>';
                                }
                                result += item.title +
                                    '</a>';
                            });

                            result += '</div>' +
                                '</li>';
                        }

                        data.elements.forEach(function (item) {
                            result += '<li class="header-search-suggestion-item">' +
                                '<a href="' +
                                item.url +
                                '" class="header-search-suggestion-link">' +
                                item.title +
                                '</a>' +
                                '</li>';
                        });

                        $('.header-search-suggestion-list').html(result);
                        $(headerSearchSuggestionList).addClass('show');
                    } else {
                        $(headerSearchSuggestionList).removeClass('show');
                    }
                }
            })
        }, delay);
    } else {
        $(headerSearchSuggestionList).removeClass('show');
    }
});