<template>
    <div class="xfk">
    	<!-- 目录   -->
        <router-link to="/home">
            <div class="ml-btn animated microFlash loop"></div>
        </router-link>
        <!-- banner -->
        <div class="xfk-ban">
            <div class="xfkban-logo animated flipInX"></div>
            <div class="xfkban-word1 animated popIn"></div>
            <div class="xfkban-word2 animated fadeIn"></div>
            <div class="xfk-bangif"></div>
        </div>
        <!-- img-box -->
        <div class="img-box">
            <img src="" alt="" v-lazy="xfkimg1">
        	<img src="" alt="" v-lazy="xfkimg2">
        	<img src="" alt="" v-lazy="xfkimg3">
        	<img src="" alt="" v-lazy="xfkimg4">
        	<img src="" alt="" v-lazy="xfkimg5">
        	<img src="" alt="" v-lazy="xfkimg6">
        	<img src="" alt="" v-lazy="xfkimg7">
        	<img src="" alt="" v-lazy="xfkimg8">
        	<img src="" alt="" v-lazy="xfkimg9">
        	<img src="" alt="" v-lazy="xfkimg10">
        	<img src="" alt="" v-lazy="xfkimg11">
        	<img src="" alt="" v-lazy="xfkimg12">
        	<img src="" alt="" v-lazy="xfkimg13">
        	<img src="" alt="" v-lazy="xfkimg14">
        	<img src="" alt="" v-lazy="xfkimg15">
        	<img src="" alt="" v-lazy="xfkimg16">
        	<img src="" alt="" v-lazy="xfkimg17">
        	<img src="" alt="" v-lazy="xfkimg18">
        	<img src="" alt="" v-lazy="xfkimg19">
        	<img src="" alt="" v-lazy="xfkimg20">
        </div>
        <!-- footer -->
        <div class="xfksub-footer">
            <router-link to="/hxm">
                <div class="xfksub-next animated slowFlash"></div>
            </router-link>
        </div>
    </div>
</template>
<script>
export default {
    name: 'xfk',
    data() {
        return {

            xfkimg1:require("@/assets/images/xfkimg1.jpg"),
            xfkimg2:require("@/assets/images/xfkimg2.jpg"),
            xfkimg3:require("@/assets/images/xfkimg3.jpg"),
            xfkimg4:require("@/assets/images/xfkimg4.jpg"),
            xfkimg5:require("@/assets/images/xfkimg5.jpg"),
            xfkimg6:require("@/assets/images/xfkimg6.jpg"),
            xfkimg7:require("@/assets/images/xfkimg7.jpg"),
            xfkimg8:require("@/assets/images/xfkimg8.jpg"),
            xfkimg9:require("@/assets/images/xfkimg9.jpg"),
            xfkimg10:require("@/assets/images/xfkimg10.jpg"),
            xfkimg11:require("@/assets/images/xfkimg11.jpg"),
            xfkimg12:require("@/assets/images/xfkimg12.jpg"),
            xfkimg13:require("@/assets/images/xfkimg13.jpg"),
            xfkimg14:require("@/assets/images/xfkimg14.jpg"),
            xfkimg15:require("@/assets/images/xfkimg15.jpg"),
            xfkimg16:require("@/assets/images/xfkimg16.jpg"),
            xfkimg17:require("@/assets/images/xfkimg17.jpg"),
            xfkimg18:require("@/assets/images/xfkimg18.jpg"),
            xfkimg19:require("@/assets/images/xfkimg19.jpg"),
            xfkimg20:require("@/assets/images/xfkimg20.jpg"),
        }
    },
    methods: {}
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.xfk-ban {
    width: 18.75rem;
    height: 30.15rem;
    position: relative;
    background: url(../assets/images/xfk-ban.jpg) no-repeat;
    background-size: 100% 100%;
}
.xfkban-logo{
    width: 3.25rem;
    height: 2.075rem;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -1.625rem;
    background: url(../assets/images/sub-logo.png) no-repeat;
    background-size: 100% 100%;
}
.xfkban-word1{
    width: 14.25rem;
    height: 3.875rem;
    position: absolute;
    top: 3.15rem;
    left: 50%;
    margin-left: -7.225rem;
    background: url(../assets/images/sub-word1.png) no-repeat;
    background-size: 100% 100%;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-delay: 0.4s;
    -webkit-animation-delay: 0.4s;
}
.xfkban-word2{
    width: 13.95rem;
    height: 1.675rem;
    position: absolute;
    top: 7.65rem;
    left: 50%;
    margin-left: -7.225rem;
    background: url(../assets/images/sub-word2.png) no-repeat;
    background-size: 100% 100%;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-delay: 0.8s;
    -webkit-animation-delay: 0.8s;
}
.xfk-bangif{
	width: 14.35rem;
	height: 8.975rem;
	position: absolute;
	left: 2.1rem;
	top: 11.1rem;
	background: url(../assets/images/xfk-bangif.gif) no-repeat;
    background-size: 100% 100%;
}
/*footer*/
.xfksub-footer{
    width: 18.75rem;
    height: 5.6rem;
    background: #fff;
    position: relative;
}
.xfksub-next{
	width: 3.5rem;
    height: 2.225rem;
    position:absolute;
    top: 0;
    left: 50%;
    margin-left: -1.75rem;
    background: url(../assets/images/sub-next.png) no-repeat;
    background-size: 100% 100%;
}
</style>
