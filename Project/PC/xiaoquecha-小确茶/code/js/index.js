$(document).ready(function() {
    var myVideo = document.getElementById("myVideo");
    var closea = document.getElementById("xqc-video");
    // 静音
    closea.addEventListener('click', function() {
        if (myVideo.muted) {
            myVideo.muted = false
        } else {
            myVideo.muted = true
        }
    })

    if (!$(".vid-wrap,.index-video-wrap,.vid-w1024,.index-video").hasClass("active")) {
        $("html").css("overflow-y", "hidden");
    }

    $(".vid-wrap").click(function() {
        if ($(".vid-wrap,.index-video-wrap,.vid-w1024,.index-video").hasClass("active")) {
            $(".vid-wrap,.index-video-wrap,.vid-w1024,.index-video").removeClass("active");
            $(".shexiangtou").removeClass("active");
            $(".guanbi").removeClass("active");
            $("html").css("overflow-y", "hidden");
            
            $(".statement").removeClass("active");
        } else {
            $(".vid-wrap,.index-video-wrap,.vid-w1024,.index-video").addClass("active");
            $(".shexiangtou").addClass("active");
            $(".guanbi").addClass("active");
            $("html").css("overflow-y", "auto");
            $(".statement").addClass("active");
        }
    })

    //返回顶部
    $(window).scroll(function() {
        var $top = $(window).scrollTop();
        if ($top >= 200) {
            $(".index-video.active").css({ "top": "100px" });
            $(".index-video").css({ "top": "100px" });
        } else {
            $(".index-video.active").css({ "top": "150px" });
            $(".index-video").css({ "top": "150px" });
        }
    })
})