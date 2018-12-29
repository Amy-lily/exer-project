<template>
    <router-link to="/home">
        <div class="cover">
            <div class="cover-logo animated slowFlash"></div>
            <div class="cover-word1-wrap animated lineHeight">
            <div class="cover-word1"></div>
            </div>
            <div class="cover-word2 animated zoomIn"></div>
            <div class="cover-word3 animated fadeIn"></div>
            <div class="cover-btn animated flicker" @click="home"></div>
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
  },
  methods: {
    home: function() {
      let this_ = this;
      this_.$router.push("home");
    }
  },
  beforeDestroy: function() {}
};
</script>
<style scoped>
.cover {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  background: url(../assets/images/cover-bg.jpg) no-repeat;
  background-size: cover;
}
.cover-logo {
  width: 3.35rem;
  height: 1.925rem;
  position: absolute;
  top: 0.9rem;
  left: 2.5rem;
  background: url(../assets/images/cover-logo.png) no-repeat;
  background-size: 100% 100%;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
}
.cover-word1-wrap {
  width: 14.15rem;
  height: 2.425rem;
  position: absolute;
  top: 3.35rem;
  left: 2.25rem;
  overflow: hidden;
  animation-duration: 15s;
  -webkit-animation-duration: 15s;
}
.cover-word1 {
  width: 14.15rem;
  height: 2.425rem;
  position: absolute;
  top: 0;
  left: 0;
  background: url(../assets/images/cover-word1.png) no-repeat;
  background-size: 100% 100%;
}
.cover-word2 {
  width: 3.3rem;
  height: 2.65rem;
  position: absolute;
  top: 6.25rem;
  left: 2.375rem;
  background: url(../assets/images/cover-word2.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 1.5s;
  -webkit-animation-delay: 1.5s;
}
.cover-word3 {
  width: 10.475rem;
  height: 2.6rem;
  position: absolute;
  top: 6.325rem;
  left: 6.025rem;
  background: url(../assets/images/cover-word3.png) no-repeat;
  background-size: 100% 100%;
  animation-delay: 2s;
  -webkit-animation-delay: 2s;
}
.cover-btn {
  width: 7.225rem;
  height: 1.3rem;
  position: absolute;
  top: 26.45rem;
  left: 50%;
  margin-left: -3.612rem;
  background: url(../assets/images/cover-btn.png) no-repeat;
  background-size: 100% 100%;
}
</style>
