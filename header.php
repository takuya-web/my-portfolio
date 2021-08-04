<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="o-bisu.com">
  <meta name="keywords" content="">
  <?php wp_head(); ?>
</head>

<body <?php body_class('l-body'); ?>>
<?php wp_body_open(); ?>

  <header class="p-header">
    <h1 class="p-header__logo">
      <a href="<?php echo esc_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/index_header-logo.svg"></a></h1>
        <?php wp_nav_menu(array(
          'menu' => 'ヘッダーメニュー',
          'container' => 'nav',
          'container_class' => 'p-header__nav',
        )); ?>
      <button class="p-header__menu-button" id="btn01">
        <span></span>
        <span></span>
        <span></span>
      </button>
  </header>