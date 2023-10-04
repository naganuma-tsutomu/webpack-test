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
