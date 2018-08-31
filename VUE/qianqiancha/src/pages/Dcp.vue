<template>
    <div class="dcp">
        <!-- 目录   -->
        <router-link to="/home">
            <div class="ml-btn animated microFlash loop"></div>
        </router-link>
        <!-- banner -->
        <div class="dcp-ban">
            <div class="dcp-banimg1 animated flipInX"></div>
            <div class="dcp-banimg2 animated popIn"></div>
            <div class="dcp-banimg3 animated fadeIn"></div>
        </div>
        <div class="con-swiper">
            <div class="swiper-box">
                <swiper :options="swiperOption" ref="mySwiper">
                    <!-- slides -->
                    <swiper-slide>
                        <img width="100%" src="../assets/images/dcp-swiper1.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                        <img width="100%" src="../assets/images/dcp-swiper2.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                        <img width="100%" src="../assets/images/dcp-swiper3.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                        <img width="100%" src="../assets/images/dcp-swiper4.jpg" />
                    </swiper-slide>
                    <swiper-slide>
                        <img width="100%" src="../assets/images/dcp-swiper5.jpg" />
                    </swiper-slide>
                </swiper>
            </div>
            <div class="con-swiperimg1"></div>
            <div class="con-swiperimg2 animated fadeIn loop"></div>
            <div class="con-swiperimg3 animated fadeIn loop"></div>
            <div class="con-swiperimg4 animated linelr loop"></div>
        </div>
        <!-- img-box -->
        <div class="img-box">
            <img src="" alt="" v-lazy="dcpimg1">
            <img src="" alt="" v-lazy="dcpimg2">
            <img src="" alt="" v-lazy="dcpimg3">
            <img src="" alt="" v-lazy="dcpimg4">
            <img src="" alt="" v-lazy="dcpimg5">
            <img src="" alt="" v-lazy="dcpimg6">
            <img src="" alt="" v-lazy="dcpimg7">
            <img src="" alt="" v-lazy="dcpimg8">
            <img src="" alt="" v-lazy="dcpimg9">
            <img src="" alt="" v-lazy="dcpimg10">
            <img src="" alt="" v-lazy="dcpimg11">
            <img src="" alt="" v-lazy="dcpimg12">
            <img src="" alt="" v-lazy="dcpimg13">
            <img src="" alt="" v-lazy="dcpimg14">
            <img src="" alt="" v-lazy="dcpimg15">
            <img src="" alt="" v-lazy="dcpimg16">
            <img src="" alt="" v-lazy="dcpimg17">
            <img src="" alt="" v-lazy="dcpimg18">
            <img src="" alt="" v-lazy="dcpimg19">
            <img src="" alt="" v-lazy="dcpimg20">
        </div>
        <!-- footer -->
        <div class="dcp-footer">
            <router-link to="/xfk">
                <div class="dcp-footerimg dcp-pre animated slowFlash"></div>
            </router-link>
            <router-link to="/ydx">
                <div class="dcp-footerimg dcp-next animated slowFlash"></div>
            </router-link>
        </div>
    </div>
