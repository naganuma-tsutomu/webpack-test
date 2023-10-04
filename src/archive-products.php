<?php get_header(); ?>

<!-- TOP画像 -->
<div class="topimage">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products-top.jpeg')); ?>" alt="TOP画像" width="100%">
</div>

<!-- ナビメニュー -->
<div class="navmenu pc">
    <ul>
        <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li class="active"><a href="<?php echo home_url('/products'); ?>">ショッピング</a></li>
        <li><a href="#">ご利用ガイド</a></li>
        <li><a href="#">よくある質問</a></li>
        <li><a href="#">お問い合わせ</a></li>
    </ul>
</div>

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

    <!-- 商品一覧 -->
    <div class="products">
        <h3 class="products__head"><span>商品一覧</span></h3>
        <div class="itemlist">

            <div class="itemlist__block">
                <a href="<?php echo home_url('/products/acacia01'); ?>">

                    <!-- 商品画像 -->
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products.jpg')); ?>" alt="商品画像01" width="100%">
                    </div>

                    <!-- 商品概要 -->
                    <div class="description">
                        <p class="description__name">アカシアはちみつ 100g （瓶詰）</p>
                        <p class="description__price">1,000円</p>
                    </div>
                </a>


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
            <div class="itemlist__block">
                <a href="">

                    <!-- 商品画像 -->
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products.jpg')); ?>" alt="商品画像01" width="100%">
                    </div>

                    <!-- 商品概要 -->
                    <div class="description">
                        <p class="description__name">アカシアはちみつ</p>
                        <p class="description__price">1,000円</p>
                    </div>
                </a>


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


            <div class="itemlist__block">
                <a href="">

                    <!-- 商品画像 -->
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products.jpg')); ?>" alt="商品画像01" width="100%">
                    </div>

                    <!-- 商品概要 -->
                    <div class="description">
                        <p class="description__name">アカシアはちみつ</p>
                        <p class="description__price">1,000円</p>
                    </div>
                </a>


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
            <div class="itemlist__block">
                <a href="">

                    <!-- 商品画像 -->
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products.jpg')); ?>" alt="商品画像01" width="100%">
                    </div>

                    <!-- 商品概要 -->
                    <div class="description">
                        <p class="description__name">アカシアはちみつ</p>
                        <p class="description__price">1,000円</p>
                    </div>
                </a>

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
            <div class="itemlist__block">
                <a href="">

                    <!-- 商品画像 -->
                    <div class="img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/products.jpg')); ?>" alt="商品画像01" width="100%">
                    </div>

                    <!-- 商品概要 -->
                    <div class="description">
                        <p class="description__name">アカシアはちみつ</p>
                        <p class="description__price">1,000円</p>
                    </div>
                </a>


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
    </div>
</div>

<?php get_footer(); ?>