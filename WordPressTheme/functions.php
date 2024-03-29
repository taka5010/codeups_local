<?php
function add_theme_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );
    // CSS
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null );
    wp_enqueue_style( 'theme-style', get_theme_file_uri( '/assets/css/style.css' ), array(), null );
    // JavaScript
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true );
    wp_enqueue_script( 'jquery-inview', get_theme_file_uri( '/assets/js/jquery.inview.min.js' ), array('jquery'), null, true );
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'theme-script', get_theme_file_uri( '/assets/js/script.js' ), array('jquery'), null, true );
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// 管理画面のアイキャッチ表示
  add_theme_support( 'post-thumbnails' );
//タグマネージャー追加
  function add_gtag_script() {
    ?>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-LWF4DFW6R9');
</script>
<?php
}
add_action('wp_head', 'add_gtag_script');


// カスタム投稿の記事数調整
function my_custom_post_count($query) {
  if ($query->is_main_query()) {
      // 特定の投稿タイプの場合
      if ($query->is_post_type_archive('voice')) {
          $query->set('posts_per_page', 6); // 表示する記事数を指定
      }
      if ($query->is_post_type_archive('campaign')) {
          $query->set('posts_per_page', 4); // 表示する記事数を指定
      }
      // 特定のページの場合
      if (is_page('your_page_slug')) {
          $query->set('posts_per_page', 10); // 表示する記事数を指定
      }
	        // 管理画面の場合
      if (is_admin()) {
          $query->set('posts_per_page', 10); // 表示する記事数を指定
      }
  }
}
add_action('pre_get_posts', 'my_custom_post_count');

//コンタクトフォームの<p>,<br>自動生成削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
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

/* ---------- 投稿の「カテゴリー」と「タグ」の非表示 ---------- */
function my_unregister_taxonomies() {
  global $wp_taxonomies;
  // 「カテゴリー」の非表示
  if (!empty($wp_taxonomies['category']->object_type)) {
    foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
      if ($object_type == 'post') {
        unset($wp_taxonomies['category']->object_type[$i]);
      }
    }
  }
  // 「タグ」の非表示
  if (!empty($wp_taxonomies['post_tag']->object_type)) {
    foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
      if ($object_type == 'post') {
        unset($wp_taxonomies['post_tag']->object_type[$i]);
      }
    }
  }
  return true;
}
add_action('init', 'my_unregister_taxonomies');
//Contact Form 7 のカスタマイズ
function filter_wpcf7_form_tag( $scanned_tag, $replace ) {
  if(!empty($scanned_tag)){
    //nameで判別
    if($scanned_tag['name'] == 'campaign-select'){
      //カスタム投稿タイプの取得
      global $post;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'campaign',
        'order' => 'DESC',
        );
      $customPosts = get_posts($args);
      if($customPosts){
        foreach($customPosts as $post){
          setup_postdata( $post );
          $title = get_the_title();
          //$scanned_tagに情報を追加
          $scanned_tag['values'][] = $title;
          $scanned_tag['labels'][] = $title;
        }
      }
      wp_reset_postdata();
    }
  }
  return $scanned_tag;
};

add_filter( 'wpcf7_form_tag', 'filter_wpcf7_form_tag', 11, 2 );

/**
* @param string $page_title ページのtitle属性値
* @param string $menu_title 管理画面のメニューに表示するタイトル
* @param string $capability メニューを操作できる権限（manage_options とか）
* @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
* @param string|null $icon_url メニューに表示するアイコンの URL
* @param int $position メニューの位置
*/
SCF::add_options_page( 'FAQ', 'FAQ', 'manage_options', 'faq-options','dashicons-lightbulb', '5' );

/**
* @param string $page_title ページのtitle属性値
* @param string $menu_title 管理画面のメニューに表示するタイトル
* @param string $capability メニューを操作できる権限（manage_options とか）
* @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
* @param string|null $icon_url メニューに表示するアイコンの URL
* @param int $position メニューの位置
*/
SCF::add_options_page( '料金一覧', '料金一覧', 'manage_options', 'price-options','dashicons-money', '5');

/**
* @param string $page_title ページのtitle属性値
* @param string $menu_title 管理画面のメニューに表示するタイトル
* @param string $capability メニューを操作できる権限（manage_options とか）
* @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
* @param string|null $icon_url メニューに表示するアイコンの URL
* @param int $position メニューの位置
*/
SCF::add_options_page( 'ギャラリー', 'ギャラリー', 'manage_options', 'gallery-options','dashicons-format-gallery', '5' );