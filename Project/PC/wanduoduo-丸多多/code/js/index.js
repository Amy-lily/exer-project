$(document).ready(function() {

    var swiper = new Swiper('.swiper-container', {
        speed: 1000,
        effect: 'cube',
        cubeEffect: {
            slideShadows: true,
            shadow: true,
            shadowOffset: 100,
            shadowScale: 0.6
        },
        autoplay: 7000,
        mousewheelControl: true,
        onInit: function(swiper) {
            swiperAnimateCache(swiper);
            swiperAnimate(swiper);
        },
        onSlideChangeEnd: function(swiper) {
            swiperAnimate(swiper);
        }

    });
    

})