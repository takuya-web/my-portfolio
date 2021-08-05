<?php get_header(); ?>
  <main class="l-main">

    <article class="p-archive">
      <h2>Works</h2>
      <ul class="p-archive__grid">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <li class="p-archive__grid__image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?><p class="c-works__grid__title"><?php the_title(); ?></P></a></li>
          <?php endwhile; ?>
        <?php else: ?>
          <h2>表示する画像がありません。</h2>
        <?php endif; ?>
      </ul>
    </article>
    <article class="c_pagination">
      <?php if( function_exists('the_pagination')) the_pagination(); ?>
    </article>

    <!-- fade-layer -->
    <div class="l-body__fade-layer"></div>
  </main>
<?php get_footer(); ?>