</template>
<script>
import {
    swiper,
    swiperSlide
} from 'vue-awesome-swiper';
export default {
    name: 'dcp',
    data() {
        return {
            swiperOption: {
                loop: true,
                effect: 'fade',
                autoplay: {
                    disableOnInteraction: false,
                    delay: 1700
                }
            },
            dcpimg1: require("@/assets/images/dcpimg1.jpg"),
            dcpimg2: require("@/assets/images/dcpimg2.jpg"),
            dcpimg3: require("@/assets/images/dcpimg3.jpg"),
            dcpimg4: require("@/assets/images/dcpimg4.jpg"),
            dcpimg5: require("@/assets/images/dcpimg5.jpg"),
            dcpimg6: require("@/assets/images/dcpimg6.jpg"),
            dcpimg7: require("@/assets/images/dcpimg7.jpg"),
            dcpimg8: require("@/assets/images/dcpimg8.jpg"),
            dcpimg9: require("@/assets/images/dcpimg9.jpg"),
            dcpimg10: require("@/assets/images/dcpimg10.jpg"),
            dcpimg11: require("@/assets/images/dcpimg11.jpg"),
            dcpimg12: require("@/assets/images/dcpimg12.jpg"),
            dcpimg13: require("@/assets/images/dcpimg13.jpg"),
            dcpimg14: require("@/assets/images/dcpimg14.jpg"),
            dcpimg15: require("@/assets/images/dcpimg15.jpg"),
            dcpimg16: require("@/assets/images/dcpimg16.jpg"),
            dcpimg17: require("@/assets/images/dcpimg17.jpg"),
            dcpimg18: require("@/assets/images/dcpimg18.jpg"),
            dcpimg19: require("@/assets/images/dcpimg19.jpg"),
            dcpimg20: require("@/assets/images/dcpimg20.jpg"),
        }
    },
    components: {
        swiper,
        swiperSlide
    }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.dcp-ban {
    width: 18.75rem;
    height: 33.925rem;
    position: relative;
    background: url(../assets/images/dcp-ban.jpg) no-repeat;
    background-size: 100% 100%;
}

.dcp-banimg1 {
    width: 3.25rem;
    height: 2.075rem;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -1.625rem;
    background: url(../assets/images/dcp-banimg1.png) no-repeat;
    background-size: 100% 100%;
}

.dcp-banimg2 {
    width: 13.975rem;
    height: 3.525rem;
    position: absolute;
    top: 3.1rem;
    left: 2.55rem;
    background: url(../assets/images/dcp-banimg2.png) no-repeat;
    background-size: 100% 100%;
    animation-delay: 0.4s;
    -webkit-animation-delay: 0.4s;
}

.dcp-banimg3 {
    width: 14.325rem;
    height: 1.675rem;
    position: absolute;
    top: 7.25rem;
    left: 2.25rem;
    background: url(../assets/images/dcp-banimg3.png) no-repeat;
    background-size: 100% 100%;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-delay: 0.8s;
    -webkit-animation-delay: 0.8s;
}


/*content*/

.con-swiper {
    width: 18.75rem;
    height: 19.2rem;
    position: relative;
    background: url(../assets/images/con-swiper.jpg) no-repeat;
    background-size: 100% 100%;
}

.swiper-box {
    width: 18.75rem;
    height: 12.775rem;
    position: absolute;
    left: 0;
    top: 0;
}

.con-swiperimg1 {
    width: 3.95rem;
    height: 0.175rem;
    position: absolute;
    left: 7.55rem;
    top: 13.78rem;
    background: url(../assets/images/con-swiperimg1.png) no-repeat;
    background-size: 100% 100%;
}

.con-swiperimg2 {
    width: 0.55rem;
    height: 0.55rem;
    position: absolute;
    left: 7.375rem;
    top: 13.6rem;
    background: url(../assets/images/con-swiperimg.png) no-repeat;
    background-size: 100% 100%;
    animation-duration: 3.6s;
    -webkit-animation-duration: 3.6s;
    animation-delay: 1.8s;
    -webkit-animation-delay: 1.8s;
}

.con-swiperimg3 {
    width: 0.55rem;
    height: 0.55rem;
    position: absolute;
    left: 11.15rem;
    top: 13.6rem;
    background: url(../assets/images/con-swiperimg.png) no-repeat;
    background-size: 100% 100%;
    animation-duration: 3.6s;
    -webkit-animation-duration: 3.6s;
}

.con-swiperimg4 {
    width: 0.7rem;
    height: 1.125rem;
    position: absolute;
    left: 7.4rem;
    top: 14.375rem;
    background: url(../assets/images/con-swiperimg4.png) no-repeat;
    background-size: 100% 100%;
}

@-webkit-keyframes linelr {
    0% {
        left: 7.4rem;
    }
    100% {
        left: 11.175rem;
    }
}

@keyframes linelr {
    0% {
        left: 7.4rem;
    }
    100% {
        left: 11.175rem;
    }
}

.linelr {
    -webkit-animation-name: linelr;
    animation-name: linelr;
    animation-direction: alternate;
    -webkit-animation-direction: alternate;
    animation-timing-function: linear;
    -webkit-animation-timing-function: linear;
    animation-duration: 1.8s;
    -webkit-animation-duration: 1.8s;
}


/*footer*/

.dcp-footer {
    width: 18.75rem;
    height: 5.6rem;
    background: #fff;
    position: relative;
}

.dcp-footerimg {
    width: 3.8rem;
    height: 2.425rem;
    position: absolute;
    top: 0;
}

.dcp-pre {
    left: 3.15rem;
    background: url(../assets/images/dcp-pre.png) no-repeat;
    background-size: 100% 100%;
}

.dcp-next {
    right: 3.15rem;
    background: url(../assets/images/dcp-next.png) no-repeat;
    background-size: 100% 100%;
}
</style>
