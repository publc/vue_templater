const merge = require('webpack-merge');
const base = require('./webpack.base.config');
const config = require('./development.config');
const webpack = require('webpack');
const path = require('path');

module.exports = merge(base, {
  devServer: {
    contentBase: path.resolve(__dirname, '../public'),
    compress: true,
    overlay: true
  },
  plugins: [
    new webpack.DefinePlugin({
      'process': {
        env: config
      }
    })
  ]
});