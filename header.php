<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>

<body>
<header>
  <div class="header-inner">
    <?php
    if(is_home() || is_front_page()) {
      $title_tag_start = '<h1 class="site-title">';
      $title_tag_end = '</h1>';
    } else {
      $title_tag_start = '<p class="site-title">';
      $title_tag_end =  '</p>';
    }
    ?>
    <div class="site-title-wrap">
      <?php echo $title_tag_start; ?>
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      <?php echo $title_tag_end; ?>
    </div>
  </div>
</header>