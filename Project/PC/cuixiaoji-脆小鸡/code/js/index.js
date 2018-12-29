$(document).ready(function() {
    var mySwiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 3000,
            effect: 'fade',
            autoplayDisableOnInteraction: false,
            fade: {
                crossFade: true,
            }
        })
    // 导航
    $(".nav-warp").each(function(i) {
        $(".nav-warp").eq(i).click(function(i) {
            $(".font-img").eq($(this).index()).addClass("active");
            $(".font-img").eq($(this).index()).parent().siblings().children().removeClass("active");
            $(".font-p").eq($(this).index()).parent().siblings().children().removeClass("active1");
            $(".font-p").eq($(this).index()).addClass("active1");
        });
    });

    // 导航跳转
    $('.nav-warp1').click(function() {
        $('body,html').stop().animate({ scrollTop: 860 }, 300);
    })
    $('.nav-warp2').click(function() {
        $('body,html').stop().animate({ scrollTop: 2500 }, 300);
    })
    $('.nav-warp3').click(function() {
        $('body,html').stop().animate({ scrollTop: 4303 }, 300);
    })
    $('.nav-warp4').click(function() {
        $('body,html').stop().animate({ scrollTop: 5250 }, 300);
    })
    $('.nav-warp5').click(function() {
        $('body,html').stop().animate({ scrollTop: 6200 }, 300);
    })
    $('.nav-warp6').click(function() {
        $('body,html').stop().animate({ scrollTop: 7168 }, 300);
    })

    // 返回顶部 and 当前版块 
    $(window).scroll(function() {
        var $top = $(window).scrollTop();
        if ($top >= 860 && $top < 2500) {
            $(".font-img1").addClass('active');
            $(".font-p1").addClass('active1');
        } else {
            $(".font-img1").removeClass('active');
            $(".font-p1").removeClass('active1');
        }
        if ($top >= 2500 && $top < 4303) {
            $(".font-img2").addClass('active');
            $(".font-p2").addClass('active1');
        } else {
            $(".font-img2").removeClass('active');
            $(".font-p2").removeClass('active1');
        }
        if ($top >= 4303 && $top < 5250) {
            $(".font-img3").addClass('active');
            $(".font-p3").addClass('active1');
        } else {
            $(".font-img3").removeClass('active');
            $(".font-p3").removeClass('active1');
        }
        if ($top >= 5250 && $top < 6200) {
            $(".font-img4").addClass('active');
            $(".font-p4").addClass('active1');
        } else {
            $(".font-img4").removeClass('active');
            $(".font-p4").removeClass('active1');
        }
        if ($top >= 6200 && $top < 7168) {
            $(".font-img5").addClass('active');
            $(".font-p5").addClass('active1');
        } else {
            $(".font-img5").removeClass('active');
            $(".font-p5").removeClass('active1');
        }
        if ($top >= 7168 && $top < 7288) {
            $(".font-img6").addClass('active');
            $(".font-p6").addClass('active1');
        } else {
            $(".font-img6").removeClass('active');
            $(".font-p6").removeClass('active1');
        }


    })

    // 投资店型
    function rebg() {
        $('.tzdx-btn-bg').each(function(i) {
            $(this).removeClass('tzdx-bg-active')
            $('.tzdx-text').eq(i).removeClass('tzdx-text-active')
            $('.tzdx-book').eq(i).hide()
        })
    }
    $('.tzdx-btn').each(function(i) {
        $(this).click(function() {
            rebg();
            $(this).children('.tzdx-btn-bg').addClass('tzdx-bg-active')
            $(this).children('.tzdx-text').addClass('tzdx-text-active')
            $('.tzdx-book').eq(i).show()
        })
    })


    // map

    skrollr.init({
        smoothScrolling: false,
        mobileDeceleration: 0.004
    });
    var map1 = new BMap.Map("map1"); // 创建Map实例
    var point1 = new BMap.Point(116.546481, 39.77169);
    map1.centerAndZoom(point1, 17);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小

    var map1 = new BMap.Map("map2"); // 创建Map实例
    var point1 = new BMap.Point(118.815806,31.932017);
    map1.centerAndZoom(point1, 17);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小

    var map1 = new BMap.Map("map3"); // 创建Map实例
    var point1 = new BMap.Point(113.269158, 23.223895);
    map1.centerAndZoom(point1, 12);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小
})
