jQuery(document).ready(function($){
    // Landing Page owlCarousel
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 6000,
        dots: false,
        items: 1,
        loop: true,
        nav: false,
        thumbContainerClass: 'owl-thumbs',
        thumbImage: false,
        thumbItemClass: 'owl-thumb-item',
        thumbs: true,
        thumbsPrerendered: true,
    });
});
