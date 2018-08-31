import Vue from 'vue'
import Router from 'vue-router'
import Cover from './pages/Cover'
import Home from './pages/Home'
import Ppgs from './pages/Ppgs'
import Kdfa from './pages/Kdfa'
import Lxwm from './pages/Lxwm'
import Scqs from './pages/Scqs'
import Cpys from './pages/Cpys'
import Xmys from './pages/Xmys'
import Fwzn from './pages/Fwzn'
Vue.use(Router)

export default new Router({
    routes: [{
        path: '/',
        name: 'Cover',
        component: Cover,
        meta: {
            title: '御黑堂·首页'
        }
    },
    {
        path: '/home',
        name: 'home',
        component: Home,
        meta: {
            title: '御黑堂·目录'
        }
    },
    {
        path: '/Ppgs',
        name: 'Ppgs',
        component: Ppgs,
        meta: {
            title: '御黑堂·品牌故事'
        }
    },
    {
        path: '/Scqs',
        name: 'Scqs',
        component: Scqs,
        meta: {
            title: '御黑堂·市场趋势'
        }
    },
    {
        path: '/Xmys',
        name: 'Xmys',
        component: Xmys,
        meta: {
            title: '御黑堂·项目优势'
        }
    },
    {
        path: '/Cpys',
        name: 'Cpys',
        component: Cpys,
        meta: {
            title: '御黑堂·产品优势'
        }
    },
    {
        path: '/Kdfa',
        name: 'Kdfa',
        component: Kdfa,
        meta: {
            title: '御黑堂·开店方案'
        }
    },
    {
        path: '/Fwzn',
        name: 'Fwzn',
        component: Fwzn,
        meta: {
            title: '御黑堂·服务指南'
        }
    },
    {
        path: '/Lxwm',
        name: 'Lxwm',
        component: Lxwm,
        meta: {
            title: '御黑堂·联系我们'
        }
    }
    ],
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
})
