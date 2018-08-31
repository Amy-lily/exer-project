<template>
    <div class="ppgs">
        <!-- ml  -->
        <router-link to="/home">
            <div class="ml-word"></div>
            <div class="ml-btn"></div>
        </router-link>
        <!-- banner  -->
        <div class="ppgs-ban">
            <div class="ppgs-ban-bg"></div>
            <div class="ppgs-word1 animated jackInTheBox"></div>
            <div class="ppgs-word2 animated fadeIn"></div>
            <div class="ppgs-word3-wrap animated lineHeight">
                <div class="ppgs-word3"></div>
            </div>
        </div>
        <div class="ppgs-video-wrap">
          <div :class="['ppgs-video-poster',{'posterHide':posterHide}]">
           <div class="ppgs-video-btn" @click="videoshow"></div>
          </div>
          <video :src="videoSrc" :class="['self-video',{'videoShow':videoShow}]" controls='controls' 
          @play="onPlayerPlay($event)"
          @pause="onPlayerPause($event)"
          :poster="videoPoster">
            您的浏览器不支持 video 标签。
          </video>
        </div>
        <div class="img-box">
            <img src="" alt="" v-lazy="ppgsimg1">
            <img src="" alt="" v-lazy="ppgsimg2">
            <div class="ppgs-swiper">
                <swiper :options="swiperOption" class="myswiper">
                    <!-- slides -->
                    <swiper-slide>
                        <img src="../assets/images/ppgs-area1.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="../assets/images/ppgs-area2.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="../assets/images/ppgs-area3.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="../assets/images/ppgs-area4.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="../assets/images/ppgs-area5.png" alt="">
                    </swiper-slide>
                    <!-- Optional controls -->
                    <div class="swiper-pagination ppgs-pagination1"  slot="pagination"></div>
                    <div class="swiper-line"></div>
                    <div class="swiper-finger animated fingerGuide"></div>
                </swiper>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
           <router-link to="/scqs">
               <div class="footer-con">
                   <div class="footer-word animated slowFlash"></div>
                   <div class="ppgs-footer-circle"></div>
                   <div class="ppgs-footer-jt animated rightGuide"></div>
               </div>
           </router-link> 
        </div>
    </div>
