$('.scroll-btn').click(function () {
    $("body, html").animate({
        scrollTop: window.pageYOffset + $(window).height()
    }, 500);
    return false;
});
