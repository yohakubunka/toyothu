<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'houjin-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
  );

  wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/common-houjin.min.css');
  wp_enqueue_style(
    'houjin-min-style',
    get_stylesheet_directory_uri() . '/css/common-houjin.min.css',
    array('parent-style')
  );

  wp_enqueue_script(
    'houjin-js',
    get_stylesheet_directory_uri() . '/houjin.js',
    array(),
    '',
    true
  );
  wp_enqueue_script(
    'retired-js',
    get_stylesheet_directory_uri() . '/retired.js',
    array(),
    '',
    true
  );
  wp_enqueue_script(
    'career-js',
    get_stylesheet_directory_uri() . '/career.js',
    array(),
    '',
    true
  );
  wp_enqueue_script(
    'confilm-js',
    get_stylesheet_directory_uri() . '/confilm.js',
    array(),
    '',
    true
  );
  wp_enqueue_script(
    'application-js',
    get_stylesheet_directory_uri() . '/application.js',
    array(),
    '',
    true
  );
  wp_enqueue_script('scroll-js', 'https://unpkg.com/scrollreveal', array());
}
// メールアドレスの確認用入力と一致チェック機能をつける-----------------------------------------------------------------
add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter', 11, 2);
function wpcf7_validate_email_filter($result, $tag)
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

function form_post()
{
  if (isset($_POST)) {
    $form_post = $_POST;
    print_r($form_post);
  }
}
add_shortcode('sc_form_post', 'form_post');

//テーマカスタマイザー設定
//メインビジュアル
function my_theme_mv($wp_customize)
{
  $wp_customize->add_section(
    'mv_section',
    [
      'title'           => '退職者ページメインビジュアル',
      'priority'        => 1,
      'description' => '退職者ページメインビジュアルの設定を編集します',
    ]
  );
  $wp_customize->add_setting('houjin_retired_mainvisual_01'); //設定項目を追加
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'retired_mainvisual01', array(
    'label' => 'メインビジュアル', //設定項目のタイトル
    'section' => 'mv_section', //追加するセクションのID
    'settings' => 'houjin_retired_mainvisual_01', //追加する設定項目のID
    'description' => 'メインビジュアルの画像を設定してください', //設定項目の説明
  )));
}
add_action('customize_register', 'my_theme_mv');

// // フッター ================================================================================================
// function houjin_sec_footer($wp_customize)
// {
//   $wp_customize->add_section(
//     'houjin_sec_footer',
//     [
//       'title'           => 'フッター',
//       'priority'        => 1,
//       'description' => 'フッターを編集します',
//       //'active_callback' =>
//     ]
//   );

//   $wp_customize->add_setting('houjin_footer_logo'); //設定項目を追加
//   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_footer_logo', array(
//     'label' => 'フッターロゴ', //設定項目のタイトル
//     'section' => 'houjin_sec_footer', //追加するセクションのID
//     'settings' => 'houjin_footer_logo', //追加する設定項目のID
//     'description' => 'フッターロゴを設定してください', //設定項目の説明
//   )));
// }
// add_action('customize_register', 'houjin_sec_footer');

//     // フッター ================================================================================================