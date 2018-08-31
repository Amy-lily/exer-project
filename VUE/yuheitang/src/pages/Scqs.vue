<template>
    <div class="scqs">
          <!-- ml  -->
        <router-link to="/home">
            <div class="ml-word"></div>
            <div class="ml-btn"></div>
        </router-link>
        <!-- banner  -->
        <div class="scqs-ban">
            <div class="scqs-word1 animated jackInTheBox"></div>
            <div class="scqs-word2 animated fadeIn"></div>
            <div class="scqs-jt animated topGuide"></div>
        </div>
        <div class="img-box">
            <img src="" alt="" v-lazy="scqsimg1">
            <img src="" alt="" v-lazy="scqsimg2">
            <img src="" alt="" v-lazy="scqsimg3">
            <img src="" alt="" v-lazy="scqsimg4">
            <img src="" alt="" v-lazy="scqsimg5">
            <img src="" alt="" v-lazy="scqsimg6">
            <div class="scqs-gif1">
                <img src="" alt="" v-lazy="scqsimg7">
            </div>
            <img src="" alt="" v-lazy="scqsimg8">
            <img src="" alt="" v-lazy="scqsimg9">
            <img src="" alt="" v-lazy="scqsimg10">
            <img src="" alt="" v-lazy="scqsimg11">
            <img src="" alt="" v-lazy="scqsimg12">
            <img src="" alt="" v-lazy="scqsimg13">
            <img src="" alt="" v-lazy="scqsimg14">
        </div>
        <!-- footer -->
         <div class="footer">
           <router-link to="/xmys">
               <div class="footer-con">
                   <div class="scqs-word animated slowFlash"></div>
                   <div class="scqs-footer-circle"></div>
                   <div class="footer-jt scqs-footer-jt animated rightGuide"></div>
               </div>
           </router-link> 
        </div>
    </div>
</template>
<script>
export default {
  name: "scqs",
  data() {
    return {
      scqsimg1: require("@/assets/images/scqs-img1.jpg"),
      scqsimg2: require("@/assets/images/scqs-img2.jpg"),
      scqsimg3: require("@/assets/images/scqs-img3.jpg"),
      scqsimg4: require("@/assets/images/scqs-img4.jpg"),
      scqsimg5: require("@/assets/images/scqs-img5.jpg"),
      scqsimg6: require("@/assets/images/scqs-img6.jpg"),
      scqsimg7: require("@/assets/images/scqs-img7.gif"),
      scqsimg8: require("@/assets/images/scqs-img8.jpg"),
      scqsimg9: require("@/assets/images/scqs-img9.jpg"),
      scqsimg10: require("@/assets/images/scqs-img10.jpg"),
      scqsimg11: require("@/assets/images/scqs-img11.jpg"),
      scqsimg12: require("@/assets/images/scqs-img12.jpg"),
      scqsimg13: require("@/assets/images/scqs-img13.jpg"),
      scqsimg14: require("@/assets/images/scqs-img14.jpg")
    };
  }
};
</script>
<style scoped>
.scqs-ban {
  width: 18.75rem;
  height: 28.1rem;
  position: relative;
  overflow: hidden;
  background: url(../assets/images/scqs-ban.jpg) no-repeat;
  background-size: 100% 100%;
}
.scqs-word1 {
  width: 3.625rem;
  height: 1.775rem;
  position: absolute;
  top: 4.35rem;
  left: 1.95rem;
  background: url(../assets/images/scqs-word1.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 2s;
  -webkit-animation-duration: 2s;
}
.scqs-word2 {
  width: 10.95rem;
  height: 2.5rem;
  position: absolute;
  top: 20.05rem;
  left: 4.575rem;
  background: url(../assets/images/scqs-word2.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 1s;
  -webkit-animation-delay: 1s;
}
.scqs-jt {
  width: 0.575rem;
  height: 1.575rem;
  position: absolute;
  top: 25.075rem;
  left: 50%;
  margin-left: 0.287rem;
  background: url(../assets/images/scqs-jt.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
}
.scqs-gif1{
    width: 18.75rem;
    height: 10.675rem;
    position: relative;
    background-color: #fff;
}
.scqs-gif1 img{
    display: block;
    width: 17.25rem;
    height: 10.625rem;
    margin:0 auto;
}


/* footer */
.footer {
  width: 18.75rem;
  height: 5.575rem;
  background: #f1f2f2;
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
.scqs-word {
  width: 7.65rem;
  height: .675rem;
  position: absolute;
  top: 50%;
  margin-top: -0.3375rem;
  left: 1.55rem;
  background: url(../assets/images/scqs-bottom.png) no-repeat;
  background-size: 100% 100%;
}
.scqs-footer-circle {
  width: 0.6rem;
  height: 0.6rem;
  position: absolute;
  top:50%;
  margin-top: -0.3rem;
  right: 1.625rem;
  background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
  background-size: 100% 100%;
}
.scqs-footer-jt {
  width: 0.925rem;
  height: 0.275rem;
  position: absolute;
  top: 50%;
  margin-top: -0.16rem;
  right: 1rem;
  background: url(../assets/images/ppgs-bottom-jt.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
}
</style>

