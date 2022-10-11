<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );


//pagechange.js読み込み
function pagechange_scripts(){
  wp_enqueue_script( 'pagechange_script', get_template_directory_uri() .'/js/pagechange.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'pagechange_scripts' );
//miniflowflow.js読み込み
function miniflow_scripts(){
  wp_enqueue_script( 'miniflow_script', get_template_directory_uri() .'/js/miniflow.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'miniflow_scripts' );
//questionflow.js読み込み
function question_scripts(){
  wp_enqueue_script( 'question_script', get_template_directory_uri() .'/js/question.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'question_scripts' );
//header.js読み込み
function header_scripts(){
  wp_enqueue_script( 'header_script', get_template_directory_uri() .'/js/header.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'header_scripts' );
//intromenubutton.js読み込み
function intromenubutton_scripts(){
  wp_enqueue_script( 'intromenubutton_script', get_template_directory_uri() .'/js/intromenubutton.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'intromenubutton_scripts' );



//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

//抜粋文字数設定
function twpp_change_excerpt_length( $length ) {
  return 80;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );
function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );


// 投稿ページのショートコードで指定された PHP ファイルを読み込む関数
function sc_php($atts = array()) {
  shortcode_atts(array(   /* shortcode_atts でショートコードの属性名を指定 */
    'file' => 'default'   /* 属性名とデフォルトの値 */
  ), $atts);   /* 属性を格納する変数 */
  ob_start();   /* バッファリング */
  include(STYLESHEETPATH . "/$atts[file].php");  /* CSSのあるパス = 子テーマのパスを指定 */
  return ob_get_clean();  /* バッファの内容取得、出力バッファを削除 */
}

// ショートコード作成（sc というショートコードは、sc_php()という関数を呼び出すという意味）
add_shortcode('sc', 'sc_php');


//pタグ自動挿入停止
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
  global $post;
  $remove_filter = false;

  $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述 ＝固定ページ
  $post_type = get_post_type( $post->ID );
  if (in_array($post_type, $arr_types)){
                $remove_filter = true;
        }

  if ( $remove_filter ) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }

  return $content;
}
