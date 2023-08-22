jQuery(document).ready(function ($) {

    $('input[type=tel]').inputmask({"mask": "+7 999 999-99-99"}); //specifying options


    $(".mainbanner-block .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        items: 1
    });
    const tariffsCarousel = $(".tariffs-block .owl-carousel");
    tariffsCarousel.owlCarousel({
        loop: true,
        margin: 0,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,

            },
            // breakpoint from 480 up
            320: {
                items: 1.5,
            },
            // breakpoint from 768 up
            768: {
                items: 2.5,
            }
        }
    });

    $(".owl-item.active").last().addClass('blured');


    tariffsCarousel.on('changed.owl.carousel', function (property) {
        $('.owl-item').removeClass('blured');
    
        setTimeout(() => { 
           $(".owl-item.active").last().addClass('blured');
        },1)
    });


    document.querySelector('[data-name=approval] .wpcf7-list-item-label').innerHTML += ' <a href="/privacy-policy/">обработки данных</a>';



});
