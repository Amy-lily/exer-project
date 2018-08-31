const path = require('path')
module.exports = {
  baseUrl: './',
  outputDir: 'dist',
  lintOnSave: true,
  productionSourceMap: false,
  chainWebpack: config => {
    config
      .plugin('copy')
      .tap(args => {
        return [
          [
            {
              from: path.resolve(__dirname, './public'),
              to: path.resolve(__dirname, './dist'),
              ignore: [
                'index.html',
                '.*',
                '.svn/*',
                '.svn/**',
                '**/.svn/*',
                '**/.svn/**'
              ]
            }
          ]
        ]
        
      })
  }
}