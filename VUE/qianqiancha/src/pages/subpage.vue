<template>
    <div class="subpage">
    	<!-- 目录   -->
        <router-link to="/home">
            <div class="ml-btn animated microFlash loop"></div>
        </router-link>
        <!-- banner -->
        <div class="sub-ban">
            <div class="ban-logo animated flipInX"></div>
            <div class="ban-word1 animated popIn"></div>
            <div class="ban-word2 animated fadeIn"></div>
            <div class="ban-gif-box">
                <div class="ban-gif"></div>
            </div>
        </div>
        <!-- img-box -->
        <div class="img-box">
            <!-- <img src="" alt="" v-lazy="subimg1">
        	<img src="" alt="" v-lazy="subimg2">
        	<img src="" alt="" v-lazy="subimg3">
        	<img src="" alt="" v-lazy="subimg4">
        	<img src="" alt="" v-lazy="subimg5">
        	<img src="" alt="" v-lazy="subimg6">
        	<img src="" alt="" v-lazy="subimg7">
        	<img src="" alt="" v-lazy="subimg8">
        	<img src="" alt="" v-lazy="subimg9">
        	<img src="" alt="" v-lazy="subimg10"> -->
        </div>
        <!-- footer -->
        <div class="sub-footer">
            <router-link to="/">
                <div class="btn sub-pre animated slowFlash"></div>
            </router-link>
            <router-link to="">
                <div class="btn sub-next animated slowFlash"></div>
            </router-link>
        </div>
    </div>
</template>
<script>
export default {
    name: 'subpage',
    data() {
        return {

            // subimg1:require("@/assets/images/sub-img1.jpg"),
            // subimg2:require("@/assets/images/sub-img2.jpg"),
            // subimg3:require("@/assets/images/sub-img3.jpg"),
            // subimg4:require("@/assets/images/sub-img4.jpg"),
            // subimg5:require("@/assets/images/sub-img5.jpg"),
            // subimg6:require("@/assets/images/sub-img6.jpg"),
            // subimg7:require("@/assets/images/sub-img7.jpg"),
            // subimg8:require("@/assets/images/sub-img8.jpg"),
            // subimg9:require("@/assets/images/sub-img9.jpg"),
            // subimg10:require("@/assets/images/sub-img10.jpg"),
        }
    },
    methods: {}
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.sub-ban {
    width: 18.75rem;
    height: 30.15rem;
    position: relative;
    background: url(../assets/images/sub-ban.jpg) no-repeat;
    background-size: 100% 100%;
}
.ban-logo{
    width: 3.25rem;
    height: 2.075rem;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -1.625rem;
    background: url(../assets/images/sub-logo.png) no-repeat;
    background-size: 100% 100%;
}
.ban-word1{
    width: 14.25rem;
    height: 3.875rem;
    position: absolute;
    top: 3.15rem;
    left: 50%;
    margin-left: -7.225rem;
    background: url(../assets/images/sub-word1.png) no-repeat;
    background-size: 100% 100%;
}
.ban-word2{
    width: 13.95rem;
    height: 1.675rem;
    position: absolute;
    top: 7.65rem;
    left: 50%;
    margin-left: -7.225rem;
    background: url(../assets/images/sub-word2.png) no-repeat;
    background-size: 100% 100%;
}
.ban-gif-box{
    width: 15.925rem;
    height: 13.65rem;
    position: absolute;
    top: 10.2rem;
    left:50%;
    margin-left: -7.962rem;
    background: url(../assets/images/sub-gif-box.png) no-repeat;
    background-size: 100% 100%;
}
/*footer*/
.sub-footer{
    width: 18.75rem;
    height: 7.5rem;
    background: orange;
    position: relative;
}
.btn{
    width: 3.5rem;
    height: 2.225rem;
    position:absolute;
    bottom: 3.375rem;
    left: 50%;
    margin-left: -1.75rem;
}
.sub-next{
    background: url(../assets/images/sub-next.png) no-repeat;
    background-size: 100% 100%;
}
</style>
