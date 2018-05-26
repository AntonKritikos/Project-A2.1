const velocity = .5;

function paralax(){
    let pos = $(window).scrollTop();
    $('.innovation').each(function() {
        const $element = $(this);
        let height = $element.height() -18;
        $(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) +  'px');
    });
}


if ($(window).innerWidth < '768') {
    $(window).bind('scroll', paralax);
}

