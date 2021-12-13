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

new Splide('.world-tab-1', {
    arrows: false,
    pagination: false,
    type: "loop",
}).mount();

new Splide('.world-tab-2', {
    arrows: false,
    pagination: false,
    type: "loop",
}).mount();

new Splide('.usa-1', {
    arrows: false,
    pagination: false,
    type: "loop",
}).mount();

new Splide('.usa-2', {
    arrows: false,
    pagination: false,
    type: "loop",
}).mount();

new Splide('.usa-3', {
    arrows: false,
    pagination: false,
    type: "loop",
}).mount();

new Splide('.usa-4', {
    arrows: false,
    pagination: false,
    type: "loop",
}).mount();
