<template>
    <div id="app">
        <Music v-show="$router.history.current.path !== '/'" :pos="{top: '0.875rem', left: '0.925rem'}" src="http://audio.cnnjidc.com/qianqiancha/qqcsj.mp3"/>
        <router-view></router-view>
    </div>
</template>
<script>
import Music from "@/components/Music";
import token from "./assets/token.js";
import { jsonP } from "./assets/utils.js";
import { share } from "./assets/share.js";
import shareInfo from "./assets/shareinfo.js";
import "./assets/css/reset.css";
import "./assets/css/common.css";
import "./assets/css/user-animate.css";
import "./assets/css/swiper-3.4.2.min.css";
export default {
  name: "app",
  data() {
    return {};
  },
  mounted: function() {
    share({
      shareURL: shareInfo.shareURL,
      title: shareInfo.app.title,
      desc: shareInfo.app.desc,
      imgUrl: shareInfo.app.imgUrl
    });
    jsonP(token);
  },
  components: {
    Music
  }
};
</script>
<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
