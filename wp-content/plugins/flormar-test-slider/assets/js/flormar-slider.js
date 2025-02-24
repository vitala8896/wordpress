jQuery(document).ready(function ($) {
    console.log('Slick init start');

    if (typeof $.fn.slick === 'undefined') {
        console.error('Slick не підключено!');
        return;
    }

    let $slider = $('.flormar-slider');

    if (!$slider.length) {
        console.error('Елемент .flormar-slider не знайдено!');
        return;
    }

    $slider.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: '<button id="custom-prev" class="slick-prev">❮</button>',
        nextArrow: '<button id="custom-next" class="slick-next">❯</button>',
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 3 } },
            { breakpoint: 600, settings: { slidesToShow: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1 } }
        ]
    });

    $('#custom-prev').click(function () {
        $slider.slick('slickPrev');
    });

    $('#custom-next').click(function () {
        $slider.slick('slickNext');
    });
});
