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

$('.menu__item').click(function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(e.target).attr('data-target')).offset().top
    }, 750);
    return false;
});

$(window).scroll(function () {
    $($menu).removeClass('is-open');
});
