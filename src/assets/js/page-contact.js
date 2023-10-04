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
