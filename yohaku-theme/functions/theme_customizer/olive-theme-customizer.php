<?php
// 子ども園で表示 ================================================================================================
if (get_site_group() === 'olive') {
    // メインビジュアル ================================================================================================
    function my_theme_customize_register_olive($wp_customize)
    {
        $wp_customize->add_section(
            'top_section',
            [
                'title'           => 'トップページメインビジュアル',
                'priority'        => 1,
                'description' => 'トップページのメインビジュアルを編集します',
                //'active_callback' =>
            ]
        );
        $wp_customize->add_setting('olive_mainvisual_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_01', array(
            'label' => 'メインビジュアル1枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_02', array(
            'label' => 'メインビジュアル2枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_03', array(
            'label' => 'メインビジュアル3枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_04', array(
            'label' => 'メインビジュアル4枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_05', array(
            'label' => 'メインビジュアル5枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_sp_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_sp_01', array(
            'label' => 'メインビジュアル1枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_sp_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_sp_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_sp_02', array(
            'label' => 'メインビジュアル2枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_sp_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_sp_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_sp_03', array(
            'label' => 'メインビジュアル3枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_sp_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_sp_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_sp_04', array(
            'label' => 'メインビジュアル4枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_sp_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_sp_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_sp_05', array(
            'label' => 'メインビジュアル5枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_sp_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('olive_mainvisual_logo'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_mainvisual_logo', array(
            'label' => 'ヘッダーロゴ', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'olive_mainvisual_logo', //追加する設定項目のID
            'description' => 'ヘッダーロゴの画像を設定してください。', //設定項目の説明
        )));


        $wp_customize->add_setting('olive_mainvisual_text');
        $wp_customize->add_control(
            "olive_mainvisual_text",
            [
                'settings'    => 'olive_mainvisual_text',
                'label'       => '画像に重なるテキスト',
                'section'     => 'top_section',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'my_theme_customize_register_olive');
    // メインビジュアル ================================================================================================

    // ご利用にあたって ================================================================================================
    function top_sec_use_01($wp_customize)
    {
        $wp_customize->add_section(
            'top_sec_use_01',
            [
                'title'           => 'ご利用にあたって',
                'priority'        => 1,
                'description' => 'ご利用にあたってセクションを編集します',
                //'active_callback' =>
            ]
        );

        $wp_customize->add_setting('olive_top_sec_use_desc_01');
        $wp_customize->add_control(
            "olive_top_sec_use_desc_01",
            [
                'settings'    => 'olive_top_sec_use_desc_01',
                'label'       => '説明文1',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_desc_02');
        $wp_customize->add_control(
            "olive_top_sec_use_desc_02",
            [
                'settings'    => 'olive_top_sec_use_desc_02',
                'label'       => '説明文2',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_desc_03');
        $wp_customize->add_control(
            "olive_top_sec_use_desc_03",
            [
                'settings'    => 'olive_top_sec_use_desc_03',
                'label'       => '説明文3',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_note_01');
        $wp_customize->add_control(
            "olive_top_sec_use_note_01",
            [
                'settings'    => 'olive_top_sec_use_note_01',
                'label'       => '注釈',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_start_time');
        $wp_customize->add_control(
            "olive_top_sec_use_start_time",
            [
                'settings'    => 'olive_top_sec_use_start_time',
                'label'       => '開始時間',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('olive_top_sec_use_start_service_time');
        $wp_customize->add_control(
            "olive_top_sec_use_start_service_time",
            [
                'settings'    => 'olive_top_sec_use_start_service_time',
                'label'       => 'サービス提供時間',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_holiday');
        $wp_customize->add_control(
            "olive_top_sec_use_holiday",
            [
                'settings'    => 'olive_top_sec_use_holiday',
                'label'       => '休日',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_open_day');
        $wp_customize->add_control(
            "olive_top_sec_use_open_day",
            [
                'settings'    => 'olive_top_sec_use_open_day',
                'label'       => '開所日',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_child');
        $wp_customize->add_control(
            "olive_top_sec_use_child",
            [
                'settings'    => 'olive_top_sec_use_child',
                'label'       => '対象',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
        $wp_customize->add_setting('olive_top_sec_use_other');
        $wp_customize->add_control(
            "olive_top_sec_use_other",
            [
                'settings'    => 'olive_top_sec_use_other',
                'label'       => 'その他',
                'section'     => 'top_sec_use_01',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'top_sec_use_01');

    // ご利用にあたって ================================================================================================



    // フッター ================================================================================================
    function footer_olive($wp_customize)
    {
        $wp_customize->add_section(
            'footer_section',
            [
                'title'           => 'フッターロゴ',
                'priority'        => 1,
                'description' => 'フッターロゴを編集します',
                //'active_callback' =>
            ]
        );
        $wp_customize->add_setting('olive_footer_logo'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'olive_footer_logo', array(
            'label' => 'フッターロゴ', //設定項目のタイトル
            'section' => 'footer_section', //追加するセクションのID
            'settings' => 'olive_footer_logo', //追加する設定項目のID
            'description' => 'フッターロゴの画像を設定してください。', //設定項目の説明
        )));
    }
    add_action('customize_register', 'footer_olive');
    // フッター ================================================================================================

}
