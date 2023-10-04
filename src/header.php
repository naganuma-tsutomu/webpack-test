<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> -->
    <script src="https://kit.fontawesome.com/96247f2368.js" crossorigin="anonymous"></script>


    <!--------------- ios 入力欄タップ時に画面がズームされないようにする記述  始め ---------------->
    <script>
        var ua = navigator.userAgent.toLowerCase();
        var isiOS = (ua.indexOf('iphone') > -1) || (ua.indexOf('ipad') > -1);
        if (isiOS) {
            var viewport = document.querySelector('meta[name="viewport"]');
            if (viewport) {
                var viewportContent = viewport.getAttribute('content');
                viewport.setAttribute('content', viewportContent + ', user-scalable=no');
            }
        }
    </script>
    <!--------------- ios 入力欄タップ時に画面がズームされないようにする記述  終わり ---------------->


    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="rDkRniiSrOzF_k5ccyGpkrfLe4dCJIARBhFrvuNsvlY" />
</head>

<body>
    <header>
        <div class="header sp">
            <div class="headercon">
                <div class="headercon__up">
                    <div class="headercon__up_logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.png')); ?>" alt="ロゴ" width="100%"></a>
                    </div>
                    <div class="headercon__up_cart">
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/cart-303030.svg')); ?>" alt="カート" width="100%">
                        <span class="itemcount">1</span>
                    </div>
                    <!-- ハンバーガーメニュー 始まり -->
                    <div class="headercon__up_hum">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="modal"></div>
                    <nav id="hamnav">
                        <div id="hamnav_list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                            <ul>
                                <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/user-303030.svg')); ?>" alt="">新規会員登録</a></li>
                                <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/login-303030.svg')); ?>" alt="">ログイン</a></li>
                                <li><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/user-303030.svg')); ?>" alt="">ホーム</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/contact-303030.svg')); ?>" alt="">お問い合わせ</a></li>
                                <li><a href="<?php echo home_url('/products'); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/cart-303030.svg')); ?>" alt="">ショッピング</a></li>
                                <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/honey-303030.svg')); ?>" alt="">養蜂場について</a></li>
                                <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/bee-303030.svg')); ?>" alt="">ご利用ガイド</a></li>
                                <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/bee-303030.svg')); ?>" alt="">よくある質問</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- ハンバーガーメニュー 終わり -->
                </div>
                <div class="headercon__down">
                    <div class="headercon__down_keyword">
                        <input type="text" size="25" placeholder="キーワードを入力">
                        <button type="submit">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/search-white.svg')); ?>" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="header pc">
            <div class="headercon">
                <div class="headercon__up">
                    <div class="headercon__up_logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.png')); ?>" alt="ロゴ" width="100%"></a>
                    </div>
                </div>
                <div class="headercon__down">
                    <div class="headercon__down_keyword">
                        <input type="text" size="25" placeholder="キーワードを入力">
                        <button type="submit">
                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/search-white.svg')); ?>" alt="">
                        </button>
                    </div>
                    <ul>
                        <li class="hnavmenu"><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/user-303030.svg')); ?>" alt="">新規会員登録</a></li>
                        <li class="hnavmenu"><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/login-303030.svg')); ?>" alt="">ログイン</a></li>
                        <li class="hnavmenu">
                            <a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/contact-303030.svg')); ?>" alt="">お問い合わせ</a>
                        </li>
                        <li class="hnavmenu">
                            <div class="hnavmenu__cart">
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/cart-303030.svg')); ?>" alt="カート" width="100%">
                                <span class="hnavmenu__cart_itemcount">1</span>
                                <p class="hnavmenu__cart_price">￥1,000</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- PC -->
        <?php /* 
            <div class="logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.png')); ?>" alt="ロゴ" width="100%">
            </div>
            <div class="keyword"></div>
            <div class="cart"></div>
            <div class="navmenu pc"></div>
            <div class="hum sp"></div>
             */ ?>
        </div>
    </header>
    <main>