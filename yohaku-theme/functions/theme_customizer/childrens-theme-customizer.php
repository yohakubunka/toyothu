<?php
// 子ども園で表示 ================================================================================================
if (get_site_group() === 'childrens') {
    // メインビジュアル ================================================================================================
    function my_theme_customize_register($wp_customize)
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
        $wp_customize->add_setting('childrens_mainvisual_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_01', array(
            'label' => 'メインビジュアル1枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_02', array(
            'label' => 'メインビジュアル2枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_03', array(
            'label' => 'メインビジュアル3枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_04', array(
            'label' => 'メインビジュアル4枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_05', array(
            'label' => 'メインビジュアル5枚目（PC）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は16：9でお願いします。', //設定項目の説明
        )));


        $wp_customize->add_setting('childrens_mainvisual_sp_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_sp_01', array(
            'label' => 'メインビジュアル1枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_sp_01', //追加する設定項目のID
            'description' => 'メインビジュアル1枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_sp_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_sp_02', array(
            'label' => 'メインビジュアル2枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_sp_02', //追加する設定項目のID
            'description' => 'メインビジュアル2枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_sp_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_sp_03', array(
            'label' => 'メインビジュアル3枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_sp_03', //追加する設定項目のID
            'description' => 'メインビジュアル3枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_sp_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_sp_04', array(
            'label' => 'メインビジュアル4枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_sp_04', //追加する設定項目のID
            'description' => 'メインビジュアル4枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_sp_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_sp_05', array(
            'label' => 'メインビジュアル5枚目（SP）', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_sp_05', //追加する設定項目のID
            'description' => 'メインビジュアル5枚目の画像を設定してください。比率は1：1.2でお願いします。', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_mainvisual_symbol'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_mainvisual_symbol', array(
            'label' => 'シンボルマーク', //設定項目のタイトル
            'section' => 'top_section', //追加するセクションのID
            'settings' => 'childrens_mainvisual_symbol', //追加する設定項目のID
            'description' => 'シンボルマークの画像を設定してください。', //設定項目の説明
        )));


        $wp_customize->add_setting('childrens_mainvisual_text');
        $wp_customize->add_control(
            "childrens_mainvisual_text",
            [
                'settings'    => 'childrens_mainvisual_text',
                'label'       => '画像に重なるテキスト',
                'section'     => 'top_section',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'my_theme_customize_register');
    // メインビジュアル ================================================================================================

    // 追従ボタン ================================================================================================

    function top_sec_links($wp_customize)
    {
        $wp_customize->add_section(
            'links_section',
            [
                'title'           => '追従ボタンリンク',
                'priority'        => 1,
                'description' => '追従ボタンのリンクを変更します。',
                //'active_callback' => 
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_link_01');
        $wp_customize->add_control(
            "childrens_top_sec_link_01",
            [
                'settings'    => 'childrens_top_sec_link_01',
                'label'       => 'リンク1',
                'section'     => 'links_section',
                'type'        => 'url'
            ]
        );

        $wp_customize->add_setting('childrens_top_sec_link_02');
        $wp_customize->add_control(
            "childrens_top_sec_link_02",
            [
                'settings'    => 'childrens_top_sec_link_02',
                'label'       => 'リンク2',
                'section'     => 'links_section',
                'type'        => 'url'
            ]
        );

        $wp_customize->add_setting('childrens_top_sec_link_03');
        $wp_customize->add_control(
            "childrens_top_sec_link_03",
            [
                'settings'    => 'childrens_top_sec_link_03',
                'label'       => 'リンク2',
                'section'     => 'links_section',
                'type'        => 'url'
            ]
        );
    }
    add_action('customize_register', 'top_sec_links');
    //　追従ボタン ================================================================================================

    // ようこそ○○園へ ================================================================================================

    function top_sec_welcome($wp_customize)
    {
        $wp_customize->add_section(
            'welcome_section',
            [
                'title'           => 'ようこそ○○園へセクション',
                'priority'        => 1,
                'description' => 'ようこそ○○園へセクションを編集します',
                //'active_callback' => 
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_welcome_title');
        $wp_customize->add_control(
            "childrens_top_sec_welcome_title",
            [
                'settings'    => 'childrens_top_sec_welcome_title',
                'label'       => 'タイトル',
                'section'     => 'welcome_section',
                'type'        => 'text'
            ]
        );

        $wp_customize->add_setting('childrens_top_sec_welcome_text');
        $wp_customize->add_control(
            "childrens_top_sec_welcome_text",
            [
                'settings'    => 'childrens_top_sec_welcome_text',
                'label'       => '文章',
                'section'     => 'welcome_section',
                'type'        => 'textarea'
            ]
        );

        $wp_customize->add_setting('childrens_top_sec_welcome_img'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_welcome_img', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'welcome_section', //追加するセクションのID
            'settings' => 'childrens_top_sec_welcome_img', //追加する設定項目のID
            'description' => 'ようこそ○○園へセクションの画像を設定してください', //設定項目の説明
        )));


        $wp_customize->add_setting('childrens_top_sec_welcome_caution');
        $wp_customize->add_control(
            "childrens_top_sec_welcome_caution",
            [
                'settings'    => 'childrens_top_sec_welcome_caution',
                'label'       => '注意文',
                'section'     => 'welcome_section',
                'type'        => 'text'
            ]
        );
    }
    add_action('customize_register', 'top_sec_welcome');
    // ようこそ○○園へ ================================================================================================

    // 一時預かりセクション ================================================================================================
    function top_sec_temporarily($wp_customize)
    {
        $wp_customize->add_section(
            'childrens_top_sec_temporarily',
            [
                'title'           => '一時預かりセクション',
                'priority'        => 1,
                'description' => '一時預かりセクションを編集します',
                //'active_callback' => 
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_temporarily_img'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_temporarily_img', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_temporarily', //追加するセクションのID
            'settings' => 'childrens_top_sec_temporarily_img', //追加する設定項目のID
            'description' => '一時預かりセクションの画像を設定してください', //設定項目の説明
        )));
        $wp_customize->add_setting('childrens_top_sec_temporarily_title');
        $wp_customize->add_control(
            "childrens_top_sec_temporarily_title",
            [
                'settings'    => 'childrens_top_sec_temporarily_title',
                'label'       => 'タイトル',
                'section'     => 'childrens_top_sec_temporarily',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_temporarily_text');
        $wp_customize->add_control(
            "childrens_top_sec_temporarily_text",
            [
                'settings'    => 'childrens_top_sec_temporarily_text',
                'label'       => '文章',
                'section'     => 'childrens_top_sec_temporarily',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'top_sec_temporarily');

    // 一時預かりセクション ================================================================================================

    // 子育て支援セクション ================================================================================================
    function top_sec_support($wp_customize)
    {
        $wp_customize->add_section(
            'childrens_top_sec_support',
            [
                'title'           => '子育て支援セクション',
                'priority'        => 1,
                'description' => '子育て支援セクションを編集します',
                //'active_callback' => 
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_support_img'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_support_img', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_support', //追加するセクションのID
            'settings' => 'childrens_top_sec_support_img', //追加する設定項目のID
            'description' => '子育て支援セクションの画像を設定してください', //設定項目の説明
        )));
        $wp_customize->add_setting('childrens_top_sec_support_title');
        $wp_customize->add_control(
            "childrens_top_sec_support_title",
            [
                'settings'    => 'childrens_top_sec_support_title',
                'label'       => 'タイトル',
                'section'     => 'childrens_top_sec_support',
                'type'        => 'text'
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_support_text');
        $wp_customize->add_control(
            "childrens_top_sec_support_text",
            [
                'settings'    => 'childrens_top_sec_support_text',
                'label'       => '文章',
                'section'     => 'childrens_top_sec_support',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'top_sec_support');

    // 子育て支援セクション ================================================================================================

    // 気になる情報をチェック ================================================================================================
    function my_theme_customize_top_section02($wp_customize_top_sec02)
    {
        $wp_customize_top_sec02->add_section(
            'childrens_top_sec_info',
            [
                'title'           => '気になる情報をチェックセクション',
                'priority'        => 1,
                'description' => '気になる情報をチェックセクションのテキストやタイトルを編集します',
                //'active_callback' => 
            ]
        );

        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_img_1'); //設定項目を追加
        $wp_customize_top_sec02->add_control(new WP_Customize_Image_Control($wp_customize_top_sec02, 'childrens_top_sec_info_img_1', array(
            'label' => '一つ目のアイコン画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_info', //追加するセクションのID
            'settings' => 'childrens_top_sec_info_img_1', //追加する設定項目のID
            'description' => '一つ目のアイコンを設定します', //設定項目の説明
        )));

        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_title_1');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_title_1",
            [
                'settings'    => 'childrens_top_sec_info_title_1',
                'label'       => '一つ目のタイトルを入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'text'
            ]
        );
        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_text_1');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_text_1",
            [
                'settings'    => 'childrens_top_sec_info_text_1',
                'label'       => '一つ目の文章を入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'textarea'
            ]
        );
        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_img_2'); //設定項目を追加
        $wp_customize_top_sec02->add_control(new WP_Customize_Image_Control($wp_customize_top_sec02, 'childrens_top_sec_info_img_2', array(
            'label' => '二つ目のアイコン', //設定項目のタイトル
            'section' => 'childrens_top_sec_info', //追加するセクションのID
            'settings' => 'childrens_top_sec_info_img_2', //追加する設定項目のID
            'description' => '二つ目のアイコンを設定します', //設定項目の説明
        )));
        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_title_2');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_title_2",
            [
                'settings'    => 'childrens_top_sec_info_title_2',
                'label'       => '二つ目のタイトルを入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'text'
            ]
        );
        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_text_2');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_text_2",
            [
                'settings'    => 'childrens_top_sec_info_text_2',
                'label'       => '二つ目の文章を入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'textarea'
            ]
        );
        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_img_3'); //設定項目を追加
        $wp_customize_top_sec02->add_control(new WP_Customize_Image_Control($wp_customize_top_sec02, 'childrens_top_sec_info_img_3', array(
            'label' => '三つ目のアイコン', //設定項目のタイトル
            'section' => 'childrens_top_sec_info', //追加するセクションのID
            'settings' => 'childrens_top_sec_info_img_3', //追加する設定項目のID
            'description' => '三つ目のアイコンを設定します', //設定項目の説明
        )));

        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_title_3');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_title_3",
            [
                'settings'    => 'childrens_top_sec_info_title_3',
                'label'       => '三つ目のタイトルを入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'text'
            ]
        );

        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_text_3');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_text_3",
            [
                'settings'    => 'childrens_top_sec_info_text_3',
                'label'       => '三つ目の文章を入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'textarea'
            ]
        );


        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_img_4'); //設定項目を追加
        $wp_customize_top_sec02->add_control(new WP_Customize_Image_Control($wp_customize_top_sec02, 'childrens_top_sec_info_img_4', array(
            'label' => '四つ目のアイコン', //設定項目のタイトル
            'section' => 'childrens_top_sec_info', //追加するセクションのID
            'settings' => 'childrens_top_sec_info_img_4', //追加する設定項目のID
            'description' => '四つ目のアイコンを設定します', //設定項目の説明
        )));

        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_title_4');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_title_4",
            [
                'settings'    => 'childrens_top_sec_info_title_4',
                'label'       => '四つ目のタイトルを入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'text'
            ]
        );

        $wp_customize_top_sec02->add_setting('childrens_top_sec_info_text_4');
        $wp_customize_top_sec02->add_control(
            "childrens_top_sec_info_text_4",
            [
                'settings'    => 'childrens_top_sec_info_text_4',
                'label'       => '四つ目の文章を入力します',
                'section'     => 'childrens_top_sec_info',
                'type'        => 'textarea'
            ]
        );
    }
    add_action('customize_register', 'my_theme_customize_top_section02');
    // 気になる情報をチェック ================================================================================================

    // Instagram ================================================================================================
    function top_sec_insta($wp_customize)
    {
        $wp_customize->add_section(
            'childrens_top_sec_insta',
            [
                'title'           => 'Instagram',
                'priority'        => 4,
                'description' => 'Instagramセクションを編集します',
                //'active_callback' => 
            ]
        );
        $wp_customize->add_setting('childrens_top_sec_insta_img_01'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_01', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_01', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_02'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_02', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_02', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_03'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_03', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_03', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_04'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_04', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_04', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_05'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_05', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_05', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_06'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_06', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_06', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_07'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_07', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_07', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_08'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_08', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_08', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_09'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_09', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_09', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));

        $wp_customize->add_setting('childrens_top_sec_insta_img_10'); //設定項目を追加
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'childrens_top_sec_insta_img_10', array(
            'label' => '画像', //設定項目のタイトル
            'section' => 'childrens_top_sec_insta', //追加するセクションのID
            'settings' => 'childrens_top_sec_insta_img_10', //追加する設定項目のID
            'description' => 'Instagramセクションの画像を設定してください', //設定項目の説明
        )));
    }
    add_action('customize_register', 'top_sec_insta');

    // Instagram ================================================================================================

    // 下層メインビジュアル ================================================================================================
    function my_theme_customize_child_under_visual($wp_customize_child_under_visual)
    {
        $wp_customize_child_under_visual->add_section(
            'childrens_mainvisual_under',
            [
                'title'           => '子ども園の下層メインビジュアル設定',
                'priority'        => 8,
                'description' => '下層ページのメインビジュアルを設定します。',
                //'active_callback' => 
            ]
        );

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_01'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_01', array(
            'label' => 'お知らせページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_01', //追加する設定項目のID
            'description' => 'お知らせページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_02'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_02', array(
            'label' => '園についてページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_02', //追加する設定項目のID
            'description' => '園についてページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_03'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_03', array(
            'label' => '保育のこだわりページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_03', //追加する設定項目のID
            'description' => '保育のこだわりページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_04'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_04', array(
            'label' => '園での生活ページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_04', //追加する設定項目のID
            'description' => '園での生活ページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_05'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_05', array(
            'label' => '入園案内ページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_05', //追加する設定項目のID
            'description' => '入園案内ページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_06'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_06', array(
            'label' => '書類ダウンロードページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_06', //追加する設定項目のID
            'description' => '書類ダウンロードページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));

        $wp_customize_child_under_visual->add_setting('childrens_mainvisual_under_07'); //設定項目を追加
        $wp_customize_child_under_visual->add_control(new WP_Customize_Image_Control($wp_customize_child_under_visual, 'childrens_mainvisual_under_07', array(
            'label' => 'お問い合わせページのメインビジュアル', //設定項目のタイトル
            'section' => 'childrens_mainvisual_under', //追加するセクションのID
            'settings' => 'childrens_mainvisual_under_07', //追加する設定項目のID
            'description' => 'お問い合わせページのメインビジュアルの画像を設定して下さい。', //設定項目の説明
        )));
    }
    add_action('customize_register', 'my_theme_customize_child_under_visual');
    // 下層メインビジュアル ================================================================================================
}
