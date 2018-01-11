jQuery(document).ready(function($) {
    $('.lightbox').fancybox({
        animationEffect: 'zoom',
        toolbar: false,
        btnTpl: {
            close:
                '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}">' +
                '<svg viewBox="0 0 40 40">' +
                '<path d="M10,10 L30,30 M30,10 L10,30" />' +
                '</svg>' +
                '</button>',
        }
    })

    $('.owl-carousel').owlCarousel({
        // loop: true,
        items: 1,
        pagination: false,
        lazyLoad: true,
        autoplay: true,
        dots: true,
        nav: true,
        loop: true,
        navElement: 'a',
        navText: ['<span class="arrow"></span>', '<span class="arrow"></span>']
    })
})
