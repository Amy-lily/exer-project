<template>
    <div class="feiye" @pause="onPlayerPause($event)">
        <div class="index-box">
            <div class="cover-btn video-play"></div>
        </div>
        <div class="video-wraper">
            <div id="video-box" class="video-box">
                <video id="video-all" class="video-all" src="http://video.cnnjidc.com/qianqiancha/qqcend.mp4" autoplay="true" webkit-playsinline="false" @play="onPlayerPlay($event)" @pause="onPlayerPause($event)" @ended="onPlayerEnded($event)" playsinline="true" x-webkit-airplay="allow" x5-video-player-type="h5" x5-video-player-fullscreen="true" x5-video-orientation="portraint" style="object-fit:fill">
                </video>
            </div>
            <div class="video-end"></div>
        </div>
    </div>
</template>
<script>
import "../assets/jquery";
import bus from "../assets/eventBus";
export default {
    name: "feiye",
    data() {
        return {};
    },
    mounted: function() {
        var u = navigator.userAgent;
        var isAndroid = u.indexOf("Android") > -1 || u.indexOf("Adr") > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid) {
            $(".video-all").trigger("pause");
            $(".video-play").show();
            $(".video-play").click(function() {
                $(".index-box").hide();
                $(".video-wraper").show();
                $(".video-play").hide();
                $(".video-all").trigger("play");
            });
        } else if (isiOS) {
            $(".video-wraper").show();
            document.addEventListener(
                "WeixinJSBridgeReady",
                function() {
                    $(".index-box").hide();
                    $("#video-all")[0].load();
                },
                false
            );
            $("#video-all")[0].load();

            $(".video-all").trigger("pause");
            $(".video-play").css({
                display: "block"
            });
            $(".video-play").click(function() {
                $(".index-box").css({
                    display: "none"
                });
                $(".video-all").trigger("play");
                $(".video-text").css("display", "block");
            });
        } else {}

        var video_all = document.getElementById("video-all");
        // 播放结束
        var this_ = this;
        video_all.addEventListener("ended", function() {
           window.location.href = "#/cover";    

        });
    },
    methods: {
        // listen event
        onPlayerPlay(player) {
            // bus.$emit("pauseMusic"); // 视频开始播放，关闭全局音乐
        },
        onPlayerPause(player) {
            // console.log('player pause!', player)
            bus.$emit("playMusic"); // 视频暂停播放，播放全局音乐
        },
        onPlayerEnded(player) {
            //         console.log('player ended!', player)
            bus.$emit("playMusic"); // 视频播放完成，播放全局音乐
        }
    }
};
</script>
<style>
.feiye {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.index-box {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: url(../assets/images/video-bg.jpg) no-repeat;
    background-size: cover;
    z-index: 99999;
}

.video-wraper {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9999;
    display: none;
}

.video-box {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 999;
}

.video-all {
    width: 100%;
    height: 100%;
}

.cover-btn {
    display: block;
    width: 3.8rem;
    height: 3.8rem;
    background: url(../assets/images/video-btn.png) no-repeat center center;
    background-size: 100% 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -1.9rem;
    margin-top: -1.9rem;
    z-index: 999999;
}
</style>
