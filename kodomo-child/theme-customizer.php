<?php
// テーマカスタマイザー設定 ===============================================================================================================================

function my_theme_customize_child_under_visual($wp_customize_child_under_visual)
{
    $wp_customize_child_under_visual->add_section(
        'child_under_visual_section',
        [
            'title'           => '子ども園の下層メインビジュアル設定',
            'priority'        => 8,
            'description' => '下層ページのメインビジュアルを設定します。',
            //'active_callback' => 
        ]
    );

    $wp_customize_child_under_visual->add_setting('child_under_visual_01'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_01', array(
        'label' => 'お知らせページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_01', //追加する設定項目のID
        'description' => 'お知らせページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));

    $wp_customize_child_under_visual->add_setting('child_under_visual_02'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_02', array(
        'label' => '保育についてページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_02', //追加する設定項目のID
        'description' => '保育についてページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));

    $wp_customize_child_under_visual->add_setting('child_under_visual_03'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_03', array(
        'label' => '保育のこだわりページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_03', //追加する設定項目のID
        'description' => '保育のこだわりページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));

    $wp_customize_child_under_visual->add_setting('child_under_visual_04'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_04', array(
        'label' => '園での生活ページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_04', //追加する設定項目のID
        'description' => '園での生活ページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));

    $wp_customize_child_under_visual->add_setting('child_under_visual_05'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_05', array(
        'label' => '入園案内ページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_05', //追加する設定項目のID
        'description' => '入園案内ページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));

    $wp_customize_child_under_visual->add_setting('child_under_visual_06'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_06', array(
        'label' => '書類ダウンロードページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_06', //追加する設定項目のID
        'description' => '書類ダウンロードページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));

    $wp_customize_child_under_visual->add_setting('child_under_visual_07'); //設定項目を追加
    $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'child_under_visual_07', array(
        'label' => 'お問い合わせページのメインビジュアル', //設定項目のタイトル
        'section' => 'child_under_visual_section', //追加するセクションのID
        'settings' => 'child_under_visual_07', //追加する設定項目のID
        'description' => 'お問い合わせページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
    )));
}
add_action('customize_register', 'my_theme_customize_child_under_visual');
