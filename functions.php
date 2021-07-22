<?php
 	//*****************************************************************
	//  テーマサポート
	//*****************************************************************
	add_theme_support( 'menus' );     //テーマメニュー
	add_theme_support( 'title-tag' ); //titleタグ出力

	//*****************************************************************
	//  Prefetch
	//*****************************************************************
	function gg_gfonts_prefetch() {
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
		echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>';
	}
	add_action('wp_head', 'gg_gfonts_prefetch');

	//*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************
	function mysite_script() {
		wp_enqueue_style( 'Nunito', 'https://fonts.googleapis.com/css2?family=Nunito&display=swap', array(), '');
		wp_enqueue_style( 'Nunito-wght', 'https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap', array(), '');
		wp_enqueue_style( 'o-bisu_css', get_template_directory_uri().'/scss/style.css', array(), '1.0.0');
		wp_enqueue_style( 'o-bisu_style', get_template_directory_uri().'/style.css', array(), '1.0.0');
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js' , array(), "3.6.0", true );
		wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js' , array(), "1.12.1", true );
		wp_enqueue_script( 'scriptjs', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true );
		wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.js', array(), '1.8.0', true );
		wp_enqueue_script( 'slick-ui', get_template_directory_uri().'/js/slick.min.js', array(), '1.8.0', true );
	}
	add_action('wp_enqueue_scripts','mysite_script');