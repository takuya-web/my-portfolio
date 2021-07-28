<?php get_header(); ?>
  <main class="l-main">
    
    <article class="p-single">
      <h2>Works</h2>
      <div class="p-single__wrapper">
        <?php the_post_thumbnail() ?>
        <div class="p-single__content-block">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    </article>
    <!-- fade-layer -->
    <div class="l-body__fade-layer"></div>
  </main>
<?php get_footer(); ?>