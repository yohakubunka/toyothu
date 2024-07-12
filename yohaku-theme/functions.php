<?php
// wordpress basic options --------------------------------------------------------------------------------
//@codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support('html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

// hook method --------------------------------------------------------------------------------
require get_template_directory() . '/functions/method.php';
require get_template_directory() . '/functions/theme-option.php';
require get_template_directory() . '/functions/theme_customizer/childrens-theme-customizer.php';
require get_template_directory() . '/functions/theme_customizer/afterschool-theme-customizer.php';
require get_template_directory() . '/functions/theme_customizer/houjin-theme-customizer.php';
require get_template_directory() . '/functions/theme_customizer/olive-theme-customizer.php';
require get_template_directory() . '/functions/custom-posts.php';
require get_template_directory() . '/functions/custom-fields/childrens_about_custom_field.php';
require get_template_directory() . '/functions/custom-fields/childrens_point_custom_field.php';
require get_template_directory() . '/functions/custom-fields/childrens_life_custom_field.php';
require get_template_directory() . '/functions/custom-fields/childrens_guide_custom_field.php';
// require get_template_directory() . '/functions/custom-fields/childrens_contact_custom_field.php';


// wp_localize_script() setting --------------------------------------------------------------------------------
require get_template_directory() . '/js/wp_localize_script.php';

