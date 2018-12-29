$(document).ready(function() {
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

    var lippqy = thisurl.indexOf("/ppqy");

    var lixmys = thisurl.indexOf("/xmys");

    var lihbsc = thisurl.indexOf("/hbsc");

    var licpqd = thisurl.indexOf("/cpqd");

    var livisi = thisurl.indexOf("/visi");

    var ligssl = thisurl.indexOf("/gssl");

    var litzyl = thisurl.indexOf("/tzyl");

    var lilxwm = thisurl.indexOf("/lxwm");


    function listnav() {
        if (lippqy > 0) {
            $(".header-con ul li.nav-list2 a").addClass("active");
        } else if (lixmys > 0) {
            $(".header-con ul li.nav-list3 a").addClass("active");
        } else if (lihbsc > 0) {
            $(".header-con ul li.nav-list4 a").addClass("active");
        } else if (licpqd > 0) {
            $(".header-con ul li.nav-list5 a").addClass("active");
        } else if (livisi > 0) {
            $(".header-con ul li.nav-list6 a").addClass("active");
        } else if (ligssl > 0) {
            $(".header-con ul li.nav-list7 a").addClass("active");
        } else if (litzyl > 0) {
            $(".header-con ul li.nav-list8 a").addClass("active");
        }else if (lilxwm > 0) {
            $(".header-con ul li.nav-list9 a").addClass("active");
        }
    }
    listnav();

})
