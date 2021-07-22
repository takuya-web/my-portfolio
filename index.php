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
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample.png"></li>
      </ul>
    </article>

    <article class="p-news">
      <h2>News</h2>
      <ul>
        <li><p>2021/07/01</p><p>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。</p></li>
        <li><p>2021/07/01</p><p>ここに本文が入ります。ここに本文が入ります。</p></li>
        <li><p>2021/07/01</p><p>ここに本文が入ります。ここに本文が入ります。</p></li>
        <li><p>2021/07/01</p><p>ここに本文が入ります。ここに本文が入ります。</p></li>
      </ul>
    </article>

    <article class="p-contact l-body__content-area">
      <h2>Contact</h2>
      <button class="c-button__contact">
        <a href="">制作のご依頼やパートナー契約などはこちらより</a>
      </button>
    </article>
    <!-- fade-layer -->
    <div class="l-body__fade-layer"></div>
  </main>
<?php get_footer(); ?>