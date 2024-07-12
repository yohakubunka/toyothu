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
    'scrollreveal.min-js',
    get_stylesheet_directory_uri() . '/scrollreveal.min.js',
    array(),
    '',
    true
  );

  wp_enqueue_script(
    'child-js',
    get_stylesheet_directory_uri() . '/recruit.js',
    array(),
    '',
    true
  );
}


function recruit_mv($wp_customize_recruit_mv)
{
  $wp_customize_recruit_mv->add_section(
    'recruit_mv_section',
    [
      'title'           => '求人ページメインビジュアル設定',
      'priority'        => 5,
      'description' => '求人ページのメインビジュアルを設定します',
      //'active_callback' =>
    ]
  );

  $wp_customize_recruit_mv->add_setting('recruit_logo'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_logo', array(
    'label' => 'ロゴ', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_logo', //追加する設定項目のID
    'description' => 'ロゴを設定して下さい。', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_text');
  $wp_customize_recruit_mv->add_control(
    "recruit_text",
    [
      'settings'    => 'recruit_text',
      'label'       => 'ロゴの下の文字を設定します。（14文字まで）',
      'section'     => 'recruit_mv_section',
      'type'        => 'textarea'
    ]
  );

  $wp_customize_recruit_mv->add_setting('recruit_text_sp');
  $wp_customize_recruit_mv->add_control(
    "recruit_text_sp",
    [
      'settings'    => 'recruit_text_sp',
      'label'       => 'スマートフォンで表示する場合の改行を含めたロゴ下の文字を設定します。（14文字まで）',
      'section'     => 'recruit_mv_section',
      'type'        => 'textarea'
    ]
  );

  $wp_customize_recruit_mv->add_setting('recruit_logo_footer'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_logo_footer', array(
    'label' => 'フッターのロゴ', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_logo_footer', //追加する設定項目のID
    'description' => 'フッターのロゴを設定して下さい。', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv', array(
    'label' => 'メインビジュアル1枚目', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv', //追加する設定項目のID
    'description' => 'メインビジュアル1枚目を設定して下さい。推奨サイズ1920px × 1080px 比率 16 : 9', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_sp01'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_sp01', array(
    'label' => 'メインビジュアル1枚目（スマホ用）', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_sp01', //追加する設定項目のID
    'description' => 'メインビジュアル1枚目のスマホ用を設定して下さい。推奨サイズ834px × 1015px', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_02'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_02', array(
    'label' => 'メインビジュアル2枚目', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_02', //追加する設定項目のID
    'description' => 'メインビジュアル2枚目を設定して下さい。推奨サイズ1920px × 1080px 比率 16 : 9', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_sp02'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_sp02', array(
    'label' => 'メインビジュアル2枚目（スマホ用）', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_sp02', //追加する設定項目のID
    'description' => 'メインビジュアル2枚目のスマホ用を設定して下さい。推奨サイズ834px × 1015px', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_03'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_03', array(
    'label' => 'メインビジュアル3枚目', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_03', //追加する設定項目のID
    'description' => 'メインビジュアル3枚目を設定して下さい。推奨サイズ1920px × 1080px 比率 16 : 9', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_sp03'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_sp03', array(
    'label' => 'メインビジュアル3枚目（スマホ用）', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_sp03', //追加する設定項目のID
    'description' => 'メインビジュアル3枚目のスマホ用を設定して下さい。推奨サイズ834px × 1015px', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_04'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_04', array(
    'label' => 'メインビジュアル4枚目', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_04', //追加する設定項目のID
    'description' => 'メインビジュアル4枚目を設定して下さい。推奨サイズ1920px × 1080px 比率 16 : 9', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_sp04'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_sp04', array(
    'label' => 'メインビジュアル4枚目（スマホ用）', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_sp04', //追加する設定項目のID
    'description' => 'メインビジュアル4枚目のスマホ用を設定して下さい。推奨サイズ834px × 1015px', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_05'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_05', array(
    'label' => 'メインビジュアル5枚目', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_05', //追加する設定項目のID
    'description' => 'メインビジュアル5枚目を設定して下さい。推奨サイズ1920px × 1080px 比率 16 : 9', //設定項目の説明
  )));

  $wp_customize_recruit_mv->add_setting('recruit_mv_sp05'); //設定項目を追加
  $wp_customize_recruit_mv->add_control(new WP_Customize_Image_Control($wp_customize_recruit_mv, 'recruit_mv_sp05', array(
    'label' => 'メインビジュアル5枚目（スマホ用）', //設定項目のタイトル
    'section' => 'recruit_mv_section', //追加するセクションのID
    'settings' => 'recruit_mv_sp05', //追加する設定項目のID
    'description' => 'メインビジュアル5枚目のスマホ用を設定して下さい。推奨サイズ834px × 1015px', //設定項目の説明
  )));
}
add_action('customize_register', 'recruit_mv');



function recruit_message($wp_customize_recruit_message)
{
  $wp_customize_recruit_message->add_section(
    'recruit_message_section',
    [
      'title'           => '求人ページメッセージセクション設定',
      'priority'        => 6,
      'description' => '求人ページのメッセージセクションを設定します',
      //'active_callback' =>
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_message_title');
  $wp_customize_recruit_message->add_control(
    "recruit_message_title",
    [
      'settings'    => 'recruit_message_title',
      'label'       => 'メッセージのタイトルを入力して下さい。',
      'section'     => 'recruit_message_section',
      'type'        => 'textarea'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_message_text');
  $wp_customize_recruit_message->add_control(
    "recruit_message_text",
    [
      'settings'    => 'recruit_message_text',
      'label'       => 'メッセージのテキストを入力して下さい。',
      'section'     => 'recruit_message_section',
      'type'        => 'textarea'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_message_img'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_message_img', array(
    'label' => 'メッセージの画像', //設定項目のタイトル
    'section' => 'recruit_message_section', //追加するセクションのID
    'settings' => 'recruit_message_img', //追加する設定項目のID
    'description' => 'メッセージの画像を設定して下さい。', //設定項目の説明
  )));
}
add_action('customize_register', 'recruit_message');


function recruit_flow($wp_customize_recruit_message)
{
  $wp_customize_recruit_message->add_section(
    'recruit_flow_section',
    [
      'title'           => '求人ページ一日の流れセクション設定',
      'priority'        => 6,
      'description' => '求人ページの一日の流れセクションを設定します',
      //'active_callback' =>
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_time_01');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_01",
    [
      'settings'    => 'recruit_flow_time_01',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_01');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_01",
    [
      'settings'    => 'recruit_flow_title_01',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_01');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_01",
    [
      'settings'    => 'recruit_flow_text_01',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_01'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_01', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_01', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));

  $wp_customize_recruit_message->add_setting('recruit_flow_time_02');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_02",
    [
      'settings'    => 'recruit_flow_time_02',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_02');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_02",
    [
      'settings'    => 'recruit_flow_title_02',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_02');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_02",
    [
      'settings'    => 'recruit_flow_text_02',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_02'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_02', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_02', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));


  $wp_customize_recruit_message->add_setting('recruit_flow_time_03');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_03",
    [
      'settings'    => 'recruit_flow_time_03',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_03');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_03",
    [
      'settings'    => 'recruit_flow_title_03',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_03');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_03",
    [
      'settings'    => 'recruit_flow_text_03',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_03'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_03', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_03', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));


  $wp_customize_recruit_message->add_setting('recruit_flow_time_04');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_04",
    [
      'settings'    => 'recruit_flow_time_04',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_04');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_04",
    [
      'settings'    => 'recruit_flow_title_04',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_04');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_04",
    [
      'settings'    => 'recruit_flow_text_04',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_04'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_04', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_04', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));



  $wp_customize_recruit_message->add_setting('recruit_flow_time_05');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_05",
    [
      'settings'    => 'recruit_flow_time_05',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_05');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_05",
    [
      'settings'    => 'recruit_flow_title_05',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_05');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_05",
    [
      'settings'    => 'recruit_flow_text_05',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_05'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_05', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_05', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));



  $wp_customize_recruit_message->add_setting('recruit_flow_time_06');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_06",
    [
      'settings'    => 'recruit_flow_time_06',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_06');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_06",
    [
      'settings'    => 'recruit_flow_title_06',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_06');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_06",
    [
      'settings'    => 'recruit_flow_text_06',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_06'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_06', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_06', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));



  $wp_customize_recruit_message->add_setting('recruit_flow_time_07');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_time_07",
    [
      'settings'    => 'recruit_flow_time_07',
      'label'       => '一日の流れの時間を入力して下さい',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_title_07');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_title_07",
    [
      'settings'    => 'recruit_flow_title_07',
      'label'       => '一日の流れの仕事内容を入力して下さい。（9文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_text_07');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_text_07",
    [
      'settings'    => 'recruit_flow_text_07',
      'label'       => '仕事内容の詳細を入力して下さい。（70文字まで）',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );

  $wp_customize_recruit_message->add_setting('recruit_flow_img_07'); //設定項目を追加
  $wp_customize_recruit_message->add_control(new WP_Customize_Image_Control($wp_customize_recruit_message, 'recruit_flow_img_07', array(
    'label' => '一日の流れの画像', //設定項目のタイトル
    'section' => 'recruit_flow_section', //追加するセクションのID
    'settings' => 'recruit_flow_img_07', //追加する設定項目のID
    'description' => '仕事内容の画像を設定して下さい。推奨サイズ376×211.5、比率16:9', //設定項目の説明
  )));

  $wp_customize_recruit_message->add_setting('recruit_flow_caution');
  $wp_customize_recruit_message->add_control(
    "recruit_flow_caution",
    [
      'settings'    => 'recruit_flow_caution',
      'label'       => '一日の流れの注釈文を入力して下さい。',
      'section'     => 'recruit_flow_section',
      'type'        => 'text'
    ]
  );
}
add_action('customize_register', 'recruit_flow');



//お客様アカウントでのメニュー表示設定
add_action('admin_menu', 'remove_menus', 999);
function remove_menus()
{
  global $current_user;
  if ($current_user->ID == "2") {
    // remove_menu_page('edit.php?post_type=page'); //ページ追加
    remove_menu_page('edit.php?post_type=acf-field-group'); //フィールドグループ
    remove_menu_page('edit-comments.php'); //コメントメニュー
    // remove_menu_page('themes.php'); //外観メニュー
    remove_menu_page('plugins.php'); //プラグインメニュー
    remove_menu_page('wpcf7'); //cf7
    remove_menu_page('manual'); //manual
    remove_menu_page('tools.php'); //ツールメニュー
    remove_menu_page('users.php'); //ユーザー
    remove_menu_page('ai1wm_export'); //ALL-in-One
    remove_menu_page('options-general.php'); //一般
    remove_menu_page('edit.php?post_type=acf-field-group'); //フィールドグループ
    remove_menu_page('cptui_main_menu'); //CPT
    remove_menu_page('migration-panel-settings'); //Prime Mover
    remove_menu_page('edit.php?post_type=smart-custom-fields'); //SCF
    remove_menu_page('customtaxorder'); //SCF

  }
}


//テーマカスタマイザーの初期項目を非表示に
function mytheme_customize_register($wp_customize)
{
  // 「サイト基本情報」を削除
  // $wp_customize->remove_section("title_tagline");
  // 「色」を削除
  $wp_customize->remove_section("colors");
  // 「ヘッダー画像」を削除
  $wp_customize->remove_section("header_image");
  // 「背景画像」を削除
  $wp_customize->remove_section("background_image");
  // 「ホームページ設定」を削除
  $wp_customize->remove_section("static_front_page");
  // 「追加CSS」を削除
  $wp_customize->remove_section("custom_css");

  // 「メニュー」を削除
  $wp_customize->remove_panel("nav_menus");
  // 「ウィジェット」を削除
  $wp_customize->remove_panel("widgets");
}
add_action('customize_register', 'mytheme_customize_register', 11);

/* 【管理画面】投稿編集画面で不要な項目を非表示にする */
function my_remove_post_support()
{
  remove_post_type_support('post', 'author');          // 作成者
  remove_post_type_support('post', 'thumbnail');       // アイキャッチ画像
  remove_post_type_support('post', 'excerpt');         // 抜粋
  remove_post_type_support('post', 'trackbacks');      // トラックバック
  remove_post_type_support('post', 'custom-fields');   // カスタムフィールド
  remove_post_type_support('post', 'comments');        // コメント
  remove_post_type_support('post', 'revisions');       // リビジョン
  remove_post_type_support('post', 'page-attributes'); // 表示順
  remove_post_type_support('post', 'post-formats');    // 投稿フォーマット

  remove_post_type_support('page', 'author');          // 作成者
  remove_post_type_support('page', 'thumbnail');       // アイキャッチ画像
  remove_post_type_support('page', 'excerpt');         // 抜粋
  remove_post_type_support('page', 'trackbacks');      // トラックバック
  remove_post_type_support('page', 'custom-fields');   // カスタムフィールド
  remove_post_type_support('page', 'comments');        // コメント
  remove_post_type_support('page', 'revisions');       // リビジョン
  remove_post_type_support('page', 'page-attributes'); // 表示順
  remove_post_type_support('page', 'post-formats');    // 投稿フォーマット
}
add_action('init', 'my_remove_post_support');



add_action('admin_print_footer_scripts', 'select_to_radio_recruit_category');
function select_to_radio_recruit_category()
{
?>
  <script type="text/javascript">
    jQuery(function($) {
      // 投稿画面
      $('#taxonomy-recruit_category input[type=checkbox]').each(function() {
        $(this).replaceWith($(this).clone().attr('type', 'radio'));
      });

      // 一覧画面
      var recruit_category_checklist = $('.recruit_category-checklist input[type=checkbox]');
      recruit_category_checklist.click(function() {
        $(this).parents('.recruit_category-checklist').find(' input[type=checkbox]').attr('checked', false);
        $(this).attr('checked', true);
      });
    });
  </script>
<?php
}

add_action('admin_print_footer_scripts', 'select_to_radio_recruit_area');
function select_to_radio_recruit_area()
{
?>
  <script type="text/javascript">
    jQuery(function($) {
      // 投稿画面
      $('#taxonomy-recruit_area input[type=checkbox]').each(function() {
        $(this).replaceWith($(this).clone().attr('type', 'radio'));
      });

      // 一覧画面
      var recruit_area_checklist = $('.recruit_area-checklist input[type=checkbox]');
      recruit_area_checklist.click(function() {
        $(this).parents('.recruit_area-checklist').find(' input[type=checkbox]').attr('checked', false);
        $(this).attr('checked', true);
      });
    });
  </script>
<?php
}
