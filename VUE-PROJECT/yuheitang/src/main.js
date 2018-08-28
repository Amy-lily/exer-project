import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store/store'
import VueLazyload from 'vue-lazyload'
import VueWechatTitle from 'vue-wechat-title'
// swiper
import VueAwesomeSwiper from 'vue-awesome-swiper'
Vue.use(VueAwesomeSwiper)

Vue.use(VueWechatTitle)
// 如需使用视频,开启以下两项
import VueVideoPlayer from 'vue-video-player'
Vue.use(VueVideoPlayer)




Vue.use(VueLazyload, {
  preLoad: 1.3,
  error: require('./assets/images/error.jpg'),
  loading: require('./assets/images/loading.gif'),
  attempt: 1,
  lazyComponent: true
})



Vue.use(VueLazyload, {
  preLoad: 1.3,
  error: require('./assets/images/error.jpg'),
  loading: require('./assets/images/loading.gif'),
  attempt: 1,
  lazyComponent: true
})

Vue.config.productionTip = false

router.beforeEach((to, from, next) => {
  setTimeout(function () {
    window.location = window.location;
  }, 500);
  next();
  _hmt.push(['_trackPageview', window.location.pathname + '#' + to.fullPath]);
  BJ_REPORT.info(to.fullPath);
})

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
