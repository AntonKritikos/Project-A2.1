$('.header__link').click(function () {
    $("body, html").animate({
        scrollTop: $('.about').offset().top
    }, 500);
    return false;
});

$('.about__link').click(function () {
    $("body, html").animate({
        scrollTop: $('.innovation').offset().top
    }, 500);
    return false;
});