</template>
<script>
import { mapActions } from "vuex";
export default {
  name: "ppgs",
  data() {
    return {
      videoSrc: "http://video.cnnjidc.com/yuheitang/yhtppgs.mp4",
      videoPoster: require("@/assets/images/ppgs-video-poster.jpg"),
      videoShow: false,
      posterHide: false,
      swiperOption: {
        direction: "horizontal",
        slidesPerView: 1,
        delay: 1000,
        loop: true,
        autoplay: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        effect: "fade",
        fadeEffect: {
          crossFade: true
        }
      },
      ppgsimg1: require("@/assets/images/ppgs-img1.jpg"),
      ppgsimg2: require("@/assets/images/ppgs-img2.gif")
    };
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.swiper;
    },
    player() {
      return this.$refs.videoPlayer.player;
    }
  },
  methods: {
    ...mapActions({
      musicActionPlay: "musicActionPlay"
    }), // listen event
    onPlayerPlay(player) {
      // console.log('player play!', player)
      this.musicActionPlay(false); // 视频开始播放，关闭全局音乐
    },
    onPlayerPause(player) {
      // console.log('player pause!', player)
      this.musicActionPlay(true); // 视频暂停播放，播放全局音乐
    },
    onPlayerEnded(player) {
      // console.log('player ended!', player)
      this.musicActionPlay(true); // 视频播放完成，播放全局音乐
    },
    videoshow() {
      // code by lly
      let selfVideo = document.getElementsByClassName("self-video")[0];
      this.posterHide = true;
      this.videoShow = true;
      selfVideo.play();
    }
  },
  mounted: function() {
    this.$nextTick(function() {});
  }
};
</script>
<style>
.ppgs-ban {
  width: 18.75rem;
  height: 33.025rem;
  position: relative;
  overflow: hidden;
}
.ppgs-ban-bg {
  width: 18.75rem;
  height: 33.025rem;
  position: absolute;
  background: url(../assets/images/ppgs-ban.jpg) no-repeat;
  background-size: 100% 100%;
  top: 0;
  left: 0;
}
.ppgs-word1 {
  width: 3.525rem;
  height: 1.75rem;
  position: absolute;
  top: 4.625rem;
  left: 2.05rem;
  background: url(../assets/images/ppgs-word1.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 2s;
  -webkit-animation-duration: 2s;
}
.ppgs-word2 {
  width: 11rem;
  height: 2.5rem;
  position: absolute;
  top: 20.5rem;
  left: 4.725rem;
  background: url(../assets/images/ppgs-word2.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 1s;
  -webkit-animation-delay: 1s;
}
.ppgs-word3-wrap {
  width: 9.675rem;
  height: 4.95rem;
  position: absolute;
  top: 26.225rem;
  left: 50%;
  margin-left: -4.835rem;
  overflow: hidden;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-delay: 1.5s;
  -webkit-animation-delay: 1.5s;
}
.ppgs-word3 {
  width: 9.675rem;
  height: 4.95rem;
  position: absolute;
  top: 0;
  left: 0;
  background: url(../assets/images/ppgs-word3.png) no-repeat;
  background-size: 100% 100%;
}
/* video */
.ppgs-video-wrap {
  width: 18.75rem;
  height: 10.575rem;
  position: relative;
  background: #fff;
}
.self-video {
  width: 100%;
  height: 100%;
  display: none;
}
.ppgs-video-poster {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9;
  overflow: hidden;
  background: url(../assets/images/ppgs-video-poster.jpg) no-repeat;
  background-size: 100% 100%;
}
.videoShow {
  display: block;
}
.ppgs-video-btn {
  width: 4.3rem;
  height: 4.3rem;
  margin: 0 auto;
  margin-top: 3.175rem;
  background: url(../assets/images/ppgs-video-btn.png) no-repeat;
  background-size: 100% 100%;
}
.posterHide {
  display: none;
}

/* swiper */
.ppgs-swiper {
  width: 18.75rem;
  height: 15.225rem;
  background: #fff;
  position: relative;
}
.ppgs-swiper .myswiper {
  width: 16.425rem;
  height: 13.675rem;
  margin: 0 auto;
  overflow: hidden;
}
.ppgs-swiper .myswiper img {
  display: block;
  width: 16.375rem;
  height: 10.6rem;
}
.swiper-line {
  width: 8.775rem;
  height: 0.25rem;
  position: absolute;
  top: 12.2rem;
  left: 50%;
  margin-left: -4.387rem;
  background: url(../assets/images/ppgs-area-line.png) no-repeat;
  background-size: 100% 100%;
}
.swiper-finger {
  width: 0.55rem;
  height: 0.9rem;
  position: absolute;
  top: 12.7rem;
  left: 6rem;
  background: url(../assets/images/ppgs-finger.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 2.5s;
  -webkit-animation-duration: 2.5s;
}
.swiper-container-horizontal > .ppgs-pagination1,
.swiper-pagination-custom,
.swiper-pagination-fraction {
  position: absolute;
  top: 11.15rem;
  width: 9.4rem;
  left: 50%;
  margin-left: -4.7rem;
}
.swiper-container-horizontal > .ppgs-pagination1 .swiper-pagination-bullet {
  width: 0.75rem;
  height: 0.925rem;
  background: url(../assets/images/ppgs-area-icon.png) no-repeat;
  background-size: 100% 100%;
  opacity: 0;
  margin-left: 1rem;
}
.swiper-container-horizontal
  > .ppgs-pagination1
  .swiper-pagination-bullet:first-child {
  margin-left: 0;
}
.swiper-container-horizontal
  > .ppgs-pagination1
  .swiper-pagination-bullet:nth-child(2) {
  margin-left: 1.1rem;
}
.swiper-container-horizontal
  > .ppgs-pagination1
  .swiper-pagination-bullet:nth-child(3) {
  margin-left: 1.15rem;
}
.swiper-container-horizontal
  > .ppgs-pagination1
  .swiper-pagination-bullet:nth-child(4) {
  margin-left: 1.15rem;
}
.swiper-container-horizontal
  > .ppgs-pagination1
  .swiper-pagination-bullet:nth-child(5) {
  margin-right: 0;
}
.swiper-container-horizontal
  > .ppgs-pagination1
  .swiper-pagination-bullet-active {
  opacity: 1;
}

/* footer */
.footer {
  width: 18.75rem;
  height: 4.575rem;
  background: #fff;
  position: relative;
}
.footer-con {
  width: 12.75rem;
  height: 1.825rem;
  position: absolute;
  top: 0;
  left: 50%;
  margin-left: -6.375rem;
  background-color: #ea5c3f;
}
.footer-word {
  width: 9.35rem;
  height: 0.675rem;
  position: absolute;
  top: 50%;
  margin-top: -0.3375rem;
  left: 0.75rem;
  background: url(../assets/images/ppgs-bottom-word.png) no-repeat;
  background-size: 100% 100%;
}
.ppgs-footer-circle {
  width: 0.6rem;
  height: 0.6rem;
  position: absolute;
  top: 50%;
  margin-top: -0.3rem;
  right: 1.625rem;
  background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
  background-size: 100% 100%;
}
.ppgs-footer-jt {
  width: 0.925rem;
  height: 0.275rem;
  position: absolute;
  top: 50%;
  margin-top: -0.1325rem;
  right: 1rem;
  background: url(../assets/images/ppgs-bottom-jt.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
}

@-webkit-keyframes fingerGuide {
  0% {
    opacity: 1;
    filter: alpha(opacity=100);
    -moz-opacity: 1;
    -khtml-opacity: 1;
    -webkit-opacity: 1;
    -o-opacity: 1;
    transform: translateX(0px);
    -webkit-transform: translateX(0px);
  }
  100% {
    opacity: 0.5;
    filter: alpha(opacity=50);
    -moz-opacity: 0.5;
    -khtml-opacity: 0.5;
    -webkit-opacity: 0.5;
    -o-opacity: 0.5;
    transform: translateX(70px);
    -webkit-transform: translateX(70px);
  }
}

@keyframes fingerGuide {
  0% {
    opacity: 1;
    filter: alpha(opacity=100);
    -moz-opacity: 1;
    -khtml-opacity: 1;
    -webkit-opacity: 1;
    -o-opacity: 1;
    transform: translateX(0px);
    -webkit-transform: translateX(0px);
  }
  100% {
    opacity: 0.5;
    filter: alpha(opacity=50);
    -moz-opacity: 0.5;
    -khtml-opacity: 0.5;
    -webkit-opacity: 0.5;
    -o-opacity: 0.5;
    transform: translateX(70px);
    -webkit-transform: translateX(70px);
  }
}

.fingerGuide {
  -webkit-animation-name: fingerGuide;
  animation-name: fingerGuide;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
</style>

