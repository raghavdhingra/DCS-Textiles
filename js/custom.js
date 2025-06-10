$('#ourCustomers').owlCarousel({
    loop: false,
    margin: 20,
    autoplay: true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
});

$('#recentProduct').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    // animateOut: 'fadeOut',
    navText: ['<i class="fi-rr-arrow-left"></i>', '<i class="fi-rr-arrow-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.carousel').carousel({
    interval: 2000
});

$(window).on('load', function () {
    $(".preloader").fadeOut(500);
});

$('#recomProduct').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    dots: false,
    navText: ['<i class="fi-rr-angle-left"></i>', '<i class="fi-rr-angle-right"></i>'],
    responsive: {
        0: {
            items: 1.3
        },
        600: {
            items: 2.5
        },
        1000: {
            items: 3.5
        }
    }
});

$(document).ready(function () {
    $('#singleProduct').owlCarousel({
        loop: true,
        items: 1,
        slideSpeed: 2000,
        autoplay: true,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'
    });
});