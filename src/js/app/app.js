$('.header__link').click(function () {
    $("body, html").animate({
        scrollTop: $('.about').offset().top
    }, 500);
    return false;
});

