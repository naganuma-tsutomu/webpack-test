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

/***/ "./src/assets/js/base.js":
/*!*******************************!*\
  !*** ./src/assets/js/base.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./common */ \"./src/assets/js/common.js\");\n/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_common__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _page_contact__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./page-contact */ \"./src/assets/js/page-contact.js\");\n/* harmony import */ var _page_contact__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_page_contact__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n\nconsole.log('index.jsです');\n\n(0,_common__WEBPACK_IMPORTED_MODULE_0__.bye)();\n(0,_page_contact__WEBPACK_IMPORTED_MODULE_1__.hello)();\n\n//# sourceURL=webpack://test/./src/assets/js/base.js?");

/***/ }),

/***/ "./src/assets/js/common.js":
/*!*********************************!*\
  !*** ./src/assets/js/common.js ***!
  \*********************************/
/***/ (() => {

eval("$(function () {\n  // -------------------- ページトップリンク始まり\n\n  function PageTopAnime() {\n    const scroll = $(window).scrollTop();\n    if (scroll >= 100) {\n      //上から100pxスクロールしたら\n      $(\"#page-top\").removeClass(\"DownMove\");\n      $(\"#page-top\").addClass(\"UpMove\");\n    } else {\n      if ($(\"#page-top\").hasClass(\"UpMove\")) {\n        $(\"#page-top\").removeClass(\"UpMove\");\n        $(\"#page-top\").addClass(\"DownMove\");\n      }\n    }\n  }\n\n  // 画面をスクロールをしたら動かしたい場合の記述\n  $(window).scroll(function () {\n    PageTopAnime();\n  });\n\n  // ページが読み込まれたらすぐに動かしたい場合の記述\n  $(window).on(\"load\", function () {\n    PageTopAnime();\n  });\n\n  // #page-topをクリックした際の設定\n  $(\"#page-top\").click(function () {\n    const scroll = $(window).scrollTop(); //スクロール値を取得\n    if (scroll > 0) {\n      $(this).addClass(\"floatAnime\");\n      $(\"body,html\").animate(\n        {\n          scrollTop: 0,\n        },\n        2000,\n        function () {\n          //スクロールの速さ。数字が大きくなるほど遅くなる\n          $(\"#page-top\").removeClass(\"floatAnime\");\n        }\n      );\n    }\n    return false; //リンク自体の無効化\n  });\n  // -------------------- ページトップリンク終わり\n\n\n\n  // -------------------- ハンバーガーメニュー\n  $(\".headercon__up_hum\").on(\"click\", function () {\n    if ($(this).hasClass(\"active\")) {\n      // メニューが閉じられるときの処理\n      $(this).removeClass(\"active\");\n      $(\"#hamnav\").removeClass(\"panelactive\");\n      $(\"body\").removeClass(\"fixed\");\n      $(\"html, body\").scrollTop(scrollPos); // スクロール位置を元の位置に戻す\n    } else {\n      // メニューが開かれるときの処理\n      scrollPos = $(window).scrollTop(); // 現在のスクロール位置を保存\n      $(\"body\")\n        .addClass(\"fixed\")\n        .css({ top: `-${scrollPos}px`, width: \"100%\" });\n      $(this).addClass(\"active\");\n      $(\"#hamnav\").addClass(\"panelactive\");\n    }\n  });\n  // -------------------- ハンバーガーメニュー終わり\n\n});\n\n\n//# sourceURL=webpack://test/./src/assets/js/common.js?");

/***/ }),

/***/ "./src/assets/js/page-contact.js":
/*!***************************************!*\
  !*** ./src/assets/js/page-contact.js ***!
  \***************************************/
