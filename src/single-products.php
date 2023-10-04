<?php get_header(); ?>

<!-- メイン -->
<div class="container">

    <!-- サイドバー -->
    <div class="side pc">
        <h4 class="side__head"><span>カテゴリ</span></h4>
        <ul>
            <li class="first"><a href="">はちみつ</a></li>
            <li class="second active"><a href="">国産はちみつ</a></li>
            <li class="third"><a href="">アカシア</a></li>
            <li class="third"><a href="">レンゲ</a></li>
            <li class="third"><a href="">百花はちみつ</a></li>
            <li class="third"><a href="">サクラ</a></li>
            <li class="second"><a href="">外国産はちみつ</a></li>
            <li class="third"><a href="">アカシア</a></li>
            <li class="third"><a href="">レンゲ</a></li>
            <li class="third"><a href="">百花はちみつ</a></li>
            <li class="third"><a href="">サクラ</a></li>
            <li class="first"><a href="">はちみつギフト</a></li>
            <li class="second"><a href="">国産はちみつギフト</a></li>
            <li class="third"><a href="">国産はちみつ3本セット</a></li>
            <li class="third"><a href="">国産はちみつ2本セット</a></li>
            <li class="first"><a href="">外国産はちみつギフト</a></li>
            <li class="second"><a href="">外国産はちみつ3本セット</a></li>
            <li class="first"><a href="">養蜂用具</a></li>
            <li class="second"><a href="">蜂巣箱</a></li>
        </ul>
    </div>

    <div class="productsection">
        <div class="productsection__item">


            <!-- 商品画像 -->
            <div class="img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products.jpg')); ?>" alt="商品画像01" width="100%">
            </div>

            <div class="detail">
                <!-- 商品概要 -->
                <div class="description">
                    <p class="description__name">アカシアはちみつ 100g （瓶詰）</p>
                    <p class="description__price">1,000円<span>(税込み)</span></p>
                    <p class="description__fee">￥5,000以上の購入で送料無料</p>
                    <p class="description__feeinfo"><i class="fa-solid fa-circle-info"></i>送料について</p>
                    <p class="description__productsinfo">商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。</p>
                </div>

                <!-- 数量入力 -->
                <div class="purchase">
                    <div lang="ja" class="purchase__quantity">
                        <label for="number-of-unit" id="label-number-of-unit">数量</label>
                        <div class="inputblock">
                            <div class="">
                                <button type="button" aria-label="減らす" aria-describedby="label-number-of-unit" class="btn-number plus" data-type="minus" data-field="unit">-</button>
                            </div>
                            <input type="number" id="number-of-unit" name="unit" value="1" min="0" max="10" class="input-number">
                            <div class="">
                                <button type="button" aria-label="増やす" aria-describedby="label-number-of-unit" class="btn-number minus" data-type="plus" data-field="unit">+</button>
                            </div>
                        </div>
                        <!-- 値の変更をスクリーンリーダーに伝達するライブリージョン。視覚的に冗長なので非表示にする。 -->
                        <div id="output-number-of-unit" class="sr-only" role="status" aria-live="polite"></div>
                    </div>
                    <button class="purchase__cart" value=""><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/icon/cart-white.svg')); ?>" alt="カート" width="100%">カートに入れる</button>
                </div>
            </div>
        </div>


        <div class="productsection__another">

            <!-- おすすめ商品一覧 -->
            <div class="recommended">
                <h3 class="recommended__head"><span>おすすめ商品</span></h3>
                <div class="recocontainer">
                    <ul>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking01.svg')); ?>" alt="1位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">アカシアはちみつ</p>
                                    <p class="recoblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking02.svg')); ?>" alt="2位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">さくらはちみつ</p>
                                    <p class="recoblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking03.svg')); ?>" alt="3位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">はちみつセット</p>
                                    <p class="recoblock__textbox_price">3,500<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking04.svg')); ?>" alt="4位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">はちみつリップ</p>
                                    <p class="recoblock__textbox_price">800<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking05.svg')); ?>" alt="5位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">はちみつ美容セット</p>
                                    <p class="recoblock__textbox_price">6,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking01.svg')); ?>" alt="1位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">アカシアはちみつ</p>
                                    <p class="recoblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking02.svg')); ?>" alt="2位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">さくらはちみつ</p>
                                    <p class="recoblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking03.svg')); ?>" alt="3位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">はちみつセット</p>
                                    <p class="recoblock__textbox_price">3,500<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="">
                                <div class="recoblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking04.svg')); ?>" alt="4位" width="100%" class="recoblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="recoblock__picbox_item">
                                </div>
                                <div class="recoblock__textbox">
                                    <p class="recoblock__textbox_name">はちみつリップ</p>
                                    <p class="recoblock__textbox_price">800<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="recoblock">
                            <a href="#" class="recoblock__more">
                                <div class="recoblock__more_block">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/more.svg')); ?>" alt="もっと見る" width="100%">
                                    <p>もっと見る</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 閲覧履歴一覧 -->
            <div class="viewhistory">
                <h3 class="viewhistory__head"><span>閲覧履歴</span></h3>
                <div class="viewcontainer">
                    <ul>
                        <li class="viewblock">
                            <a href="">
                                <div class="viewblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking01.svg')); ?>" alt="1位" width="100%" class="viewblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="viewblock__picbox_item">
                                </div>
                                <div class="viewblock__textbox">
                                    <p class="viewblock__textbox_name">アカシアはちみつ</p>
                                    <p class="viewblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="viewblock">
                            <a href="">
                                <div class="viewblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking02.svg')); ?>" alt="2位" width="100%" class="viewblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="viewblock__picbox_item">
                                </div>
                                <div class="viewblock__textbox">
                                    <p class="viewblock__textbox_name">さくらはちみつ</p>
                                    <p class="viewblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="viewblock">
                            <a href="">
                                <div class="viewblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking01.svg')); ?>" alt="1位" width="100%" class="viewblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="viewblock__picbox_item">
                                </div>
                                <div class="viewblock__textbox">
                                    <p class="viewblock__textbox_name">アカシアはちみつ</p>
                                    <p class="viewblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="viewblock">
                            <a href="">
                                <div class="viewblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking02.svg')); ?>" alt="2位" width="100%" class="viewblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="viewblock__picbox_item">
                                </div>
                                <div class="viewblock__textbox">
                                    <p class="viewblock__textbox_name">さくらはちみつ</p>
                                    <p class="viewblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="viewblock">
                            <a href="">
                                <div class="viewblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking01.svg')); ?>" alt="1位" width="100%" class="viewblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="viewblock__picbox_item">
                                </div>
                                <div class="viewblock__textbox">
                                    <p class="viewblock__textbox_name">アカシアはちみつ</p>
                                    <p class="viewblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="viewblock">
                            <a href="">
                                <div class="viewblock__picbox">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/ranking02.svg')); ?>" alt="2位" width="100%" class="viewblock__picbox_rank">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/rankitem.jpg')); ?>" alt="商品名" width="100%" class="viewblock__picbox_item">
                                </div>
                                <div class="viewblock__textbox">
                                    <p class="viewblock__textbox_name">さくらはちみつ</p>
                                    <p class="viewblock__textbox_price">1,000<span>円</span></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>