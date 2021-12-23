(function ($) {
    "use strict";

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('nav-sticky');
        } else {
            $('.navbar').removeClass('nav-sticky');
        }
    });

})(jQuery);

new Splide('#main-slider', {
    perPage: 3,
    perMove: 1,
    pagination: false,
    breakpoints: {
        991: {
            perPage: 3,
            gap: '1.5rem',
        },
        768: {
            perPage: 2,
            gap: '1.5rem',
        },
        575: {
            perPage: 1,
            gap: '1rem',
        },
    }
}).mount();

