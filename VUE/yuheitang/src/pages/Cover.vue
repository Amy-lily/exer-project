<template>
  <router-link to="/home" class="cover">
    <div class="cover" id="cover">
        <div class="cover-img1 animated rotateInUpRight"></div>
        <div class="cover-img2 animated rotateInDownRight"></div>
        <div class="cover-logo animated fadeInDown"></div>
        <div class="cover-word1 animated puffIn-sma"></div>
        <div class="cover-word2 animated dish"></div>
        <div class="cover-word3 animated fadeIn"></div>
        <div class="cover-jt animated topGuide"></div>
    </div>
  </router-link>  
</template>

<script>
export default {
  name: "cover",
  data() {
    return {};
  },
  mounted: function() {
    var obj = document.getElementById("cover");
    // console.log(obj)
    obj.addEventListener(
      "touchmove",
      function(event) {
        // 如果这个元素的位置内只有一个手指的话
        if (event.targetTouches.length == 1) {
          event.preventDefault(); // 阻止浏览器默认事件，重要
          var touch = event.targetTouches[0];
          window.location.href = "#/home";
        }
      },
      false
    );
  },
  beforeDestroy: function() {
    clearTimeout(this.t);
  }
};
</script>


<style scoped>
.cover {
  display: block;
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  background: url(../assets/images/cover-bg.jpg) no-repeat;
  background-size: cover;
}
.cover-img1 {
  width: 15.525rem;
  height: 25.5rem;
  position: absolute;
  top: 2.25rem;
  left: 50%;
  margin-left: -7.762rem;
  background: url(../assets/images/cover-img1.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
}
.cover-img2 {
  width: 14.15rem;
  height: 24.1rem;
  position: absolute;
  top: 3rem;
  left: 50%;
  margin-left: -7.075rem;
  background: url(../assets/images/cover-img2.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
}
.cover-logo {
  width: 2.1rem;
  height: 4.05rem;
  position: absolute;
  top: 3.975rem;
  left: 3.425rem;
  background: url(../assets/images/cover-logo.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
  animation-delay: 0.5s;
  -webkit-animation-delay: 0.5s;
}
.cover-word1 {
  width: 12.1rem;
  height: 3.475rem;
  position: absolute;
  top: 17.9rem;
  left: 50%;
  margin-left: -6.05rem;
  background: url(../assets/images/cover-word1.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 1s;
  -webkit-animation-delay: 1s;
}
.cover-word2 {
  width: 4.7rem;
  height: 0.875rem;
  position: absolute;
  top: 22.05rem;
  left: 50%;
  margin-left: -2.35rem;
  background: url(../assets/images/cover-word2.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 1.5s;
  -webkit-animation-delay: 1.5s;
}
.cover-word3 {
  width: 7.925rem;
  height: 1.8rem;
  position: absolute;
  top: 23.825rem;
  left: 50%;
  margin-left: -3.962rem;
  background: url(../assets/images/cover-word3.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 2s;
  -webkit-animation-delay: 2s;
}
.cover-jt{
  width: .85rem;
  height: .6rem;
  position: absolute;
  top: 26.2rem;
  left: 50%;
  margin-left: -0.425rem;
  background: url(../assets/images/cover-jt.png) no-repeat;
  background-size: 100% 100%;
}
</style>
