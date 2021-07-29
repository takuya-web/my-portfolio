//ハンバーガーメニュー&スライドメニュー
jQuery(function(){
  jQuery('.p-header__menu-button').on('click', function() {
    jQuery(this).toggleClass('active');
    jQuery('.p-header__nav').fadeToggle(100);
    jQuery('.l-body__fade-layer').toggleClass('active');
  });
});

//ハンバーガーメニュー動作不具合対策
const mediaQuery = window.matchMedia('(min-width: 835px)');
mediaQuery.addListener(handle); //width監視、発火
function handle(mm) {
  if (mm.matches) {
    //幅834px以上の時
    document.querySelector('.p-header__nav').style.display = 'block' //css書き換え
  } else {
    //それ以外の時
    document.querySelector('.p-header__nav').style.display = 'none' //css書き換え
  }
}

//Worksスリック
jQuery(function() {
  jQuery('.p-works__slick').slick( {
    autoplay: true,
    arrows: true,
    slidesToShow: 3,
    inifinite: true,
  
    responsive: [{
      breakpoint: 835,
      settings: {
        slidesToShow: 1,
        arrows: false,
      }
    }]
  });

  //fedeUpTrigger
	jQuery(window).on('scroll', function (){
		jQuery('.fade').each(function(){
			let elemPos = jQuery(this).offset().top;
			let scroll = jQuery(window).scrollTop();
			let windowHeight = jQuery(window).height();
			if (scroll > elemPos - windowHeight){
				jQuery(this).addClass('fadein');
			} else {
        jQuery(this).removeClass('fadein');
      }
		});
	});
});