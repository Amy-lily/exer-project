import Vue from 'vue'
import App from './App'
import store from './store'
import router from './router'
import VueLazyload from 'vue-lazyload'
import VueAwesomeSwiper from 'vue-awesome-swiper'
Vue.use(VueAwesomeSwiper)
import VueVideoPlayer from 'vue-video-player'
Vue.use(VueVideoPlayer)

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
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: { App }
})
