<?php get_header(); ?>
  <main class="l-main">
    
    <article class="p-main-visual">
      <img src="<?php echo get_template_directory_uri(); ?>/images/index_main-visual.jpeg">
      <p><?php bloginfo('description'); ?></p>
    </article>

    <article class="p-main-visual__catchcopy l-body__content-area">
      <p>クライアントのご要望を的確に再現し、高品質なホームページを作ります</p>
      <p>Sass、FLOCSSによるCSS設計を取り入れ保守性を高めています。</p>
      <p>PC、タブレット、スマートフォンなどのデバイス、各ブラウザに対応させ、細かく検証を行います。</p>
    </article>

    <article class="p-service l-body__content-area fade">
      <h2>Service</h2>
      <ul class="p-service__item-wrapper">
        <li class="p-service__item-block">
          <div class="p-service__item-block__spacer">
          <img class="p-service__logo" src="<?php echo get_template_directory_uri(); ?>/images/index_main-contents_coding.png">
          </div>
          <p>コーディング</p>
          <p>PC、タブレット、スマートフォンなどのデバイス、各ブラウザに対応させ、細かく検証を行います。</p>
        </li>
        <li class="p-service__item-block">
          <div class="p-service__item-block__spacer">
          <img class="p-service__logo" src="<?php echo get_template_directory_uri(); ?>/images/index_main-contents_design.png">
          </div>
          <p>Webデザイン</p>
          <p>目的に応じて「伝わる」デザインをご提供します。</p>
        </li>
        <li class="p-service__item-block">
          <div class="p-service__item-block__spacer">
          <img class="p-service__logo" src="<?php echo get_template_directory_uri(); ?>/images/index_main-contents_marketing.png">
          </div>
          <p>コンサルティング</p>
          <p>SEO、アクセス解析、マーケティング戦略などをご提案します。</p>
        </li>
      </ul>
    </article>

    <article class="p-works fade">
      <h2>Works</h2>
      <ul class="p-works__grid p-works__slick">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?><p class="c-works__grid__title"><?php the_title(); ?></P></a></li>
          <?php endwhile; ?>
        <?php else: ?>
          <h2>表示する画像がありません。</h2>
        <?php endif; ?>
      </ul>
    </article>

    <article class="p-news fade">
      <h2>News</h2>
      <ul>
        <?php
          $args = array(
            'post_type'     => 'news',
            'posts_per_page' => 4
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

    <article class="p-contact__button l-body__content-area fade">
      <h2>Contact</h2>
      <button class="c-button__contact">
        <a href="<?php echo site_url( '/contact' ); ?>">制作のご依頼やパートナー契約などはこちらより</a>
      </button>
    </article>
    <!-- fade-layer -->
    <div class="l-body__fade-layer"></div>
  </main>
<?php get_footer(); ?>