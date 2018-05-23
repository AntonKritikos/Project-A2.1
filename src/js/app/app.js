$('.scroll-btn').click(function () {
    $("body, html").animate({
        scrollTop: $('#anchor').offset().top
    }, 500);
    return false;
});

