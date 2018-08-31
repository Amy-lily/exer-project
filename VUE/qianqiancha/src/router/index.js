import Vue from 'vue'
import Router from 'vue-router'
import Cover from '@/pages/Cover'
import Feiye from '@/pages/Feiye'
import Home from '@/pages/Home'
import Xfk from '@/pages/Xfk'
import Hxm from '@/pages/Hxm'
import Dcp from '@/pages/Dcp'
import Ydx from '@/pages/Ydx'
import Qcb from '@/pages/Qcb'
import End from '@/pages/End'
import Subpage from '@/pages/Subpage'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Feiye',
      component: Feiye
    },
    {
      path: '/cover',
      name: 'cover',
      component: Cover
    },
    {
      path: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/Subpage',
      name: 'Subpage',
      component: Subpage
    },
    {
      path: '/Xfk',
      name: 'Xfk',
      component: Xfk
    },
    {
      path: '/Hxm',
      name: 'Hxm',
      component: Hxm
    },
    {
      path: '/Dcp',
      name: 'Dcp',
      component: Dcp
    },
    {
      path: '/Ydx',
      name: 'Ydx',
      component: Ydx
    },
    {
      path: '/Qcb',
      name: 'Qcb',
      component: Qcb
    },
    {
      path: '/End',
      name: 'End',
      component: End
    }
  ],
  scrollBehavior(to, from, savedPosition) {
    return { x: 0, y: 0 }
  }
})
