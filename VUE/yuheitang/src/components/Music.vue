<template>
<div class="music-wrap" :class="{ hide: !isMusicShow }">
  <div id="music" @click="music" :style="pos">
    <div id="btn" :class=" [{'on': isMusicPlay},{'off':!isMusicPlay},'btn'] " :style="pos"></div>
    <audio id="media" loop="loop" preload="auto" autoplay :src="src"></audio>
  </div>
</div>

</template>

<script>
import { mapGetters, mapActions } from "vuex";
import { once } from "../assets/utils.js";
export default {
  name: "music",
  props: ["pos", "src"],
  data() {
    return {
      Media: null
    };
  },
  computed: {
    ...mapGetters({
      isUserPause: "userPause",
      isMusicPlay: "musicPlay",
      isMusicShow: "musicShow"
    })
  },
  methods: {
    ...mapActions({
      userActionPause: "userActionPause",
      musicActionPlay: "musicActionPlay"
    }),

    music: function() {
      if (this.Media.paused) {
        this.userActionPause(false);
      } else {
        this.userActionPause(true);
      }
      this.musicActionPlay(!this.isMusicPlay);
    }
  },
  mounted: function() {
    var _self = this;
    _self.Media = document.getElementById("media");

    once(document, "touchstart", function() {
      _self.Media.play();
      _self.musicActionPlay(true);
    });

    this.$nextTick(function() {
      document.addEventListener(
        "WeixinJSBridgeReady",
        function() {
          document.getElementById("media").play();
        },
        false
      );
    });
  },
  watch: {
    isMusicPlay: function() {
      this.isMusicPlay ? this.Media.play() : this.Media.pause();
    }
  },
  beforeDestroy: function() {}
};
</script>


<style scoped>
@-webkit-keyframes music-rotating {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes music-rotating {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

#music {
  position: fixed;
  width: 1.7rem;
  height: 1.7rem;
  z-index: 999;
}
#music .btn {
  width: 1.7rem;
  height: 1.7rem;
  position: fixed;
  z-index: 999;
  background: url("../assets/images/music.png") no-repeat 0 0;
  background-size: 100% 100%;
}
#music .on {
  -webkit-animation: music-rotating 1.2s linear infinite;
  animation: music-rotating 1.2s linear infinite;
}
#music .off {
  background: url("../assets/images/music-off.png") no-repeat 0 0;
  background-size: 100% 100%;
}
</style>
