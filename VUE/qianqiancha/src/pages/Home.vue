<template>
    <div class="home">
        <div class="home-title animated pulse"></div>
        <router-link to="/xfk"> <div class="home-btn home-btn1 animated flipInY"></div></router-link>
        <router-link to="/hxm"><div class="home-btn home-btn2 animated flipInY"></div></router-link>
        <router-link to="/dcp"><div class="home-btn home-btn3 animated flipInY"></div></router-link>
        <router-link to="/ydx"><div class="home-btn home-btn4 animated flipInY"></div></router-link>
        <router-link to="/qcb"><div class="home-btn home-btn5 animated flipInY"></div></router-link>
    </div>
</template>
<script>
export default {
    name: 'home',
    data() {
        return {

        }
    }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.home {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    background: url(../assets/images/home-bg.jpg) no-repeat;
    background-size: cover;
}
.home-title{
    width: 4.675rem;
    height: 2.7rem;
    position: absolute;
    top: 1.55rem;
    left: 50%;
    margin-left: -2.337rem;
    background: url(../assets/images/home-titile.png) no-repeat;
    background-size: 100% 100%;
}
.home-btn{
    width: 8.65rem;
    height: 2.2rem;
    position: absolute;
    animation-duration: 2s;
    -webkit-animation-duration: 2s;
}
.home-btn1{
    top: 6.5rem;
    left: 2.8rem;
    background: url(../assets/images/home-btn1.png) no-repeat;
    background-size: 100% 100%;
}
.home-btn2{
    height: 2.075rem;
    top: 9.675rem;
    left:7.4rem;
    background: url(../assets/images/home-btn2.png) no-repeat;
    background-size: 100% 100%;
    animation-delay: 0.7s;
    -webkit-animation-delay: 0.7s;
}
.home-btn3{
    height: 2.1rem;
    top: 13.05rem;
    left: 2.8rem;
    background: url(../assets/images/home-btn3.png) no-repeat;
    background-size: 100% 100%;
    animation-delay: 1.4s;
    -webkit-animation-delay: 1.4s;
}
.home-btn4{
    height: 2rem;
    top: 16.15rem;
    left:7.4rem;
    background: url(../assets/images/home-btn4.png) no-repeat;
    background-size: 100% 100%;
    animation-delay: 2.1s;
    -webkit-animation-delay: 2.1s;
}
.home-btn5{
    height: 2.1rem;
    top: 19.25rem;
    left: 2.8rem;
    background: url(../assets/images/home-btn5.png) no-repeat;
    background-size: 100% 100%;
    animation-delay: 2.8s;
    -webkit-animation-delay: 2.8s;
}


@keyframes flipInRight {
    from {
        opacity: 0;
        -webkit-transform: perspective(-400px) rotateY(-90deg) scale3d(1.2, 1.2, 1.2);
        transform: perspective(-400px) rotateY(-90deg) scale3d(1.2, 1.2, 1.2);
    }
    50% {
        opacity: 1;
        -webkit-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
        animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
        -webkit-transform: perspective(400px) rotateY(20deg) scale3d(1, 1, 1);
        transform: perspective(-400px) rotateY(20deg) scale3d(1, 1, 1);
    }
    to {
        -webkit-transform: perspective(-400px) rotateY(0deg) scale3d(1, 1, 1);
        transform: perspective(-400px) rotateY(0deg) scale3d(1, 1, 1);
    }
}

@-webkit-keyframes flipInRight {
    from {
        opacity: 0;
        -webkit-transform: perspective(-400px) rotateY(-90deg) scale3d(1.2, 1.2, 1.2);
        transform: perspective(-400px) rotateY(-90deg) scale3d(1.2, 1.2, 1.2);
    }
    50% {
        opacity: 1;
        -webkit-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
        animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
        -webkit-transform: perspective(400px) rotateY(20deg) scale3d(1, 1, 1);
        transform: perspective(-400px) rotateY(20deg) scale3d(1, 1, 1);
    }
    to {
        -webkit-transform: perspective(-400px) rotateY(0deg) scale3d(1, 1, 1);
        transform: perspective(-400px) rotateY(0deg) scale3d(1, 1, 1);
    }
}

.flipInRight {
    -webkit-animation-name: flipInRight;
    animation-name: flipInRight;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
}

</style>
