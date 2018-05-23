const $menu = $('.menu');
$menu.click(function () {
    if ($menu.hasClass('is-open')) {
        $(this).removeClass('is-open');
        $('.menu__logo').removeClass('menu__logo--white');
    } else {
        $(this).addClass('is-open');
        $('.menu__logo').addClass('menu__logo--white');
    }
});
