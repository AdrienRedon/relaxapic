var debug = process.env.NODE_ENV !== "production";
var webpack = require('webpack');

module.exports = {
  context: __dirname,
  devtool: debug ? "inline-sourcemap" : null,
  entry: {
    index: "./js/index.js",
    patho: "./js/patho.js",
    salons: "./js/salons.js",
  },
  output: {
    path: __dirname + "/js/dist",
    filename: "[name].min.js",
  },
  modulesDirectories: [
    "package_modules",
    "./js/",
    "node_modules"
  ],
  plugins: debug ? [] : [
    new webpack.optimize.DedupePlugin(),
    new webpack.optimize.OccurenceOrderPlugin(),
    new webpack.optimize.UglifyJsPlugin({ mangle: false, sourcemap: false }),
  ]
};