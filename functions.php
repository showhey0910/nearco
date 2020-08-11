<?php
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
register_nav_menu( 'header-nav', ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav', ' フッターナビゲーション ' );

// prism.js & prism.css 読み込み
function load_extra_files() {
  wp_enqueue_style('prism-style', get_stylesheet_directory_uri() . '/prism.css');
  wp_enqueue_script('prism-script', get_stylesheet_directory_uri() . '/prism.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'load_extra_files');

// prismショートコード
function prism_shortcode($atts, $content=null) {
  extract(shortcode_atts(array(
    'lang' => 'none',
    'file' => 'terminal',
  ), $atts ));
  // ファイル名未指定の場合はターミナルとして表示され、行数は表示されない
  function prism_class($lang, $file) {
    if ($file == 'terminal') {
      return 'lang-'.$lang;
    } else {
      return 'lang-'.$lang.' line-numbers';
    }
  }
  $html = '<pre class="' .prism_class($lang, $file). '" data-language="' .$file. '"><code>' .$content. '</code></pre>';
  return $html;
}
add_shortcode('prism', 'prism_shortcode');