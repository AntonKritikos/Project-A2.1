const $logo = $('.menu__image');
const anchor1 = document.getElementById('anchor-1');
let content_array = [];
let window_W = window.innerWidth;

let hide_logo = new Waypoint({
    element: anchor1,
    handler: function() {
        if (!$logo.hasClass('is-disabled')) {
            $logo.addClass('is-disabled');
        } else {
            $logo.removeClass('is-disabled');
        }
    },
    offset: '30%'
});

for (let i = 0; i < $('.innovation').length; i++) {
    content_array[i] = document.querySelector('.innovation-' + ([i + 1]));
    let innovation_waypoint = new Waypoint({
        element: content_array[i],
        handler: function() {
            if (!$(content_array[i]).hasClass('is-active')) {
                if (window_W >= '768') {
                    $(content_array[i]).addClass('is-active');
                } else {
                    $(content_array[i]).addClass('is-active--mobile');
                }
            } else {
                if (window_W <= '768') {
                    $(content_array[i]).removeClass('is-active--mobile');
                }
                $(content_array[i]).removeClass('is-active');
            }
        },
        offset: '35%'
    });
}
