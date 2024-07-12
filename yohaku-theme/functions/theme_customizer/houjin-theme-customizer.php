<?php
// 法人で表示 ================================================================================================
if (get_site_group() === 'houjin') {
    // メインビジュアル ================================================================================================
    function my_theme_customize_register_houjin($wp_customize)
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
        $wp_customize->add_setting('houjin_mainvisual_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_01', array(
            'label' => 'メインビジュアル1枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_02', array(
            'label' => 'メインビジュアル2枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_03', array(
            'label' => 'メインビジュアル3枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_04', array(
            'label' => 'メインビジュアル4枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_05', array(
            'label' => 'メインビジュアル5枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_sp_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_sp_01', array(
            'label' => 'メインビジュアル1枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_sp_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_sp_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_sp_02', array(
            'label' => 'メインビジュアル2枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_sp_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_sp_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_sp_03', array(
            'label' => 'メインビジュアル3枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_sp_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_sp_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_sp_04', array(
            'label' => 'メインビジュアル4枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_sp_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_mainvisual_sp_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_mainvisual_sp_05', array(
            'label' => 'メインビジュアル5枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_mainvisual_sp_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));


        $wp_customize->add_setting('houjin_mainvisual_text');
        $wp_customize->add_control(
            "houjin_mainvisual_text",
            [
                'settings'    => 'houjin_mainvisual_text',
                'label'       => '画像に重なるテキスト',
                'section'     => 'top_section',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('houjin_logo'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_logo', array(
            'label' => 'テキスト横のロゴ', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_logo', //追加する設定項目のID
            'description' => 'テキスト横のロゴを設定してください。', //設定項目の説明
        )));


        $wp_customize->add_setting('houjin_logo_sp'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_logo_sp', array(
            'label' => 'テキスト横のロゴ（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'houjin_logo_sp', //追加する設定項目のID
            'description' => 'テキスト横のロゴ（SP）を設定してください。', //設定項目の説明
        )));
    }
    add_action('customize_register', 'my_theme_customize_register_houjin');
    // メインビジュアル ================================================================================================

    // メッセージ ================================================================================================

    function houjin_sec_message($wp_customize)
    {
        $wp_customize->add_section(
            'houjin_message_section',
            [
                'title'           => 'メッセージ',
                'priority'        => 1,
                'description' => 'メッセージセクションを編集します',
                //'active_callback' => 
            ]
        );
        $wp_customize->add_setting('houjin_message_title');
        $wp_customize->add_control(
            "houjin_message_title",
            [
                'settings'    => 'houjin_message_title',
                'label'       => 'タイトル',
                'section'     => 'houjin_message_section',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('houjin_message_image'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_message_image', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'houjin_message_section', //追加するセクションのID
            'settings' => 'houjin_message_image', //追加する設定項目のID
            'description' => 'メッセージセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_message_text');
        $wp_customize->add_control(
            "houjin_message_text",
            [
                'settings'    => 'houjin_message_text',
                'label'       => 'メッセージ文章(推奨文字数、全角198文字)',
                'section'     => 'houjin_message_section',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('houjin_message_name');
        $wp_customize->add_control(
            "houjin_message_name",
            [
                'settings'    => 'houjin_message_name',
                'label'       => '名前',
                'section'     => 'houjin_message_section',
                'type'        => 'text'
            ]
        );
    }
    add_action('customize_register', 'houjin_sec_message');
    // メッセージ ================================================================================================

    // 子育て支援事業 ================================================================================================
    function houjin_sec_support($wp_customize)
    {
        $wp_customize->add_section(
            'houjin_sec_support_section',
            [
                'title'           => '子育て支援事業セクション',
                'priority'        => 1,
                'description' => '子育て支援事業セクションを編集します',
                //'active_callback' => 
            ]
        );

        $wp_customize->add_setting('houjin_support_sub_title');
        $wp_customize->add_control(
            "houjin_support_sub_title",
            [
                'settings'    => 'houjin_support_sub_title',
                'label'       => 'サブタイトル',
                'section'     => 'houjin_sec_support_section',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('houjin_support_sub_text');
        $wp_customize->add_control(
            "houjin_support_sub_text",
            [
                'settings'    => 'houjin_support_sub_text',
                'label'       => 'サブテキスト',
                'section'     => 'houjin_sec_support_section',
                'type'        => 'text'
            ]
        );


        $wp_customize->add_setting('houjin_support_second_sub_text');
        $wp_customize->add_control(
            "houjin_support_second_sub_text",
            [
                'settings'    => 'houjin_support_second_sub_text',
                'label'       => 'サブテキスト２',
                'section'     => 'houjin_sec_support_section',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'houjin_sec_support');

    // 子育て支援事業 ================================================================================================


    // 地域活動 ================================================================================================
    function houjin_sec_activity($wp_customize)
    {
        $wp_customize->add_section(
            'houjin_sec_activity_section',
            [
                'title'           => '地域活動セクション',
                'priority'        => 1,
                'description' => '地域活動セクションを編集します',
                //'active_callback' => 
            ]
        );

        $wp_customize->add_setting('houjin_activities_title_01');
        $wp_customize->add_control(
            "houjin_activities_title_01",
            [
                'settings'    => 'houjin_activities_title_01',
                'label'       => 'タイトル１',
                'section'     => 'houjin_sec_activity_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('houjin_activities_image_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_activities_image_01', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'houjin_sec_activity_section', //追加するセクションのID
            'settings' => 'houjin_activities_image_01', //追加する設定項目のID
            'description' => '地域活動の画像1枚目を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_activities_text_01');
        $wp_customize->add_control(
            "houjin_activities_text_01",
            [
                'settings'    => 'houjin_activities_text_01',
                'label'       => 'テキスト１',
                'section'     => 'houjin_sec_activity_section',
                'type'        => 'text'
            ]
        );


        $wp_customize->add_setting('houjin_activities_title_02');
        $wp_customize->add_control(
            "houjin_activities_title_02",
            [
                'settings'    => 'houjin_activities_title_02',
                'label'       => 'タイトル２',
                'section'     => 'houjin_sec_activity_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('houjin_activities_image_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_activities_image_02', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'houjin_sec_activity_section', //追加するセクションのID
            'settings' => 'houjin_activities_image_02', //追加する設定項目のID
            'description' => '地域活動の画像1枚目を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_activities_text_02');
        $wp_customize->add_control(
            "houjin_activities_text_02",
            [
                'settings'    => 'houjin_activities_text_02',
                'label'       => 'テキスト２',
                'section'     => 'houjin_sec_activity_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('houjin_activities_title_03');
        $wp_customize->add_control(
            "houjin_activities_title_03",
            [
                'settings'    => 'houjin_activities_title_03',
                'label'       => 'タイトル３',
                'section'     => 'houjin_sec_activity_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('houjin_activities_image_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_activities_image_03', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'houjin_sec_activity_section', //追加するセクションのID
            'settings' => 'houjin_activities_image_03', //追加する設定項目のID
            'description' => '地域活動の画像3枚目を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('houjin_activities_text_03');
        $wp_customize->add_control(
            "houjin_activities_text_03",
            [
                'settings'    => 'houjin_activities_text_03',
                'label'       => 'テキスト３',
                'section'     => 'houjin_sec_activity_section',
                'type'        => 'text'
            ]
        );
    }
    add_action('customize_register', 'houjin_sec_activity');

    // 地域活動 ================================================================================================


    // 情報公開 ================================================================================================
    function houjin_sec_info($wp_customize)
    {
        $wp_customize->add_section(
            'houjin_sec_info_section',
            [
                'title'           => '情報公開セクション',
                'priority'        => 1,
                'description' => '情報公開セクションを編集します',
                //'active_callback' => 
            ]
        );

        $wp_customize->add_setting('houjin_info_caution');
        $wp_customize->add_control(
            "houjin_info_caution",
            [
                'settings'    => 'houjin_info_caution',
                'label'       => '注釈文',
                'section'     => 'houjin_sec_info_section',
                'type'        => 'text'
            ]
        );
    }
    add_action('customize_register', 'houjin_sec_info');

    // 情報公開 ================================================================================================

    // 情報公開 ================================================================================================
    function houjin_sec_footer($wp_customize)
    {
        $wp_customize->add_section(
            'houjin_sec_footer',
            [
                'title'           => 'フッター',
                'priority'        => 1,
                'description' => 'フッターを編集します',
                //'active_callback' => 
            ]
        );

        $wp_customize->add_setting('houjin_footer_logo'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'houjin_footer_logo', array(
            'label' => 'フッターロゴ', //設定項目のタイトル
            'section' => 'houjin_sec_footer', //追加するセクションのID
            'settings' => 'houjin_footer_logo', //追加する設定項目のID
            'description' => 'フッターロゴを設定してください', //設定項目の説明
        )));
    }
    add_action('customize_register', 'houjin_sec_footer');

    // 情報公開 ================================================================================================

}
