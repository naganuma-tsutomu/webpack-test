// 環境変数読み込み
require("dotenv").config(); // dotenv読み込み
const Ip = process.env.IP; // .env.IP 環境変数の取得

const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const WebpackWatchedGlobEntries = require("webpack-watched-glob-entries-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

const entries = WebpackWatchedGlobEntries.getEntries(
  [
    path.resolve(__dirname, "./src/assets/js/*.js"),
    // path.resolve(__dirname, "./src/assets/scss/*.scss"),
  ],
  {
    ignore: path.resolve(__dirname, "./src/assets/js/_*.js"),
    // ignore: path.resolve(__dirname, "./src/assets/scss/_*.scss"),
  }
)();

const filePath = {
  js: './src/js/',
  pug: './src/pug/',
  sass: './src/scss/',
};

/* Sassファイル読み込みの定義*/
const entriesScss = WebpackWatchedGlobEntries.getEntries([path.resolve(__dirname, "./src/assets/scss/*.scss")], {
  ignore: path.resolve(__dirname, `${filePath.sass}**/_*.scss`),
})();
console.log(entriesScss);
const cssGlobPlugins = (entriesScss) => {
  return Object.keys(entriesScss).map(
    (key) =>
      new MiniCssExtractPlugin({
        //出力ファイル名
        filename: `./css/${key}.css`,
      })
  );
};

module.exports = {
  // コンパイルモード
  mode: "production",
  // エントリーポイントの設定
  entry: 
    // コンパイル対象のファイルを指定
    entries,
  // 出力設定
  output: {
    path: path.resolve(__dirname, "./dist/"), // 出力先フォルダを絶対パスで指定
    filename: `js/[name].js`, // [name]にはentry:で指定したキーが入る
    clean: true
  },
  module: {
    rules: [
      // sassのコンパイル設定
      {
        test: /\.(sa|sc|c)ss$/, // 対象にするファイルを指定
        use: [
          MiniCssExtractPlugin.loader, // JSとCSSを別々に出力する
          "css-loader",
          "postcss-loader", // オプションはpostcss.config.jsで指定
          "sass-loader",
          // 下から順にコンパイル処理が実行されるので、記入順序に注意
        ],
      },
    ],
  },
  plugins: [
    ...cssGlobPlugins(entriesScss),
    new FixStyleOnlyEntriesPlugin(), // CSS別出力時の不要JSファイルを削除
    new BrowserSyncPlugin({
      host: "localhost",
      files: ["src/*", "src/assets/**/*"],
      port: 3000,
      // dockerとホストをつないでいるポートをproxyで指定
      proxy: {
        target: Ip + ":8080",
      },
      open: "external", // ローカルIPアドレスでサーバを立ち上げる
      notify: false, // ブラウザ更新時に出てくる通知を非表示にする
    }),
    new WebpackWatchedGlobEntries(),
  ],
  // node_modules を監視（watch）対象から除外
  watchOptions: {
    ignored: /node_modules/,
  },
};
