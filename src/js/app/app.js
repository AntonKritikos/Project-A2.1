$('.header__link').click(function () {
    $("body, html").animate({
        scrollTop: $('.innovation').offset().top
    }, 500);
    return false;
});

