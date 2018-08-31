$(document).ready(function() {
    // banner轮播
    var mySwiper = new Swiper('.swiper-container', {
        autoplay: 1000, //可选选项，自动滑动
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
    })
    var num = 80;
    //生成最终的随机数
    function buildNum() {
        rad = 90 + Math.round(Math.random() * (110 - 90));
        return rad;
    }
    //数字增长
    function increaNum() {
        buildNum();
        myInterval = setInterval(function() {
            num++;
            if (num >= 0 && num < 10) {
                $(".list4").html(num);
            } else if (num >= 10 && num <= 99) {
                var ones = parseInt(num % 10); //个位数字
                var tens = parseInt(num / 10); //十位数字
                $(".ban3-num4").html(ones);
                $(".ban3-num3").html(tens);
            } else {
                var hund = parseInt(num / 100); //百位数字
                exceptb = num - hund * 100;
                var ones = parseInt(exceptb % 10); //个位数字
                var tens = parseInt(exceptb / 10); //十位数字
                $(".ban3-num4").html(ones);
                $(".ban3-num3").html(tens);
                $(".ban3-num2").html(hund);
            }
            if (num == rad) {
                clearInterval(myInterval);
            }
        }, 300)
    }

    var runing = true;
    window.onscroll = function() {
        t = document.documentElement.scrollTop || document.body.scrollTop;
        // console.log(t);
        if (t >= 2000 && runing) {
            increaNum();
            runing = false;
        }
        $(".index-nav").addClass("index-nav-active");
        if (t == 0) {
            $(".index-nav").removeClass("index-nav-active");

        }
        if (t >= 900 && t < 2945) {
            navReturn(0)
        } else if (t >= 2945 && t < 5735) {
            navReturn(1)
        } else if (t >= 5735 && t < 8730) {
            navReturn(2)
        } else if (t >= 8730 && t < 10909) {
            navReturn(3)
        } else if (t >= 10909 && t < 12935) {
            navReturn(4)
        } else if (t >= 12935) {
            navReturn(5)
        }
    }

    // 返回顶部 and 当前版块 
    // 市场

    function navReturn(i) {
        $('.font-p').eq(i).addClass("font-active");
        $('.font-p').eq(i).siblings().removeClass("font-active");
    }

    $('.font-p1,.bottom-font1').click(function() {
            navReturn(0);
            $('body,html').animate({ scrollTop: 900 }, 300);
        })
        // 优势  
    $('.font-p2,.bottom-font2').click(function() {
            navReturn(1);
            $('body,html').animate({ scrollTop: 2945 }, 300);
        })
        // 产品 
    $(".font-p3,.bottom-font3").click(function() {
            $('body,html').animate({ scrollTop: 5735 }, 300);
            navReturn(2);
        })
        // 店型 
    $(".font-p4,.bottom-font4").click(function() {
            $('body,html').animate({ scrollTop: 8730 }, 300);
            navReturn(3);
        })
        // 服务 
    $(".font-p5,.bottom-font5").click(function() {
            $('body,html').animate({ scrollTop: 10909 }, 300);
            navReturn(4);
        })
        // 咨询 
    $(".font-p6,.bottom-font6").click(function() {
        $('body,html').animate({ scrollTop: 12935 }, 300);
            navReturn(5);
    })
    $(".bottom-logo,.index-nav-logo").click(function() {
        $('body,html').animate({ scrollTop: 0 }, 300);

    })

    //返回顶部

    $(".r-top").eq(0).click(function() {
        $('body,html').stop().animate({ scrollTop: 0 }, 300);
    });

    var map1 = new BMap.Map("map1"); // 创建Map实例
    var point1 = new BMap.Point(113.458084, 23.172794);
    map1.centerAndZoom(point1, 17);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小

    var map1 = new BMap.Map("map2"); // 创建Map实例
    var point1 = new BMap.Point(116.518, 39.806714);
    map1.centerAndZoom(point1, 17);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小

    var map1 = new BMap.Map("map3"); // 创建Map实例
    var point1 = new BMap.Point(104.06081, 30.684406);
    map1.centerAndZoom(point1, 12);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小

    var map1 = new BMap.Map("map4"); // 创建Map实例
    var point1 = new BMap.Point(118.863632, 31.968484);
    map1.centerAndZoom(point1, 12);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小
})
