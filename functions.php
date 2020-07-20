<?php
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
register_nav_menu( 'header-nav', ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav', ' フッターナビゲーション ' );
function load_extra_files() {
  wp_enqueue_style('prism-style', get_stylesheet_directory_uri() . '/prism.css');
  wp_enqueue_script('prism-script', get_stylesheet_directory_uri() . '/prism.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'load_extra_files');