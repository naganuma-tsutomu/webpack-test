/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/js/common.js":
/*!*********************************!*\
  !*** ./src/assets/js/common.js ***!
  \*********************************/
/***/ (() => {

eval("$(function () {\n  // -------------------- ページトップリンク始まり\n\n  function PageTopAnime() {\n    const scroll = $(window).scrollTop();\n    if (scroll >= 100) {\n      //上から100pxスクロールしたら\n      $(\"#page-top\").removeClass(\"DownMove\");\n      $(\"#page-top\").addClass(\"UpMove\");\n    } else {\n      if ($(\"#page-top\").hasClass(\"UpMove\")) {\n        $(\"#page-top\").removeClass(\"UpMove\");\n        $(\"#page-top\").addClass(\"DownMove\");\n      }\n    }\n  }\n\n  // 画面をスクロールをしたら動かしたい場合の記述\n  $(window).scroll(function () {\n    PageTopAnime();\n  });\n\n  // ページが読み込まれたらすぐに動かしたい場合の記述\n  $(window).on(\"load\", function () {\n    PageTopAnime();\n  });\n\n  // #page-topをクリックした際の設定\n  $(\"#page-top\").click(function () {\n    const scroll = $(window).scrollTop(); //スクロール値を取得\n    if (scroll > 0) {\n      $(this).addClass(\"floatAnime\");\n      $(\"body,html\").animate(\n        {\n          scrollTop: 0,\n        },\n        2000,\n        function () {\n          //スクロールの速さ。数字が大きくなるほど遅くなる\n          $(\"#page-top\").removeClass(\"floatAnime\");\n        }\n      );\n    }\n    return false; //リンク自体の無効化\n  });\n  // -------------------- ページトップリンク終わり\n\n\n\n  // -------------------- ハンバーガーメニュー\n  $(\".headercon__up_hum\").on(\"click\", function () {\n    if ($(this).hasClass(\"active\")) {\n      // メニューが閉じられるときの処理\n      $(this).removeClass(\"active\");\n      $(\"#hamnav\").removeClass(\"panelactive\");\n      $(\"body\").removeClass(\"fixed\");\n      $(\"html, body\").scrollTop(scrollPos); // スクロール位置を元の位置に戻す\n    } else {\n      // メニューが開かれるときの処理\n      scrollPos = $(window).scrollTop(); // 現在のスクロール位置を保存\n      $(\"body\")\n        .addClass(\"fixed\")\n        .css({ top: `-${scrollPos}px`, width: \"100%\" });\n      $(this).addClass(\"active\");\n      $(\"#hamnav\").addClass(\"panelactive\");\n    }\n  });\n  // -------------------- ハンバーガーメニュー終わり\n\n});\n\n\n//# sourceURL=webpack://test/./src/assets/js/common.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/assets/js/common.js"]();
/******/ 	
/******/ })()
;