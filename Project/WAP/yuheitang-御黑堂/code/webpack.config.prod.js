const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const webpack = require("webpack");

module.exports = {
  entry: { 
    index: path.resolve(__dirname, './src/js/index.js')
  },
  output: {
    path: path.join(__dirname, 'dist'),
    filename: 'static/js/[name].[hash:8].js',
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
              limit: 2000,
              name : "static/images/[name].[hash:8].[ext]"
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
      new CleanWebpackPlugin(['dist']),
      new webpack.optimize.UglifyJsPlugin({
        compress:{
          warnings: false,
          drop_debugger: true,
          drop_console: true
        }
      }),
      // new ExtractTextPlugin({
      //   filename: "static/css/[name].[chunkhash:8].css",
      //   disable: false,
      //   allChunks: true
      // }),
      new HtmlWebpackPlugin({
          template: `${__dirname}/src/tpl.html`,
          filename: 'index.html',
          chunks:['index']
      }),
      new CopyWebpackPlugin([
      {
        from: path.resolve(__dirname, 'static'), 
        to: 'static',
        ignore: ['.*','**/.*/**']
      }
    ]) 
  ]

};