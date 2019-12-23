$(document).ready(function(){
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        autoplay: {
            delay: 3000,
        },
        disableOnInteraction: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    var swiperContainer = $('.swiper-container');
    swiperContainer.mouseenter(function() {
        console.log("here");
        mySwiper.autoplay.stop();
    });

    swiperContainer.mouseleave(function() {
        mySwiper.autoplay.start();
    });
});