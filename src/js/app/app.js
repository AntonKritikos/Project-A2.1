const $menu = $('.menu');

$('.scroll-btn').click(function () {
    $("body, html").animate({
        scrollTop: $('#anchor').offset().top
    }, 500);
    return false;
});


$menu.click(function () {
    if ($menu.hasClass('is-open')) {
        $(this).removeClass('is-open');
        $('.menu__logo').removeClass('menu__logo--white');
    } else {
        $(this).addClass('is-open');
        $('.menu__logo').addClass('menu__logo--white');
    }
});
