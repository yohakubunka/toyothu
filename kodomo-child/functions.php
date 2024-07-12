<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
  );
  //子テーマのCSS読込）
  wp_enqueue_style('common-child', get_stylesheet_directory_uri() . '/css/common-child.min.css');
  wp_enqueue_style(
    'child-common',
    get_stylesheet_directory_uri() . '/css/common-child.min.css',
    array('common-child')
  );

  if (get_site_multi() == "泉の杜保育園" || get_site_multi() == "世田谷１丁目ゆたか園") {
    //子テーマのCSS読込）
    wp_enqueue_style('common-hoiku', get_stylesheet_directory_uri() . '/css/common-hoiku.min.css');
    wp_enqueue_style(
      'hoiku-common',
      get_stylesheet_directory_uri() . '/css/common-hoiku.min.css',
      array('common-hoiku')
    );
  }
}
function theme_enqueue_scripts()
{
  wp_enqueue_script('scroll-js', get_stylesheet_directory_uri() . '/js/scrollreveal.min.js');
  wp_enqueue_script('common-child', get_stylesheet_directory_uri() . '/js/common-child.js');
  wp_enqueue_script('scroll-link-js', 'https://unpkg.com/scrollreveal', array());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts', 100);

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{

  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


add_action('admin_menu', 'remove_menus', 999);
function remove_menus()
{
  global $current_user;
  if ($current_user->ID == "2") {
    remove_menu_page('upload.php'); //メディア
    remove_menu_page('edit.php?post_type=acf-field-group'); //フィールドグループ
    remove_menu_page('edit-comments.php'); //コメントメニュー
    remove_menu_page('plugins.php'); //プラグインメニュー
    remove_menu_page('manual'); //manual
    remove_menu_page('tools.php'); //ツールメニュー
    remove_menu_page('users.php'); //ユーザー
    remove_menu_page('ai1wm_export'); //ALL-in-One
    remove_menu_page('options-general.php'); //一般
    remove_menu_page('edit.php?post_type=smart-custom-fields'); //フィールドグループ
    remove_menu_page('cptui_main_menu'); //CPT
  }
}

/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
});
/**
 * ページネーション出力関数 =============================================================================================
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 * $page_dots : 後ろに...を付けるか
 * $page_dots_before : 前に...を付けるか
 * $numbering : 数字を入れるか
 * $all_numbers : 数字をすべて入れるか
 */
function pagination(
  $pages = false,
  $paged = false,
  $range = 1,
  $show_only = false,
  $page_dots = false,
  $page_dots_before = false,
  $numbering = true,
  $all_numbers = false
) {
  if ($pages) {
    $pages = (int) $pages;    //float型で渡ってくるので明示的に int型 へ
  } else {
    //global $pages;
  }
  if ($paged) {
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように
  } else {
    //global $paged;
  }

  //表示テキスト
  //最初のページに戻るボタン　画像にも変更できます。
  $text_first   = "最初";
  //最後のページに進むボタン
  $text_last    = "最後";

  if ($show_only && $pages === 1) {
    // １ページのみで表示設定が true の時
    echo '<div class="pagination"><span class="current pager">1</span></div>';
    return;
  }

  if ($pages === 1) return;    // １ページのみで表示設定もない場合

  if (1 !== $pages) {
    //２ページ以上の時
    echo '<div class="pagination">';
    // if ($paged > $range + 1) {
    //   // 「最初へ」 の表示
    //   echo '<a href="', get_pagenum_link(1), '" class="first">', $text_first, '</a>';
    // }
    if ($paged > 1) {
      // 「前へ」 の表示
      echo '<a href="', get_pagenum_link($paged - 1), '" class="prev">', get_template_part('/images/svg/page-prev'), '</a>';
    }
    // 前に...の表示
    if ($page_dots_before == true && $paged != 1  && $paged >= $range + 1 && $paged != $range + 1) {
      echo  "<p class='pagenation_dots'>...</p>";
    }
    for ($i = 1; $i <= $pages; $i++) {

      if ($i <= $paged + 2 && $i >= $paged - 1 && $numbering && $all_numbers == false) {
        // $paged +- $range 以内であればページ番号を出力
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
      //ページ番号をすべて表示
      if ($numbering && $all_numbers) {
        $page_dots = false;
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
    }
    // 後ろに...の表示
    if ($page_dots && $pages - $paged >= $range + 1) {
      echo  "<p class='pagenation_dots'>...</p>";
    }
    if ($paged < $pages) {
      // 「次へ」 の表示
      echo '<a href="', get_pagenum_link($paged + 1), '" class="next">', get_template_part('/images/svg/page-next'), '</a>';
    }

    // if ($paged + $range < $pages) {
    //   // 「最後へ」 の表示
    //   echo '<a href="', get_pagenum_link($pages), '" class="last">', $text_last, '</a>';
    // }
    echo '</div>';
  }
}
/**
 * ページネーション出力関数 =============================================================================================
 */

function my_archives_active($link_html)
{
  $date = get_query_var('monthnum');
  $date = sprintf('%02d', $date); // 01
  $my_month = '/' . get_query_var('year') . '/' . $date;

  if (strstr($link_html, $my_month)) {
    $link_html = preg_replace('@<li>@i', '<li class="active">', $link_html);
  }

  return $link_html;
}
add_filter('get_archives_link', 'my_archives_active');



function addArchiveDescriptionForm()
{

  $post_types = [
    'post' => 'お知らせ',
    'childrens_download' => '書類ダウンロード',
  ];

  foreach ($post_types as $key => $val) {
    add_settings_field($key . '_description', $val . 'のディスクリプション', 'exArchiveDescriptionForm', 'writing', 'default',  [$key]);
    register_setting('writing', $key . '_description');
  }
}

add_filter('admin_init', 'addArchiveDescriptionForm');

function exArchiveDescriptionForm($args)
{

  $key = $args[0] . '_description';
  $val = get_option($key);
?>
  <textarea name="<?= $key ?>" id="<?= $key ?>" rows="8" cols="80" class="regular-text"><?php echo esc_html($val); ?></textarea>
<?php

}
