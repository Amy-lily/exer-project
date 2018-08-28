### vue手机资料模板
  1. v3.1.2 升级日志
    * 加入 微信分享功能,详细配置查看 wxshare(北京) svn以及文档
    
  2. v3.1.1
    * 加入 视频组件使用,参考案例查看Gssl.vue
    * 需配合音乐组件相应播放暂停方法
    * 需自行安装 vue-video-player@4.0.4,并开始main.js,全局引入组件

  2. v3.1.0 升级日志
    * 音乐组件升级
      1. 支持视频播放, 音乐暂停
        * musicActionPlay(false)
      2. 支持视频停止, 音乐播放
        * musicActionPlay(true)
      3. 支持调用时初始化位置
      4. 支持隐藏音乐组件图标
        * musicActionShow(false)

### 新建项目-基本配置
  1. 需要导入vue.svnprops
    * 配置svn忽略 dist文件夹
    * 需要配置svn忽略 node_modules 文件夹

### 基本使用
  1. 安装依赖
    ``` javascript
      yarn install
    ```
  2. 开发模式
    ``` javascript
      npm start 或 yarn run dev
    ```  
  3. 打包
    ``` javascript
      yarn run build
    ```  
  4. 如果构建失败，先清除缓存
    ``` javascript
      yarn cache clean
    ```    
  5. 打包完成的项目访问
    1. 使用wamp在 localhost下访问

### vue的JS逻辑中使用图片

  1.  在data中，require 导入，此方法节省代码
  ``` javascript
      "fwbzimg1":require('@/assets/images/fwbz-img1.jpg'),
   ```

### vue图片懒加载
  1. vue-lazyload 中的图片使用问题
    * 需要data中绑定
        ``` javascript
          data () {
            return {
              "xmbjimg1" : require('@/assets/images/xmbj-img1.jpg'),
              "xmbjimg2" : require('@/assets/images/xmbj-img2.jpg'),
              "xmbjimg3" : require('@/assets/images/xmbj-img3.jpg'),
            }
        ``` 
      *  vue-lazyload调用
        ``` html
          <img src="" alt="" v-lazy="xmbjimg8">
        ```
# 路由跳转
  *  html中使用 router-link, to为目的页面组件的 路由配置 
     <router-link class="nav-btn" to="/home"></router-link>
    
  * js中中路由跳转
    ``` javascript
       this.$router.push('home');
    ```


