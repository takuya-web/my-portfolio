//ハンバーガーメニュー&スライドメニュー
jQuery(function(){
  jQuery('.p-header__menu-button').on('click', function() {
    jQuery(this).toggleClass('active');
    jQuery('.p-header__nav').fadeToggle(100);
    jQuery(".l-body__fade-layer").toggleClass('active');
  });
});