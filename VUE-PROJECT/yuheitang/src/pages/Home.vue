<template>
  <div class="home">
    <div class="home-title"></div>
   <router-link to="/ppgs"> 
     <div class="home-bottom-word"></div>
     <div class="home-btns home-btns1" :class="{'checked':index==0}">
      <div class="home-btn home-btn1 animated fadeInUp"></div>    
      <div class="home-foot"></div>
      <div class="home-jt animated newGuide"></div>
    </div>
    </router-link>
   <router-link to="/scqs"> 
    <div class="home-btns home-btns2" :class="{'checked':index==1}">
      <div class="home-btn home-btn2 animated fadeInUp"></div>    
      <div class="home-foot "></div>
      <div class="home-jt animated newGuide"></div>
    </div>
   </router-link>
   <router-link to="/xmys"> 
    <div class="home-btns home-btns3" :class="{'checked':index==2}">
      <div class="home-btn home-btn3 animated fadeInUp"></div>    
      <div class="home-foot"></div>
      <div class="home-jt animated newGuide"></div>
    </div>
   </router-link>
   <router-link to="/cpys"> 
    <div class="home-btns home-btns4" :class="{'checked':index==3}">
      <div class="home-btn home-btn4 animated fadeInUp"></div>    
      <div class="home-foot"></div>
      <div class="home-jt animated newGuide"></div>
    </div>
   </router-link>   
   <router-link to="/kdfa"> 
    <div class="home-btns home-btns5" :class="{'checked':index==4}">
      <div class="home-btn home-btn5 animated fadeInUp"></div>    
      <div class="home-foot"></div>
      <div class="home-jt animated newGuide"></div>
    </div>
   </router-link>
   <router-link to="/fwzn"> 
    <div class="home-btns home-btns6" :class="{'checked':index==5}">
      <div class="home-btn home-btn6 animated fadeInUp"></div>    
      <div class="home-foot"></div>
      <div class="home-jt animated newGuide"></div>
    </div>
   </router-link>
   <router-link to="/lxwm"> 
    <div class="home-btns home-btns7" :class="{'checked':index==6}">
      <div class="home-btn home-btn7 animated fadeInUp"></div>    
      <div class="home-foot"></div>
      <div class="home-jt animated newGuide"></div>
    </div>
   </router-link>
  </div>

</template>

<script>
export default {
  name: "home",
  data() {
    return {
      index: 0
    };
  },
  mounted: function() {
    let homeFoot = document.getElementsByClassName("home-foot");
    setInterval(() => {
      
      this.index = (this.index + 1) % 7;
      if(this.index>7){
        this.index=0;
      }
    }, 1000);
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.home {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  background: url(../assets/images/home-bg.jpg) no-repeat center 0;
  background-size: cover;
}
.home-bottom-word{
  width: 18.75rem;
  height: 4.65rem;
  position: absolute;
  top: 33.75rem;
  left: 0;
  background: url(../assets/images/home-bottom-word.png) no-repeat;
  background-size: 100% 100%;
}
.home-title {
  width: 10.525rem;
  height: 1.875rem;
  position: absolute;
  top: 2.375rem;
  left: 50%;
  margin-left: -5.262rem;
  background: url(../assets/images/home-title.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns1 {
  top: 5.675rem;
}
.home-btns {
  width: 12.75rem;
  height: 2.3rem;
  position: absolute;
  left: 50%;
  margin-left: -6.375rem;
}
.home-btn {
  width: 7.95rem;
  height: 2.3rem;
  position: absolute;
  left: 3.6rem;
  top: 0;
}
.home-foot {
  width: 1.05rem;
  height: 1.225rem;
  position: absolute;
  top: 0.625rem;
  left: 1.325rem;
  background: url(../assets/images/home-foot.png) no-repeat;
  background-size: 100% 100%;
}
.checked .home-foot {
  background: url(../assets/images/home-foot-active.png) no-repeat;
  background-size: 100% 100%;
}
.checked .home-jt{
  display: block;
}
.home-jt {
  width: 1.65rem;
  height: 0.475rem;
  position: absolute;
  top:.95rem;
  right: .625rem;
  background: url(../assets/images/home-jt.png) no-repeat;
  background-size: 100% 100%;
  z-index: 2;
  display: none;
}
.home-btn1 {
  background: url(../assets/images/home-btn1.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns2 {
  top: 8.8rem;
}
.home-btn2 {
  animation-delay: 0.5s;
  -webkit-animation-delay: 0.5s;
  background: url(../assets/images/home-btn2.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns3 {
  top: 11.975rem;
}
.home-btn3 {
  animation-delay: 1s;
  -webkit-animation-delay: 1s;
  background: url(../assets/images/home-btn3.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns4 {
  top: 15.1rem;
}
.home-btn4 {
  animation-delay: 1.5s;
  -webkit-animation-delay: 1.5s;
  background: url(../assets/images/home-btn4.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns5 {
  top: 18.25rem;
}
.home-btn5 {
  animation-delay: 2s;
  -webkit-animation-delay: 2s;
  background: url(../assets/images/home-btn5.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns6 {
  top: 21.4rem;
}
.home-btn6 {
  animation-delay: 2.5s;
  -webkit-animation-delay: 2.5s;
  background: url(../assets/images/home-btn6.png) no-repeat;
  background-size: 100% 100%;
}
.home-btns7 {
  top: 24.6rem;
}
.home-btn7 {
  animation-delay: 3s;
  -webkit-animation-delay: 3s;
  background: url(../assets/images/home-btn7.png) no-repeat;
  background-size: 100% 100%;
}


@-webkit-keyframes newGuide {
    0% {
        transform: translateX(0px);
        -webkit-transform: translateX(0px);
    }
    100% {
        transform: translateX(-5px);
        -webkit-transform: translateX(-5px);
    }
}

@keyframes newGuide {
    0% {
        transform: translateX(0px);
        -webkit-transform: translateX(0px);
    }
    100% {
        transform: translateX(-5px);
        -webkit-transform: translateX(-5px);
    }
}

.newGuide {
    -webkit-animation-name: newGuide;
    animation-name: newGuide;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;
}

</style>
