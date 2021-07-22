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

  <header class="p-header">
    <h1 class="p-header__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/index_header-logo.svg"></h1>
    <nav class="p-header__nav">
      <ul>
        <li><a href="">About</a></li>
        <li><a href="">Service</a></li>
        <li><a href="">Works</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
      <button class="p-header__menu-button" id="btn01">
        <span></span>
        <span></span>
        <span></span>
      </button>
  </header>