<template>
<div class="music-wrap" :class="{ hide: !isMusicShow }">
  <div id="music" @click="music" :style="pos">
    <div id="btn" :class="{ on: isMusicPlay }" :style="pos"></div>
    <div class="music-log" :class="{show}"></div>
    <audio id="media" loop="loop" preload="auto" :src="src"></audio>
  </div>
</div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import { once } from "../assets/utils.js";
import bus from "../assets/eventBus";

export default {
  name: "music",
  props: {
    pos: { required: true },
    src: { required: true }
  },
  data() {
    return {
      Media: null,
      show: true
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
        this.show = true;
      } else {
        this.userActionPause(true);
        this.show = false;
      }
      this.musicActionPlay(!this.isMusicPlay);
    }
  },
  mounted: function() {
    var _self = this;
    _self.Media = document.getElementById("media");

    bus.$on("pauseMusic", function(msg) {
      //监听pauseMusic事件，停止音乐播放，用于点开视频时，全局音乐静音
      _self.Media.pause();
      _self.musicActionPlay(false);
      _self.show = false;
    });
    bus.$on("playMusic", function(msg) {
      //监听playMusic事件，播放音乐
      _self.Media.play();
      _self.musicActionPlay(true);
      _self.show = true;
    });

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

    
    var pageName = this.$route.name;
    if (pageName == "Feiye") {
      bus.$on("pauseMusic");
      once(document, "touchstart", function() {
        _self.Media.pause();
        _self.musicActionPlay(false);
      });
      this.$nextTick(function() {
        document.addEventListener(
          "WeixinJSBridgeReady",
          function() {
            document.getElementById("media").pause();
          },
          false
        );
      });
    } else {
      bus.$on("playMusic");
    }
  },
  watch: {
    isMusicPlay: function() {
      this.isMusicPlay ? this.Media.play() : this.Media.pause();
    },
    $route(to, from) {
      if (to !== "Feiye") {
        bus.$on("playMusic");
      } else {
        bus.$on("pauseMusic");
      }
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
  width: 1.5rem;
  height: 1.5rem;
  z-index: 999;
}

#music #btn {
  width: 1.5rem;
  height: 1.5rem;
  position: fixed;
  z-index: 999;
  background: url("../assets/images/music.png") no-repeat 0 0;
  background-size: 100% 100%;
}
.music-log {
  width: 2rem;
  height: 2rem;
  position: fixed;
  top: 0.3rem;
  left: 1rem;
  display: none;
  background: url(../assets/images/music-dec.gif) no-repeat;
  background-size: 100% 100%;
}
.show {
  display: block;
}
#music .on {
  -webkit-animation: music-rotating 1.2s linear infinite;
  animation: music-rotating 1.2s linear infinite;
}
</style>
