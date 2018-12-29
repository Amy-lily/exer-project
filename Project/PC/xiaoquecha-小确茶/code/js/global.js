$(document).ready(function() {
    $(window).scroll();
    var wow = new WOW(
        {
            mobile: false
        }
    );
    wow.init();
     //返回顶部
    $(window).scroll(function() {
        var $top = $(window).scrollTop();
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
    })
    $(".r-top").eq(0).click(function() {
        $('body,html').stop().animate({ scrollTop: 0 }, 300);
    });
    //nav stress
    var thisurl = window.location.href;

    var liindex = thisurl.indexOf("/index");

    var lixmjj = thisurl.indexOf("/xmjj");

    var lixmys = thisurl.indexOf("/xmys");

    var lijpcp = thisurl.indexOf("/jpcp");

    var litzyl = thisurl.indexOf("/tzyl");

    var lislht = thisurl.indexOf("/slht");

    var lilxwm = thisurl.indexOf("/lxwm");


    function listnav() {
        if (liindex > 0) {
            $(".header-con ul li.nav-list1 a").addClass("active");
        } else if (lixmjj > 0) {
            $(".header-con ul li.nav-list2 a").addClass("active");
        } else if (lixmys > 0) {
            $(".header-con ul li.nav-list3 a").addClass("active");
        } else if (lijpcp > 0) {
            $(".header-con ul li.nav-list4 a").addClass("active");
        } else if (litzyl > 0) {
            $(".header-con ul li.nav-list5 a").addClass("active");
        } else if (lislht > 0) {
            $(".header-con ul li.nav-list6 a").addClass("active");
        } else if (lilxwm > 0) {
            $(".header-con ul li.nav-list7 a").addClass("active");
        }
    }
    listnav();

})
