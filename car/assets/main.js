$(document).ready(function () {
    $('.counter').counterUp({
        delay: 10,
        time: 1000,
        responsive:{
            0: {
                item:1
            },
            992: {
                item:2
            },
            1000:
            {
                item:4
            }
        }
    });
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                item:3
            },
            1000: {
                items: 5
            }
        }
    })
});

$('.clients-carousel').owlCarousel({
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 450,
    margin: 30,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 1
        },
        991: {
            items: 1
        },
        1200: {
            items: 1
        },
        1920: {
            items: 1
        }
    }
});

$(document).ready(function () {
    $(".team-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});