<?php
 	//*****************************************************************
	//  テーマサポート
	//*****************************************************************
	add_theme_support( 'menus' );           //テーマメニュー
	add_theme_support( 'title-tag' );       //titleタグ出力
	add_theme_support( 'post-thumbnails' ); //アイキャッチ画像

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

	//*****************************************************************
	//  ビジュアルエディタへのCSS反映
	//*****************************************************************
	function gutenberg_support_setup() {
		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );
	}
	add_action( 'after_setup_theme', 'gutenberg_support_setup' );

	//*****************************************************************
	//  Advanced Custom Fieldsの対策
	//*****************************************************************
	// ACFのオプション設定を反映させる（ボックス配置データを削除する）
  function clear_meta_box_order(){
  // 通常の投稿ページの編集画面
    delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_post' );
  // 固定ページの編集画面
    delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_page' );
  }
  add_action( 'admin_init', 'clear_meta_box_order' );

	//*****************************************************************
	//  投稿(Works)アーカイブページ有効化
	//*****************************************************************
	function post_has_archive( $args, $post_type ) {
		if( 'post' == $post_type ) {
			$args[ 'rewrite' ] = true;
			$args[ 'has_archive' ] = 'works-archive';
		}
		return $args;
	}
	add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

	//*****************************************************************
	//  カスタム投稿(新着情報)追加
	//*****************************************************************
	function custom_post_news() {
		register_post_type(
			'news',
			array(
				'label'        => '新着情報', //管理画面ラベル名
				'public'       => true, //「表示」リンクの有無
				'show_in_rest' => true, //グーテンベルグの有無
				'supports'     => array( 'title', 'editor', 'thumbnail' ), //アイキャッチ画像追加など
				'has_archive'  => true, //一覧ページ表示
			)
		);
	}
	add_action( 'init', 'custom_post_news');

	//*****************************************************************
	//  投稿の名前をWorksに変更(メインループ)
	//*****************************************************************
	function Change_menulabel() {
	  global $menu;
	  global $submenu;
	  $name = 'Works';
	  $menu[5][0] = $name;
	  $submenu['edit.php'][5][0] = $name.'一覧';
	  $submenu['edit.php'][10][0] = '新規追加';
	}
  function Change_objectlabel() {
	  global $wp_post_types;
		$name = 'Works';
		$labels = &$wp_post_types['post']->labels;
		$labels->name = $name;
		$labels->singular_name = $name;
		$labels->add_new = _x('追加', $name);
		$labels->add_new_item = $name.'の新規追加';
		$labels->edit_item = $name.'の編集';
		$labels->new_item = '新規'.$name;
		$labels->view_item = $name.'を表示';
		$labels->search_items = $name.'を検索';
		$labels->not_found = $name.'が見つかりませんでした';
		$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
	}
	add_action( 'init', 'Change_objectlabel' );
	add_action( 'admin_menu', 'Change_menulabel' );

	//*****************************************************************
	//  ページネーション
	//*****************************************************************
	function the_pagination() {
		global $wp_query;
		$bignum = 999999999;
		if ( $wp_query->max_num_pages <= 1 )
			return;
		echo '<nav class="pagination">';
		echo paginate_links( array(
			'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
			'format'       => '',
			'current'      => max( 1, get_query_var('paged') ),
			'total'        => $wp_query->max_num_pages,
			'prev_text'    => '', //戻るのマーク
			'next_text'    => '', //次へのマーク
			'type'         => 'list',
			'end_size'     => 3, //ページ番号の両端に何個の数字を表示するか
			'mid_size'     => 3  //現在のページの両端に何個の数字を表示するか
		));
		echo '</nav>';
	}