<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php get_template_part('tmp/list'); ?>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_footer(); ?>