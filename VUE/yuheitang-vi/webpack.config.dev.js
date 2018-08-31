const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const webpack = require("webpack");

module.exports = {
  entry: { 
    index: path.resolve(__dirname, './src/js/index.js')
  },
  devtool: 'source-map',
  output: {
    path: path.join(__dirname, 'dist'),
    filename: '[name].[hash:8].js',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        } 
      },
      {
        test: /\.art$/,
        use: [
          {
            loader: 'art-template-loader',
          }
        ]
      },
      {
        test: /\.(jpg|png|gif)$/i,
        use: [
          {
            loader: 'url-loader',
            options: {
              limit:1000,
              name : "images/[name].[hash:8].[ext]"
            }
          }
        ],
        
      }, 
      
      {
        test: /\.css$/,
          use: [
            'style-loader',
            'css-loader'
          ]
      }

    ]
  },

  plugins: [
      new HtmlWebpackPlugin({
          template: `${__dirname}/src/tpl.html`,
          filename: 'index.html',
          chunks:['index']
      }) 
  ],

  devServer: {
    host:'0.0.0.0',  
    inline: true,
    quiet: true,
    port: 8081,
    disableHostCheck: true, 
  }

};