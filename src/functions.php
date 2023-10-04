<?php


// ----------------------------------------------------------------------------- css、jquery読み込み
add_action('wp_enqueue_scripts', function () {

  //------------------------------------------  WordPress 本体の jQuery を登録解除
  wp_deregister_script('jquery');

  // ------------------------------------------ jQueryを読み込む
  wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/library/jquery-3.6.0.min.js'), array(), '3.6.0', true);

  // サイト全体でのJS
  wp_enqueue_script('global', get_theme_file_uri('/assets/js/common.js'), array(), null, true);
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/assets/style.css',
    array('parent-style')
  );

  // ------------------------------------------ TOPページ
  if (is_front_page()) {
    wp_enqueue_style('front-page', get_theme_file_uri('/assets/css/front-page.css'), array(), null, 'all');
    wp_enqueue_script('front-page-js', get_theme_file_uri('/assets/js/front-page.js'), array('jquery'), null, true);
  }

  // ------------------------------------------ 商品一覧ページ
  else if (is_post_type_archive('products')) {
    wp_enqueue_style('archive-products', get_theme_file_uri('/assets/css/archive-products.css'), array(), null, 'all');
    wp_enqueue_script('archive-products-js', get_theme_file_uri('/assets/js/archive-products.js'), array('jquery'), null, true);
  } 
  
  // ------------------------------------------ 商品個別ページ
  else if (is_singular('products')) {
    wp_enqueue_style('single-products', get_theme_file_uri('/assets/css/single-products.css'), array(), null, 'all');
    wp_enqueue_script('single--uchina-guide', get_theme_file_uri('/assets/js/single-products.js'), array(), null, true);
  }

  // ------------------------------------------ お問い合わせページ
  else if (is_page('contact')) {
    wp_enqueue_style('page-contact', get_theme_file_uri('/assets/css/page-contact.css'), array(), null, 'all');
    wp_enqueue_script('page-contact', get_theme_file_uri('/assets/js/page-contact.js'), array('jquery'), null, true);
}
});


// ----------------------------------------------------------------------------- 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'products'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// ----------------------------------------------------------------------------- 管理画面の外観部分にメニューを出す
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}


// ----------------------------------------------------------------------------- WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル
define('WP_SCSS_ALWAYS_RECOMPILE', true);
