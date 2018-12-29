$(document).ready(function() {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    });
    wow.init();
    //返回顶部
    $(window).scroll(function() {
        var $top = $(window).scrollTop();
        // console.log($top)


        if ($top >= 500) {
            $(".r-top").addClass("active");
        } else {
            $(".r-top").removeClass("active");
        };
        if ($top >= 500) {
            $(".tq").addClass("active");
        } else {
            $(".tq").removeClass("active");
        };
        if ($top >= 110) {
            $(".head-02").stop().animate({ "height": 77 }, 300);
        } else {
            $(".head-02").stop().animate({ "height": 0 }, 0);
        };
    })
    $(".r-top").eq(0).click(function() {
        $('body,html').stop().animate({ scrollTop: 0 }, 300);
    });

})
