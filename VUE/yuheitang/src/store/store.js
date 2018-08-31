import Vue from 'vue'
import Vuex from 'vuex'
import * as actions from './actions'
import music from './modules/music'

Vue.use(Vuex)

export default new Vuex.Store({
  actions,
  modules: {
    music
  }
})
