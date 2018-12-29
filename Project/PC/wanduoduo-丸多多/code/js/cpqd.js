$(document).ready(function(e) {
    // 轮播图
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        autoplay: 3000, //可选选项，自动滑动
        pagination: '.swiper-pagination',
        paginationClickable :true,
        effect: 'fade',
    })
    // 手风琴
    $(".list li").hover(function() {
        $(this).stop().animate({
            width: 580
        }).siblings().stop().animate({
            width: 240
        })
        $(this).find("span, p").hide();


    }, function() {
        $(this).stop().animate({
            width: 293
        }).siblings().stop().animate({
            width: 293
        })
        $(this).find("span, p").show();
    })

});