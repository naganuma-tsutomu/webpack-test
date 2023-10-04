<?php if(have_posts()): while(have_posts()) : the_post(); ?>

    <!--この中に処理を入れる-->

<?php endwhile; ?>
<?php else : ?>
  <p>記事がありません</p>
<?php endif; ?>