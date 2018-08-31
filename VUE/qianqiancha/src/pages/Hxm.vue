<template>
    <div class="hxm">
        <!-- 目录   -->
        <router-link to="/home">
            <div class="ml-btn animated microFlash loop"></div>
        </router-link>
        <!-- banner -->
        <div class="hxm-ban">
            <div class="hxm-banimg1 animated flipInX"></div>
            <div class="hxm-banimg2 animated popIn"></div>
            <div class="hxm-banimg3 animated fadeIn"></div>
        </div>
        <!-- img-box -->
        <div class="img-box">
            <img src="" alt="" v-lazy="hxmimg1">
            <div v-lazy:background-image="hxmimg2" class="hxmimg2"></div>
            <img src="" alt="" v-lazy="hxmimg3">
            <img src="" alt="" v-lazy="hxmimg4">
            <img src="" alt="" v-lazy="hxmimg5">
            <div v-lazy:background-image="hxmimg6" class="hxmimg6">
                <div v-lazy:background-image="hxmimg6_gif" class="hxmimg6_gif"></div>
            </div>
            <img src="" alt="" v-lazy="hxmimg7">
            <div v-lazy:background-image="hxmimg8" class="hxmimg8">
                <div v-lazy:background-image="hxmimg8_gif" class="hxmimg8_gif"></div>
                <div class="hxmimg8-img"></div>
            </div>
            <div v-lazy:background-image="hxmimg9" class="hxmimg9">
                <div v-lazy:background-image="hxmimg9_gif" class="hxmimg9_gif"></div>
                <div class="hxmimg9-img"></div>
            </div>
            <div v-lazy:background-image="hxmimg10" class="hxmimg10">
                <div v-lazy:background-image="hxmimg10_gif" class="hxmimg10_gif"></div>
                <div class="hxmimg10-img"></div>
            </div>
            <div v-lazy:background-image="hxmimg11" class="hxmimg11">
                <div v-lazy:background-image="hxmimg11_gif" class="hxmimg11_gif"></div>
                <div class="hxmimg11-img"></div>
            </div>
            <img src="" alt="" v-lazy="hxmimg12">
            <img src="" alt="" v-lazy="hxmimg13">
            <img src="" alt="" v-lazy="hxmimg14">
            <img src="" alt="" v-lazy="hxmimg15">
            <img src="" alt="" v-lazy="hxmimg16">
            <img src="" alt="" v-lazy="hxmimg17">
            <div v-lazy:background-image="hxmimg18" class="hxmimg18">
                <div v-lazy:background-image="hxmimg18_gif" class="hxmimg18_gif"></div>
            </div>
            <img src="" alt="" v-lazy="hxmimg19">
            <div v-lazy:background-image="hxmimg20" class="hxmimg20">
                <div v-lazy:background-image="hxmimg20_gif" class="hxmimg20_gif"></div>
            </div>
            <img src="" alt="" v-lazy="hxmimg21">
            <img src="" alt="" v-lazy="hxmimg22">
        </div>
        <!-- footer -->
        <div class="hxm-footer">
            <router-link to="/xfk">
                <div class="hxm-footerimg hxm-pre animated slowFlash"></div>
            </router-link>
            <router-link to="/dcp">
                <div class="hxm-footerimg hxm-next animated slowFlash"></div>
            </router-link>
        </div>
    </div>
