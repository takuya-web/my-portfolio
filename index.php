<?php get_header(); ?>
  <main class="l-main">
    
    <article class="p-main-visual">
      <img src="<?php echo get_template_directory_uri(); ?>/images/index_main-visual.jpeg">
      <p><?php bloginfo('description'); ?></p>
    </article>

    <article class="p-main-visual__catchcopy l-body__content-area">
      <p>キャッチコピーが入ります。</p>
      <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
    </article>

    <article class="p-service l-body__content-area">
      <h2>Service</h2>
      <ul class="p-service__item-wrapper">
        <li class="p-service__item-block">
          <div class="p-service__item-block__spacer">
          <img class="p-service__logo" src="<?php echo get_template_directory_uri(); ?>/images/index_main-contents_coding.png">
          </div>
          <p>コーディング</p>
          <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
        </li>
        <li class="p-service__item-block">
          <div class="p-service__item-block__spacer">
          <img class="p-service__logo" src="<?php echo get_template_directory_uri(); ?>/images/index_main-contents_design.png">
          </div>
          <p>Webデザイン</p>
          <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
        </li>
        <li class="p-service__item-block">
          <div class="p-service__item-block__spacer">
          <img class="p-service__logo" src="<?php echo get_template_directory_uri(); ?>/images/index_main-contents_marketing.png">
          </div>
          <p>コンテンツマーケティング</p>
          <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
        </li>
      </ul>
    </article>

    <article class="p-works">
      <h2>Works</h2>
      <ul class="p-works__grid p-works__slick">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a></li>
          <?php endwhile; ?>
        <?php else: ?>
          <h2>表示する画像がありません。</h2>
        <?php endif; ?>
      </ul>
    </article>

    <article class="p-news">
      <h2>News</h2>
      <ul>
        <?php
          $args = array(
            'post_type'     => 'news',
            'post_per_page' => 4
          );
          $news_post = new WP_Query( $args );
          if( $news_post -> have_posts()):
        ?>
          <?php while( $news_post -> have_posts()): $news_post -> the_post(); ?>
            <li><p><?php the_time( 'Y/n/j' ); ?></p><p><a href="<?php the_permalink(); ?>"><?php remove_filter('the_content', 'wpautop'); ?><?php the_title(); ?></a></p></li>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </ul>
    </article>

    <article class="p-contact__button l-body__content-area">
      <h2>Contact</h2>
      <button class="c-button__contact">
        <a href="">制作のご依頼やパートナー契約などはこちらより</a>
      </button>
    </article>
    <!-- fade-layer -->
    <div class="l-body__fade-layer"></div>
  </main>
<?php get_footer(); ?>