// read script style sheet --------------------------------------------------------------------------------
//headで読み込ませる
function my_script_init()
{
  wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array());
  //wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all' );
  wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick/slick.js', array());



  // デバッグモードだった場合はCSSを読み込む
  if (WP_DEBUG && current_user_can('manage_options')) {
    wp_enqueue_style('common_css', get_template_directory_uri() . '/css/common.css', array(), '1.0.0', 'all');
    wp_enqueue_style('debug_css', get_template_directory_uri() . '/debug/css/debug.css', array(), '1.0.0', 'all');
  } else {
    wp_enqueue_style('common_css', get_template_directory_uri() . '/css/common.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('valiable_css', get_template_directory_uri() . '/css/valiable.css', array(), '1.0.0', 'all');
  }
  wp_enqueue_style('php_in_css', get_template_directory_uri() . '/css/php_in_css.php', array(), '1.0.0', 'all');


  wp_enqueue_style('slick_css', get_template_directory_uri() . '/js/slick/slick.css', array(), '1.0.0', 'all');
  wp_enqueue_style('slick_theme_css', get_template_directory_uri() . '/js/slick/slick-theme.css', array(), '1.0.0', 'all');
  // fontawesome
  wp_enqueue_script('fontawesome_js', 'https://kit.fontawesome.com/39468e6aef.js', array());
}
add_action('wp_enqueue_scripts', 'my_script_init');
//footerで読み込ませる
function my_load_widget_scripts()
{

  if (WP_DEBUG && current_user_can('manage_options')) {
    // vue_script  ※デバッグモード用vue
    wp_enqueue_script('vue_js', get_template_directory_uri() . '/js/vue.js', array());
  } else {
    wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick/slick.min.js', array());
    // vue_script  ※本番用vue
    wp_enqueue_script('vue_js', get_template_directory_uri() . '/js/vue.min.js', array());
  }

  // common_script
  wp_enqueue_script('common_js', get_template_directory_uri() . '/js/common.js', array());
  // code-prettify
  wp_enqueue_script('code-ttify_js', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js', array());

  if (WP_DEBUG && current_user_can('manage_options')) {
    wp_enqueue_script('debug_js', get_template_directory_uri() . '/debug/js/debug.js', array());
  }
}
// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');
//adminで読み込ませる
function my_admin_styles()
{
  wp_enqueue_style('my_admin_css', get_template_directory_uri() . '/css/_mixin.css', '', '1.4.0');
}
add_action('admin_print_styles', 'my_admin_styles');

//管理画面用css
function my_admin_style()
{
  wp_enqueue_style('my_admin_style', get_template_directory_uri() . '/css/admin/admin.min.css');
}
add_action('admin_enqueue_scripts', 'my_admin_style');

//ログイン画面用css
function custom_login()
{
  $files = '<link rel="stylesheet" href=" ' . get_template_directory_uri() . '/css/admin/login.min.css" />';
  echo $files;
}
add_action('login_enqueue_scripts', 'custom_login');


// meta title meta description  --------------------------------------------------------------------------------
require_once(dirname(__FILE__) . '/functions/seo.php');
require get_template_directory() . '/functions/seo_ogp.php';


// 投稿記事のpタグ,brタグが消えてしまう対処  --------------------------------------------------------------------------------
function my_tiny_mce_before_init($init_array)
{
  $init_array['valid_elements']          = '*[*]';
  $init_array['extended_valid_elements'] = '*[*]';
  return $init_array;
}
add_filter('tiny_mce_before_init', 'my_tiny_mce_before_init');

// メディアライブラリにSVG画像をアップロード可能にする --------------------------------------------------------------
add_filter('upload_mimes', 'set_mime_types');
function set_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

// ログイン画面のロゴ変更
function custom_login_logo()
{
  echo '<style type="text/css">h1 a { background: url(' . get_template_directory_uri() . '/images/login-logo.png) no-repeat center center !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

//wp_headのtitleタグを削除 --------------------------------------------------------------------------------------
remove_action('wp_head', '_wp_render_title_tag', 1);

// 通常投稿に親子関係を付ける ---------------------------------------------------------------------------------
function registered_post_hierarchical($post_type, $post_type_object)
{
  if ($post_type == 'post') {
    $post_type_object->hierarchical = true;
    add_post_type_support('post', 'page-attributes');
  }
}
add_action('registered_post_type', 'registered_post_hierarchical', 10, 2);

// 固定ページをダッシュボードに表示 ---------------------------------------------------------------------------------
function add_page_to_admin_menu()
{
  // add_menu_page('トップページ設定', 'トップページ設定', 'manage_options', 'post.php?post=80&action=edit', '', 'dashicons-admin-generic', 4);
}
add_action('admin_menu', 'add_page_to_admin_menu');

// メールアドレスの確認用入力と一致チェック機能をつける-----------------------------------------------------------------
add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2);
function wpcf7_validate_email_filter_extend($result, $tag)
{
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim(strtr((string) $_POST[$name], "n", " "));
  if ('email' == $type || 'email*' == $type) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate($tag, "確認用のメールアドレスが一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}

/* 【出力カスタマイズ】wp_get_archives の年表記を置き換える */
add_filter('gettext', 'my_gettext', 20, 3);
function my_gettext($translated_text, $original_text, $domain)
{
  if ($original_text == '%1$s %2$d') {
    $translated_text = '%2$s.%1$02d';
  }
  return $translated_text;
}

// アーカイブの記事数がaタグの外に存在してしまうのでaタグの中に格納するための処理
add_filter('get_archives_link', 'my_archives_link');
function my_archives_link($output)
{
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/', '（$2）</a>', $output);
  return $output;
}

//NEWS下層ページ、前の記事、次の記事にクラスを付与
function add_prev_post_link_class($output)
{
  return str_replace('<a href=', '<a class="prev-link" href=', $output); //前の記事リンク
}
add_filter('previous_post_link', 'add_prev_post_link_class');
function add_next_post_link_class($output)
{
  return str_replace('<a href=', '<a class="next-link" href=', $output); //次の記事リンク
}
add_filter('next_post_link', 'add_next_post_link_class');



// debugモードの処理
if (WP_DEBUG && current_user_can('manage_options')) {
  /**
   * Load composer autoload.php
   */
  require_once __DIR__ . '/vendor/autoload.php';
}


// カスタム投稿でエディターを無効にする
add_action('init', function () {
  remove_post_type_support('childrens_download', 'editor');
}, 99);


function my_admin_style02()
{
  echo '<style>
  .block-editor-post-preview__button-toggle {
    display: none !important;
}
  </style>' . PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style02');
