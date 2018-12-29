$(document).ready(function() {
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        mousewheelControl: true,
        speed:1200,
        loop:true,
        onInit: function(swiper) { //Swiper2.x的初始化是onFirstInit
            swiperAnimateCache(swiper); //隐藏动画元素 
            swiperAnimate(swiper); //初始化完成开始动画
        },
        onSlideChangeEnd: function(swiper) {
            swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画


        }
    })
    $(".header").addClass("head-fix");

})
