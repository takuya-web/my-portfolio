<?php get_header(); ?>
  <main class="l-main">
    
    <article class="p-profile">
      <h2>About</h2>
      <div class="p-profile__wrapper">
        <img class="p-profile__photo" src="<?php echo get_template_directory_uri(); ?>/images/author_profile-photo.jpg">
        <div class="p-profile__content-block">
          <h3>Profile</h3>
          <p>ポートフォリオをご覧いただきありがとうございます。</p>
          <p>京都府出身のTakuyaと申します。</p>
          <p>2021年6月より、オンラインプログラミングスクールのRaiseTechにてWebサイト制作の学習を始め、約2ヵ月間で当サイト制作まで終了しました</p>
          <p>Sass、FLOCSSによるCSS設計を基本とし、JavaScript(jQuery)を用いての実装、WordPress化まで承っております。</p>
          <p>どうぞ宜しくお願い致します。</p>
          <br><br>
          <h3>Skill</h3>
          <img class="p-profile__logo" src="<?php echo get_template_directory_uri(); ?>/images/author_logo-html.png" alt="HTML">
          <img class="p-profile__logo" src="<?php echo get_template_directory_uri(); ?>/images/author_logo-css.png" alt="CSS">
          <img class="p-profile__logo" src="<?php echo get_template_directory_uri(); ?>/images/author_logo-sass.png" alt="Sass">
          <img class="p-profile__logo" src="<?php echo get_template_directory_uri(); ?>/images/author_logo-github.png" alt="GitHub">
          <img class="p-profile__logo" src="<?php echo get_template_directory_uri(); ?>/images/author_logo-wordpress.png" alt="WordPress">
          <img class="p-profile__logo" src="<?php echo get_template_directory_uri(); ?>/images/author_logo-jquery.png" alt="jQuery">
        </div>
      </div>
    </article>
    <!-- fade-layer -->
    <div class="l-body__fade-layer"></div>
  </main>
<?php get_footer(); ?>