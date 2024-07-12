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

  wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/common-child.min.css');
  wp_enqueue_style(
    'child-recruit-style',
    get_stylesheet_directory_uri() . '/css/common-child.min.css',
    array('parent-style')
  );

  wp_enqueue_script(
    'child-js',
    get_stylesheet_directory_uri() . '/afterschool.js',
    array(),
    '',
    true
  );
  wp_enqueue_script(
    'scroll-js',
    get_stylesheet_directory_uri() . '/scrollreveal.min.js',
    array(),
    '',
    true
  );
}

add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
  if ($post->post_type === 'page') {
    remove_post_type_support('page', 'editor');
    return false;
  }
  return $use_block_editor;
}, 10, 2);

function user_remove_menus()
{
  $current_user = wp_get_current_user();
  if ($current_user->ID == "2") //非表示にしたいアカウントのID　ユーザーでアカウントをホバーすると確認できます
  {
    remove_menu_page('edit-comments.php'); // コメント
    remove_menu_page('users.php'); // ユーザー
    remove_menu_page('tools.php'); // ツール
    remove_menu_page('plugins.php'); // プラグイン
    remove_menu_page('edit.php?post_type=acf-field-group'); // Advanced Custom Fields.
    remove_menu_page('edit.php?post_type=smart-custom-fields'); // Smart Custom Fields.
    remove_menu_page('cptui_main_menu'); // CPT UI
  }
}
add_action('admin_menu', 'user_remove_menus', 999);