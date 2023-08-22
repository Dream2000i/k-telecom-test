jQuery(document).ready(function ($) {
    $('#mobile-menu .has-childs > a').append("<span class='status-sub-menu'></span>");
    $('body').on('click', function (e) {
        const menu = e.target;
        if ((!menu.closest('#mobile-menu')
            && !menu.closest('.mob-menu-control'))
            || menu.closest('#mobile-menu .nav-menu-element:not(.has-childs) a')) {
            $('#mobile-menu').removeClass('open-menu');
            $('.mob-menu-control').removeClass('open-menu');
        }

    });

    $('body').on('click', '.mob-menu-control', function (e) {
        console.log(e.target);
        $(e.target).toggleClass('open-menu');
        $('#mobile-menu').toggleClass('open-menu');
    });
    $('.modal-callback').addClass('modal-open');


    $('#mobile_menu .nav-menu-element.has-childs .status-sub-menu').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.has-childs').toggleClass('open-submenu');
        $(this).closest('a').siblings('.sub-menu').slideToggle();
    });

});
