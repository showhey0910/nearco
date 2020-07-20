<article class="article-item">
  <span class="article-date">
    <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
    </time>
  </span>
  <h2>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
</article>