//ハンバーガーメニュー&スライドメニュー
jQuery(function(){
  jQuery('.p-header__menu-button').on('click', function() {
    jQuery(this).toggleClass('active');
    jQuery('.p-header__nav').fadeToggle(100);
    jQuery('.l-body__fade-layer').toggleClass('active');
  });
});

//Worksスリック
jQuery(function() {
  jQuery('.p-works__slick').slick( {
    autoplay: true,
    arrows: true,
    slidesToShow: 2,
    inifinite: true,
  
    responsive: [{
      breakpoint: 390,
        settings: {
          slidesToShow: 1,
          arrow: false,
        }
      }]
    });
  });