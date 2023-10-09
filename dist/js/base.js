/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ 926:
/***/ (() => {

$(function () {
  // -------------------- ページトップリンク始まり

  function PageTopAnime() {
    const scroll = $(window).scrollTop();
    if (scroll >= 100) {
      //上から100pxスクロールしたら
      $("#page-top").removeClass("DownMove");
      $("#page-top").addClass("UpMove");
    } else {
      if ($("#page-top").hasClass("UpMove")) {
        $("#page-top").removeClass("UpMove");
        $("#page-top").addClass("DownMove");
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime();
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    PageTopAnime();
  });

  // #page-topをクリックした際の設定
  $("#page-top").click(function () {
    const scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll > 0) {
      $(this).addClass("floatAnime");
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        2000,
        function () {
          //スクロールの速さ。数字が大きくなるほど遅くなる
          $("#page-top").removeClass("floatAnime");
        }
      );
    }
    return false; //リンク自体の無効化
  });
  // -------------------- ページトップリンク終わり



  // -------------------- ハンバーガーメニュー
  $(".headercon__up_hum").on("click", function () {
    if ($(this).hasClass("active")) {
      // メニューが閉じられるときの処理
      $(this).removeClass("active");
      $("#hamnav").removeClass("panelactive");
      $("body").removeClass("fixed");
      $("html, body").scrollTop(scrollPos); // スクロール位置を元の位置に戻す
    } else {
      // メニューが開かれるときの処理
      scrollPos = $(window).scrollTop(); // 現在のスクロール位置を保存
      $("body")
        .addClass("fixed")
        .css({ top: `-${scrollPos}px`, width: "100%" });
      $(this).addClass("active");
      $("#hamnav").addClass("panelactive");
    }
  });
  // -------------------- ハンバーガーメニュー終わり

});


/***/ }),

/***/ 764:
/***/ (() => {

$(".buttonblock__step-1_confirm").prop("disabled", false);
// 進むボタン
$("[data-step_btn]").on("click", function () {
  setTimeout(
    $.proxy(function () {
      const error = $(this).parents("form").find(".formError");
      if (error.length === 0) {
        const step = $(this).data("step_btn");
        $(this).parents("[data-step_area]").hide();
        $(`[data-step_area=${step}]`).fadeIn();
        $(`[data-step_tab=${step}]`).addClass("current");

        const cLocate = $(".siteattention").offset();
        $(window).scrollTop(cLocate - 100);

        if ($('[data-step_tab="2"]').hasClass("current")) {
          $('.stepform01').addClass('anothercurrent');
          $('.siteattention__title').css("display", "none");
          $('.siteattention__list').css("display", "none");
        } else {
          $('.stepform01').removeClass('anothercurrent');
        }

        if ($('[data-step_tab="3"]').hasClass("current")) {
          $(".authentication").css("display", "block");
          $('.stepform02').addClass('anothercurrent');
          if ($(window).width() > 1025) {
          }
        } else {
          $(".authentication").css("display", "none");
          $('.stepform02').removeClass('anothercurrent');
        }
      }
    }, this),
    500
  );
});

// 戻るボタン
$("[data-back_btn]").on("click", function () {
  $(".acceptance-shop-contact input").prop("checked", false);
  const step = $(this).data("back_btn");
  $(this).parents("[data-step_area]").hide();
  $(`[data-step_area=${step}]`).fadeIn();
  $("[data-step_tab]").removeClass("current");
  $(`[data-step_tab=${step}]`).addClass("current");

  const cLocate = $(".siteattention").offset();
  $(window).scrollTop(cLocate - 100);
});

function confirm() {

  // 連想配列を作成
  const array_text = {
    "#confirm_postcontact_name": "#postcontact_name",
    "#confirm_postcontact_furigana": "#postcontact_furigana",
    "#confirm_postmail": "#postmail",
    "#confirm_posttel_number": "#posttel_number",
    "#confirm_postcontact_select": "#postcontact_select",
    "#confirm_postcontact_content": "#postcontact_content",
  };

  // 連想配列を繰り返し処理し、入力した値を確認画面に入力
  $.each(array_text, function (confirm_field, input_field) {
    $(confirm_field).text($(input_field).val());
  });

  // 画像のsrcを取得し、確認画面に入力
  const srcUrl = $("#attr_img").attr("src");
  $("#confirm_postcontact_img").html(
    `<img src="${srcUrl}" alt="サンプル画像">`
  );
}

$(".buttonblock__step-1_confirm").on("click", function () {
  confirm();
});

// -------------------- フォームの画像添付のサムネイル表示

// 添付画像の表示する
$("form").on("change", 'input[type="file"]', function (e) {
  var file = e.target.files[0];
  var reader = new FileReader();
  var img__up = $(e.target).closest(".img_block");
  var label = img__up.find(".img__up_link");
  var del = img__up.find(".img__up_del");
  var pic = img__up.find(".img__up_file");
  pic = $('<img src="" alt="" id="attr_img" class="img__up_file">');
  label.after(pic);

  reader.onload = function (e) {
    pic.attr("src", e.target.result);
    pic.css("display", "block");
    label.css("display", "none");
    del.css("display", "block");
    imgwidth();
  };
  reader.readAsDataURL(file);
});

// 写真削除
$(document).on("click", ".img__up_del", function (e) {
  var wpcf7 = $(e.target).closest(".wpcf7");
  var img__up = $(e.target).closest(".img_block");
  img__up.find(".img__up_file").remove();
  img__up.find(".img__up_link").css("display", "block");
  img__up.find("input").val("");
  img__up.find(".img__up_del").css("display", "none");
  img__up.replaceWith(img__up.clone(true));
  imgwidth();
});
$(".img__up_file").css("display", "none");
$(".img__up_del").css("display", "none");

/*==================== 美らポスト 終わり  ====================*/


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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(926);
/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_common__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _page_contact__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(764);
/* harmony import */ var _page_contact__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_page_contact__WEBPACK_IMPORTED_MODULE_1__);




console.log('index.jsです');

(0,_common__WEBPACK_IMPORTED_MODULE_0__.bye)();
(0,_page_contact__WEBPACK_IMPORTED_MODULE_1__.hello)();
})();

/******/ })()
;