// 環境変数読み込み
require("dotenv").config(); // dotenv読み込み
const Ip = process.env.IP; // .env.IP 環境変数の取得
const path = require('path');

const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
  mode: "production",

  entry: {
    base: "./src/assets/js/base.js",
  },
  output: {
    path: path.resolve(__dirname, 'dist/js'),
    filename: "[name].bundle.js",
  },

  plugins: [
    new BrowserSyncPlugin({
      host: "localhost",
      files: ["src/*"],
      port: 3000,
      // dockerとホストをつないでいるポートをproxyで指定
      proxy: {
        target: Ip + ":8080",
      },
      open: "external", // ローカルIPアドレスでサーバを立ち上げる
      notify: false, // ブラウザ更新時に出てくる通知を非表示にする
    }),
  ],
};