/***/ (() => {

eval("$(\".buttonblock__step-1_confirm\").prop(\"disabled\", false);\n// 進むボタン\n$(\"[data-step_btn]\").on(\"click\", function () {\n  setTimeout(\n    $.proxy(function () {\n      const error = $(this).parents(\"form\").find(\".formError\");\n      if (error.length === 0) {\n        const step = $(this).data(\"step_btn\");\n        $(this).parents(\"[data-step_area]\").hide();\n        $(`[data-step_area=${step}]`).fadeIn();\n        $(`[data-step_tab=${step}]`).addClass(\"current\");\n\n        const cLocate = $(\".siteattention\").offset();\n        $(window).scrollTop(cLocate - 100);\n\n        if ($('[data-step_tab=\"2\"]').hasClass(\"current\")) {\n          $('.stepform01').addClass('anothercurrent');\n          $('.siteattention__title').css(\"display\", \"none\");\n          $('.siteattention__list').css(\"display\", \"none\");\n        } else {\n          $('.stepform01').removeClass('anothercurrent');\n        }\n\n        if ($('[data-step_tab=\"3\"]').hasClass(\"current\")) {\n          $(\".authentication\").css(\"display\", \"block\");\n          $('.stepform02').addClass('anothercurrent');\n          if ($(window).width() > 1025) {\n          }\n        } else {\n          $(\".authentication\").css(\"display\", \"none\");\n          $('.stepform02').removeClass('anothercurrent');\n        }\n      }\n    }, this),\n    500\n  );\n});\n\n// 戻るボタン\n$(\"[data-back_btn]\").on(\"click\", function () {\n  $(\".acceptance-shop-contact input\").prop(\"checked\", false);\n  const step = $(this).data(\"back_btn\");\n  $(this).parents(\"[data-step_area]\").hide();\n  $(`[data-step_area=${step}]`).fadeIn();\n  $(\"[data-step_tab]\").removeClass(\"current\");\n  $(`[data-step_tab=${step}]`).addClass(\"current\");\n\n  const cLocate = $(\".siteattention\").offset();\n  $(window).scrollTop(cLocate - 100);\n});\n\nfunction confirm() {\n\n  // 連想配列を作成\n  const array_text = {\n    \"#confirm_postcontact_name\": \"#postcontact_name\",\n    \"#confirm_postcontact_furigana\": \"#postcontact_furigana\",\n    \"#confirm_postmail\": \"#postmail\",\n    \"#confirm_posttel_number\": \"#posttel_number\",\n    \"#confirm_postcontact_select\": \"#postcontact_select\",\n    \"#confirm_postcontact_content\": \"#postcontact_content\",\n  };\n\n  // 連想配列を繰り返し処理し、入力した値を確認画面に入力\n  $.each(array_text, function (confirm_field, input_field) {\n    $(confirm_field).text($(input_field).val());\n  });\n\n  // 画像のsrcを取得し、確認画面に入力\n  const srcUrl = $(\"#attr_img\").attr(\"src\");\n  $(\"#confirm_postcontact_img\").html(\n    `<img src=\"${srcUrl}\" alt=\"サンプル画像\">`\n  );\n}\n\n$(\".buttonblock__step-1_confirm\").on(\"click\", function () {\n  confirm();\n});\n\n// -------------------- フォームの画像添付のサムネイル表示\n\n// 添付画像の表示する\n$(\"form\").on(\"change\", 'input[type=\"file\"]', function (e) {\n  var file = e.target.files[0];\n  var reader = new FileReader();\n  var img__up = $(e.target).closest(\".img_block\");\n  var label = img__up.find(\".img__up_link\");\n  var del = img__up.find(\".img__up_del\");\n  var pic = img__up.find(\".img__up_file\");\n  pic = $('<img src=\"\" alt=\"\" id=\"attr_img\" class=\"img__up_file\">');\n  label.after(pic);\n\n  reader.onload = function (e) {\n    pic.attr(\"src\", e.target.result);\n    pic.css(\"display\", \"block\");\n    label.css(\"display\", \"none\");\n    del.css(\"display\", \"block\");\n    imgwidth();\n  };\n  reader.readAsDataURL(file);\n});\n\n// 写真削除\n$(document).on(\"click\", \".img__up_del\", function (e) {\n  var wpcf7 = $(e.target).closest(\".wpcf7\");\n  var img__up = $(e.target).closest(\".img_block\");\n  img__up.find(\".img__up_file\").remove();\n  img__up.find(\".img__up_link\").css(\"display\", \"block\");\n  img__up.find(\"input\").val(\"\");\n  img__up.find(\".img__up_del\").css(\"display\", \"none\");\n  img__up.replaceWith(img__up.clone(true));\n  imgwidth();\n});\n$(\".img__up_file\").css(\"display\", \"none\");\n$(\".img__up_del\").css(\"display\", \"none\");\n\n/*==================== 美らポスト 終わり  ====================*/\n\n\n//# sourceURL=webpack://test/./src/assets/js/page-contact.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/assets/js/base.js");
/******/ 	
/******/ })()
;