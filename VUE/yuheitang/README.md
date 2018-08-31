### vue手机资料模板
  1. v4.0.0 升级日志
    * 使用最新vue脚手架
    * 支持vue UI,命令 vue ui,
      1. 需全局安装vue-cli:  npm install -g @vue/cli
    * 打包以后, wx300调整到根目录

### 基本目录结构
  1. public --- 静态文件目录，不会打包
     * index.html
     * data --- data.js
     * wx300.jpg
  2. src  --- 源码目录
    
### 新建项目-基本配置 
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