</template>
<script>
export default {
    name: 'hxm',
    data() {
        return {
            hxmimg1: require("@/assets/images/hxmimg1.jpg"),
            hxmimg2: require("@/assets/images/hxmimg2.gif"),
            hxmimg3: require("@/assets/images/hxmimg3.jpg"),
            hxmimg4: require("@/assets/images/hxmimg4.jpg"),
            hxmimg5: require("@/assets/images/hxmimg5.jpg"),
            hxmimg6: require("@/assets/images/hxmimg6.jpg"),
            hxmimg6_gif: require("@/assets/images/hxmimg6_gif.gif"),
            hxmimg7: require("@/assets/images/hxmimg7.jpg"),
            hxmimg8: require("@/assets/images/hxmimg8.jpg"),
            hxmimg8_gif: require("@/assets/images/hxmimg9_gif.gif"),
            hxmimg9: require("@/assets/images/hxmimg9.jpg"),
            hxmimg9_gif: require("@/assets/images/hxmimg8_gif.gif"),
            hxmimg10: require("@/assets/images/hxmimg10.jpg"),
            hxmimg10_gif: require("@/assets/images/hxmimg10_gif.gif"),
            hxmimg11: require("@/assets/images/hxmimg11.jpg"),
            hxmimg11_gif: require("@/assets/images/hxmimg11_gif.gif"),
            hxmimg12: require("@/assets/images/hxmimg12.jpg"),
            hxmimg13: require("@/assets/images/hxmimg13.jpg"),
            hxmimg14: require("@/assets/images/hxmimg14.jpg"),
            hxmimg15: require("@/assets/images/hxmimg15.jpg"),
            hxmimg16: require("@/assets/images/hxmimg16.jpg"),
            hxmimg17: require("@/assets/images/hxmimg17.jpg"),
            hxmimg18: require("@/assets/images/hxmimg18.jpg"),
            hxmimg18_gif: require("@/assets/images/hxmimg18_gif.gif"),
            hxmimg19: require("@/assets/images/hxmimg19.jpg"),
            hxmimg20: require("@/assets/images/hxmimg20.jpg"),
            hxmimg20_gif: require("@/assets/images/hxmimg20_gif.gif"),
            hxmimg21: require("@/assets/images/hxmimg21.jpg"),
            hxmimg22: require("@/assets/images/hxmimg22.jpg"),

        }
    },
    methods: {}
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.hxm-ban {
    width: 18.75rem;
    height: 27.7rem;
    position: relative;
    background: url(../assets/images/hxm-ban.jpg) no-repeat;
    background-size: 100% 100%;
}

.hxm-banimg1 {
    width: 3.25rem;
    height: 2.075rem;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -1.625rem;
    background: url(../assets/images/hxm-banimg1.png) no-repeat;
    background-size: 100% 100%;
}

.hxm-banimg2 {
    width: 13.15rem;
    height: 3.725rem;
    position: absolute;
    top: 2.8rem;
    left: 2.95rem;
    background: url(../assets/images/hxm-banimg2.png) no-repeat;
    background-size: 100% 100%;
    animation-delay: 0.4s;
    -webkit-animation-delay: 0.4s;
}

.hxm-banimg3 {
    width: 12.9rem;
    height: 1.475rem;
    position: absolute;
    top: 7.15rem;
    left: 2.95rem;
    background: url(../assets/images/hxm-banimg3.png) no-repeat;
    background-size: 100% 100%;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-delay: 0.8s;
    -webkit-animation-delay: 0.8s;
}


/*content*/

.hxmimg2 {
    width: 18.75rem;
    height: 10.5rem;
    background-size: 100% 100%;
}
.hxmimg6 {
    width: 18.75rem;
    height: 9.75rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg6_gif{
    width: 17.25rem;
    height: 9.75rem;
    background-size: 100% 100%;
    position: absolute;
    left: 50%;
    margin-left: -8.625rem;
    top: 0;
}
.hxmimg8 {
    width: 18.75rem;
    height: 8.55rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg8_gif{
    width: 10.375rem;
    height: 7.725rem;
    background-size: 100% 100%;
    position: absolute;
    left: 7.375rem;
    top: 0.275rem;
}
.hxmimg8-img{
    width: 0.8rem;
    height: 0.8rem;
    position: absolute;
    left: 6.975rem;
    top: 3.8rem;
    background: url(../assets/images/hxmimg-img.png) no-repeat;
    background-size: 100% 100%;
    z-index: 99;
}
.hxmimg9 {
    width: 18.75rem;
    height: 8.4rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg9_gif{
    width: 10.375rem;
    height: 7.725rem;
    background-size: 100% 100%;
    position: absolute;
    left: 1.0rem;
    top: 0;
}
.hxmimg9-img{
    width: 0.8rem;
    height: 0.8rem;
    position: absolute;
    left: 10.975rem;
    top: 3.45rem;
    background: url(../assets/images/hxmimg-img.png) no-repeat;
    background-size: 100% 100%;
    z-index: 99;
}
.hxmimg10 {
    width: 18.75rem;
    height: 8.275rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg10_gif{
    width: 10.375rem;
    height: 7.725rem;
    background-size: 100% 100%;
    position: absolute;
    left: 7.375rem;
    top: 0;
}
.hxmimg10-img{
    width: 0.8rem;
    height: 0.8rem;
    position: absolute;
    left: 6.975rem;
    top: 3.45rem;
    background: url(../assets/images/hxmimg-img.png) no-repeat;
    background-size: 100% 100%;
    z-index: 99;
}
.hxmimg11 {
    width: 18.75rem;
    height: 7.725rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg11_gif{
    width: 10.375rem;
    height: 7.725rem;
    background-size: 100% 100%;
    position: absolute;
    left: 1.0rem;
    top: 0;
}
.hxmimg11-img{
    width: 0.8rem;
    height: 0.8rem;
    position: absolute;
    left: 10.975rem;
    top: 3.45rem;
    background: url(../assets/images/hxmimg-img.png) no-repeat;
    background-size: 100% 100%;
    z-index: 99;
}
.hxmimg18 {
    width: 18.75rem;
    height: 9.7rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg18_gif{
    width: 17.25rem;
    height: 9.7rem;
    background-size: 100% 100%;
    position: absolute;
    left: 50%;
    margin-left: -8.625rem;
    top: 0;
}
.hxmimg20 {
    width: 18.75rem;
    height: 9.725rem;
    background-size: 100% 100%;
    position: relative;
}
.hxmimg20_gif{
    width: 17.25rem;
    height: 9.725rem;
    background-size: 100% 100%;
    position: absolute;
    left: 50%;
    margin-left: -8.625rem;
    top: 0;
}
/*footer*/

.hxm-footer {
    width: 18.75rem;
    height: 5.6rem;
    background: #fff;
    position: relative;
}
.hxm-footerimg{
    width: 3.8rem;
    height: 2.425rem;
    position: absolute;
    top: 0;
}
.hxm-pre{
    left: 3.15rem;
    background: url(../assets/images/hxm-pre.png) no-repeat;
    background-size: 100% 100%;
}
.hxm-next{
    right: 3.15rem;
    background: url(../assets/images/hxm-next.png) no-repeat;
    background-size: 100% 100%;
}
</style>
