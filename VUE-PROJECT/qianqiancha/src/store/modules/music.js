import * as types from '../mutation-types'

// initial state
const state = {
  isUserPause: false,
  isMusicPlay: true,
  isMusicShow: true
}

// getters
const getters = {
  userPause: (state, getters, rootState) => {
    return state.isUserPause
  },
  musicPlay: (state, getters, rootState) => {
    return state.isMusicPlay
  },
  musicShow: (state, getters, rootState) => {
    return state.isMusicShow
  },
}

// actions
const actions = {
  userActionPause ({ commit, state }, payload) {
    commit(types.USER_PAUSE, payload)
  },
  musicActionPlay ({ commit, state }, payload) {
    commit(types.MUSIC_PLAY, payload)
  },
  musicActionShow ({ commit, state }, payload) {
    commit(types.MUSIC_SHOW, payload)
  },

}

// mutations
const mutations = {
  [types.USER_PAUSE] (state, payload) {
    state.isUserPause = payload
  },
  [types.MUSIC_PLAY] (state, payload) {  // 当用户点击了音乐暂停，则音乐不再播放
    state.isMusicPlay = state.isUserPause ? false : payload  
  },
  [types.MUSIC_SHOW] (state, payload) {  // 音乐图标是否显示
    state.isMusicShow = payload
  }

}

export default {
  state,
  getters,
  actions,
  mutations
}
