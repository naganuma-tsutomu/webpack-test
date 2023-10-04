<?php get_header(); ?>

<!-- TOP画像 -->
<div class="topimage">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top.jpg')); ?>" alt="TOP画像" width="100%">
</div>

<!-- ナビメニュー -->
<div class="navmenu pc">
    <ul>
        <li class="active"><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li><a href="<?php echo home_url('/products'); ?>">ショッピング</a></li>
        <li><a href="#">ご利用ガイド</a></li>
        <li><a href="#">よくある質問</a></li>
        <li><a href="#">お問い合わせ</a></li>
    </ul>
</div>

<!-- ランキング -->
<div class="ranking">
    <h3 class="ranking__head"><span>ランキング</span></h3>
    <div class="rankcontainer">
        <ul>
            <li class="rankblock">
                <a href="">
                    <div class="rankblock__picbox">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking01.svg')); ?>" alt="1位" width="100%" class="rankblock__picbox_rank">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="rankblock__picbox_item">
                    </div>
                    <div class="rankblock__textbox">
                        <p class="rankblock__textbox_name">アカシアはちみつ</p>
                        <p class="rankblock__textbox_price">1,000<span>円</span></p>
                    </div>
                </a>
            </li>
            <li class="rankblock">
                <a href="">
                    <div class="rankblock__picbox">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking02.svg')); ?>" alt="2位" width="100%" class="rankblock__picbox_rank">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="rankblock__picbox_item">
                    </div>
                    <div class="rankblock__textbox">
                        <p class="rankblock__textbox_name">さくらはちみつ</p>
                        <p class="rankblock__textbox_price">1,000<span>円</span></p>
                    </div>
                </a>
            </li>
            <li class="rankblock">
                <a href="">
                    <div class="rankblock__picbox">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking03.svg')); ?>" alt="3位" width="100%" class="rankblock__picbox_rank">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="rankblock__picbox_item">
                    </div>
                    <div class="rankblock__textbox">
                        <p class="rankblock__textbox_name">はちみつセット</p>
                        <p class="rankblock__textbox_price">3,500<span>円</span></p>
                    </div>
                </a>
            </li>
            <li class="rankblock">
                <a href="">
                    <div class="rankblock__picbox">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking04.svg')); ?>" alt="4位" width="100%" class="rankblock__picbox_rank">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="rankblock__picbox_item">
                    </div>
                    <div class="rankblock__textbox">
                        <p class="rankblock__textbox_name">はちみつリップ</p>
                        <p class="rankblock__textbox_price">800<span>円</span></p>
                    </div>
                </a>
            </li>
            <li class="rankblock">
                <a href="">
                    <div class="rankblock__picbox">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking05.svg')); ?>" alt="5位" width="100%" class="rankblock__picbox_rank">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="rankblock__picbox_item">
                    </div>
                    <div class="rankblock__textbox">
                        <p class="rankblock__textbox_name">はちみつ美容セット</p>
                        <p class="rankblock__textbox_price">6,000<span>円</span></p>
                    </div>
                </a>
            </li>

            <!-- お知らせとデザインを合わせるため、いったん非表示 -->
            <?php /* 
            <li class="rankblock">
                <a href="#" class="rankblock__more">
                    <div class="rankblock__more_block">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/more.svg')); ?>" alt="もっと見る" width="100%">
                        <p>もっと見る</p>
                    </div>
                </a>
            </li>
            */ ?>


        </ul>
        <div class="rankmore">
            <a href="#">もっと見る</a>
        </div>
    </div>
</div>

<!-- 商品カテゴリ -->
<div class="category">
    <h3 class="category__head"><span>商品カテゴリ</span></h3>
    <div class="catecontainer">
        <a href="">
            <div class="catecontainer__box">
                <div class="boxleft">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="はちみつ" width="100%" class="catecontainer__box_img">
                </div>
                <div class="boxright">
                    <h4>はちみつ</h4>
                    <p>文字が入ります。<br>文字が入ります。</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="catecontainer__box">
                <div class="boxleft">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="はちみつ" width="100%" class="catecontainer__box_img">
                </div>
                <div class="boxright">
                    <h4>お菓子</h4>
                    <p>文字が入ります。<br>文字が入ります。</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="catecontainer__box">
                <div class="boxleft">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="はちみつ" width="100%" class="catecontainer__box_img">
                </div>
                <div class="boxright">
                    <h4>養蜂道具</h4>
                    <p>文字が入ります。<br>文字が入ります。</p>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- お知らせ -->
<div class="news">
    <h3 class="news__head"><span>お知らせ</span></h3>
    <div class="newscontainer">
        <a class="newscontainer__box" href="#">
            <span class="newscontainer__box_text">
                <span>
                    <p class="time">2023.10.10</p>
                    <p class="content">【お知らせ】</p>
                </span>
                <p>商品を追加しました。</p>
            </span>
            <span class="newscontainer__box_open"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/right-707070.svg')); ?>" alt="リンク" width="100%"></span>
        </a>
        <a class="newscontainer__box" href="#">
            <span class="newscontainer__box_text">
                <span>
                    <p class="time">2023.10.10</p>
                    <p class="content">【重要なお知らせ】</p>
                </span>
                <p>支払方法を追加しました。</p>
            </span>
            <span class="newscontainer__box_open"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/right-707070.svg')); ?>" alt="リンク" width="100%"></span>
        </a>
        <a class="newscontainer__box" href="#">
            <span class="newscontainer__box_text">
                <span>
                    <p class="time">2023.10.10</p>
                    <p class="content">【お詫びとお知らせ】</p>
                </span>
                <p>（復旧済み）システムの不具合発生...</p>
            </span>
            <span class="newscontainer__box_open"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/right-707070.svg')); ?>" alt="リンク" width="100%"></span>
        </a>
    </div>
    <div class="newsmore">
        <a href="#">もっと見る</a>
    </div>
</div>


<?php get_footer(); ?>