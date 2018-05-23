const anchor = document.getElementById('anchor');
const $logo = $('.menu__image');
const $content = $('.innovation');

let hide_logo = new Waypoint({
    element: anchor,
    handler: function() {
        if (!$logo.hasClass('is-disabled')) {
            $logo.addClass('is-disabled');
        } else {
            $logo.removeClass('is-disabled');
        }
    },
    offset: '30%'
});

let move_content = new Waypoint({
    element: anchor,
    handler: function() {
        if (!$content.hasClass('is-active')) {
            $content.addClass('is-active');
        } else {
            $content.removeClass('is-active');
        }
    },
    offset: '20%'
});

