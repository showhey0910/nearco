<div class="container">
  <div class="contents">
    <?php if(have_posts()): the_post(); ?>
      <article class="article">
        <div class="article-info">
          <span class="article-date">
            <time
            datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date(); ?>
            </time>
          </span>
        </div>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    <?php endif; ?>
  </div>
</div>