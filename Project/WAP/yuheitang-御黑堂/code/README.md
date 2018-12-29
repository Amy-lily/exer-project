### H5 webpack版
  1. 升级日志
    * v1.0.1
      1. 加入 微信分享功能,详细配置查看 wxshare(北京) svn以及文档
      
  2. 基本使用 
    * 安装依赖 yarn install 
    * 启动  yarn start 
    * 打包 yarn run build
    * 启动失败请检查端口是否占用，默认使用127.0.0.1:8088
  3. 目录结构
    * src --- 源代码
      1. tpl --- 模板文件夹
        * index.art --- html文件
      2. tpl.html  --- 页面结构
      3. js --- js文件夹
      4. images --- 图片文件夹
      5. css --- 样式文件
    * dist --- 打包完成的线上文件
    * static --- 放无需打包的文件，如 wx300.jpg
    * package.json 项目所需依赖
    * webpack.config.js webpack配置文件 
