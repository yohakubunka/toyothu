<?php
// 子ども園で表示 ================================================================================================
if (get_site_group() === 'afterschool') {
    // メインビジュアル ================================================================================================
    function my_theme_customize_register_afterschool($wp_customize)
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
        $wp_customize->add_setting('afterschool_mainvisual_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_01', array(
            'label' => 'メインビジュアル1枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_02', array(
            'label' => 'メインビジュアル2枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_03', array(
            'label' => 'メインビジュアル3枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_04', array(
            'label' => 'メインビジュアル4枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_05', array(
            'label' => 'メインビジュアル5枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_sp_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_sp_01', array(
            'label' => 'メインビジュアル1枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_sp_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_sp_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_sp_02', array(
            'label' => 'メインビジュアル2枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_sp_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_sp_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_sp_03', array(
            'label' => 'メインビジュアル3枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_sp_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_sp_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_sp_04', array(
            'label' => 'メインビジュアル4枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_sp_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_sp_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_sp_05', array(
            'label' => 'メインビジュアル5枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_sp_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_mainvisual_logo'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_mainvisual_logo', array(
            'label' => 'ヘッダーロゴ', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'afterschool_mainvisual_logo', //追加する設定項目のID
            'description' => 'ヘッダーロゴの画像を設定してください。', //設定項目の説明
        )));


        $wp_customize->add_setting('afterschool_mainvisual_text');
        $wp_customize->add_control(
            "afterschool_mainvisual_text",
            [
                'settings'    => 'afterschool_mainvisual_text',
                'label'       => '画像に重なるテキスト',
                'section'     => 'top_section',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'my_theme_customize_register_afterschool');
    // メインビジュアル ================================================================================================

    // 対象児童 ================================================================================================

    function top_sec_subject($wp_customize)
    {
        $wp_customize->add_section(
            'subject_section',
            [
                'title'           => '対象児童',
                'priority'        => 1,
                'description' => '対象児童セクションを編集します',
                //'active_callback' =>
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_subject_title');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_title",
            [
                'settings'    => 'afterschool_top_sec_subject_title',
                'label'       => 'サブタイトル',
                'section'     => 'subject_section',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_subject_caution');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_caution",
            [
                'settings'    => 'afterschool_top_sec_subject_caution',
                'label'       => '注釈文',
                'section'     => 'subject_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_subject_img'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_top_sec_subject_img', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'subject_section', //追加するセクションのID
            'settings' => 'afterschool_top_sec_subject_img', //追加する設定項目のID
            'description' => '対象児童セクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('afterschool_top_sec_subject_text_01');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_text_01",
            [
                'settings'    => 'afterschool_top_sec_subject_text_01',
                'label'       => '状況1',
                'section'     => 'subject_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_subject_text_02');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_text_02",
            [
                'settings'    => 'afterschool_top_sec_subject_text_02',
                'label'       => '状況2',
                'section'     => 'subject_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_subject_text_03');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_text_03",
            [
                'settings'    => 'afterschool_top_sec_subject_text_03',
                'label'       => '状況3',
                'section'     => 'subject_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_subject_text_04');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_text_04",
            [
                'settings'    => 'afterschool_top_sec_subject_text_04',
                'label'       => '状況4',
                'section'     => 'subject_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_subject_text_05');
        $wp_customize->add_control(
            "afterschool_top_sec_subject_text_05",
            [
                'settings'    => 'afterschool_top_sec_subject_text_05',
                'label'       => '状況5',
                'section'     => 'subject_section',
                'type'        => 'text'
            ]
        );
    }
    add_action('customize_register', 'top_sec_subject');
    // 対象児童 ================================================================================================

    // ご利用料金（基本料金） ================================================================================================
    function top_sec_price_01($wp_customize)
    {
        $wp_customize->add_section(
            'top_sec_price_01',
            [
                'title'           => 'ご利用料金（基本料金）セクション',
                'priority'        => 1,
                'description' => 'ご利用料金（基本料金）セクションを編集します',
                //'active_callback' =>
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_price_title_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_title_01",
            [
                'settings'    => 'afterschool_top_sec_price_title_01',
                'label'       => 'サブタイトル',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_period_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_period_01",
            [
                'settings'    => 'afterschool_top_sec_price_period_01',
                'label'       => '期間1',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_time_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_time_01",
            [
                'settings'    => 'afterschool_top_sec_price_time_01',
                'label'       => '時間1',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_price_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_price_01",
            [
                'settings'    => 'afterschool_top_sec_price_price_01',
                'label'       => '料金1',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_price_period_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_period_02",
            [
                'settings'    => 'afterschool_top_sec_price_period_02',
                'label'       => '期間2',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_time_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_time_02",
            [
                'settings'    => 'afterschool_top_sec_price_time_02',
                'label'       => '時間2',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_price_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_price_02",
            [
                'settings'    => 'afterschool_top_sec_price_price_02',
                'label'       => '料金2',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_price_period_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_period_03",
            [
                'settings'    => 'afterschool_top_sec_price_period_03',
                'label'       => '期間3',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_time_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_time_03",
            [
                'settings'    => 'afterschool_top_sec_price_time_03',
                'label'       => '時間3',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_price_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_price_03",
            [
                'settings'    => 'afterschool_top_sec_price_price_03',
                'label'       => '料金3',
                'section'     => 'top_sec_price_01',
                'type'        => 'text'
            ]
        );
    }
    add_action('customize_register', 'top_sec_price_01');

    // 一時預かりセクション ================================================================================================


    // ご利用料金セクション ================================================================================================
    function top_sec_price_02($wp_customize)
    {
        $wp_customize->add_section(
            'top_sec_price_02',
            [
                'title'           => 'ご利用料金（追加料金）セクション',
                'priority'        => 4,
                'description' => 'ご利用料金（追加料金）セクションを編集します',
                //'active_callback' =>
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_title_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_title_02",
            [
                'settings'    => 'afterschool_top_sec_price_title_02',
                'label'       => 'サブタイトル',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_price_caution');
        $wp_customize->add_control(
            "afterschool_top_sec_price_caution",
            [
                'settings'    => 'afterschool_top_sec_price_caution',
                'label'       => 'サブタイトル下注釈文',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_price_add_item_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_item_01",
            [
                'settings'    => 'afterschool_top_sec_price_add_item_01',
                'label'       => '項目1',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_time_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_time_01",
            [
                'settings'    => 'afterschool_top_sec_price_add_time_01',
                'label'       => '時間1',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_time_caution_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_time_caution_01",
            [
                'settings'    => 'afterschool_top_sec_price_add_time_caution_01',
                'label'       => '時間注釈文1',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_price_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_price_01",
            [
                'settings'    => 'afterschool_top_sec_price_add_price_01',
                'label'       => '料金1',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_price_text_01');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_price_text_01",
            [
                'settings'    => 'afterschool_top_sec_price_add_price_text_01',
                'label'       => 'テキスト1',
                'section'     => 'top_sec_price_02',
                'type'        => 'textarea'
            ]
        );



        $wp_customize->add_setting('afterschool_top_sec_price_add_item_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_item_02",
            [
                'settings'    => 'afterschool_top_sec_price_add_item_02',
                'label'       => '項目2',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_time_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_time_02",
            [
                'settings'    => 'afterschool_top_sec_price_add_time_02',
                'label'       => '時間2',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_time_caution_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_time_caution_02",
            [
                'settings'    => 'afterschool_top_sec_price_add_time_caution_02',
                'label'       => '時間注釈文2',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_price_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_price_02",
            [
                'settings'    => 'afterschool_top_sec_price_add_price_02',
                'label'       => '料金2',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_price_text_02');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_price_text_02",
            [
                'settings'    => 'afterschool_top_sec_price_add_price_text_02',
                'label'       => 'テキスト2',
                'section'     => 'top_sec_price_02',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('afterschool_top_sec_price_add_item_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_item_03",
            [
                'settings'    => 'afterschool_top_sec_price_add_item_03',
                'label'       => '項目3',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_time_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_time_03",
            [
                'settings'    => 'afterschool_top_sec_price_add_time_03',
                'label'       => '時間3',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_time_caution_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_time_caution_03",
            [
                'settings'    => 'afterschool_top_sec_price_add_time_caution_03',
                'label'       => '時間注釈文3',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_price_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_price_03",
            [
                'settings'    => 'afterschool_top_sec_price_add_price_03',
                'label'       => '料金3',
                'section'     => 'top_sec_price_02',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('afterschool_top_sec_price_add_price_text_03');
        $wp_customize->add_control(
            "afterschool_top_sec_price_add_price_text_03",
            [
                'settings'    => 'afterschool_top_sec_price_add_price_text_03',
                'label'       => 'テキスト3',
                'section'     => 'top_sec_price_02',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'top_sec_price_02');

    // ご利用料金セクション ================================================================================================


    // フッター ================================================================================================
    function footer_afterschool($wp_customize)
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
        $wp_customize->add_setting('afterschool_footer_logo'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'afterschool_footer_logo', array(
            'label' => 'フッターロゴ', //設定項目のタイトル
            'section' => 'footer_section', //追加するセクションのID
            'settings' => 'afterschool_footer_logo', //追加する設定項目のID
            'description' => 'フッターロゴの画像を設定してください。', //設定項目の説明
        )));
    }
    add_action('customize_register', 'footer_afterschool');
    // フッター ================================================================================================

}
