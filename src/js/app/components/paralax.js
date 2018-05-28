const velocity = .1;

function paralax(){
    let pos = $(window).scrollTop();
    $('.innovation').each(function() {
        const $element = $(this);
        let height = $element.height() -18;
        $(this).css('backgroundPosition', '45% ' + Math.round((height - pos) * velocity) +  'px');
    });
}

console.log($(window).width());

if ($(window).width() > '768') {
    $(window).bind('scroll', paralax);
}
