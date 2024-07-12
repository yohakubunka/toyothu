<?php // カスタム投稿タイプを追加

if (get_site_group() === 'childrens') {
    add_action('init', 'custom_post_type');
    function custom_post_type()
    {
        register_post_type(
            'childrens_download', // カスタム投稿タイプのスラッグの指定
            array(
                'labels' => array(
                    'name' => __('書類ダウンロード'),          // メニューに表示される投稿名
                    'singular_name' => __('書類ダウンロード'), // 単体系の投稿名
                    'add_new' => _x('新規追加', 'childrens_download'),        // 新規追加の名前
                    'add_new_item' => __('新規追加')            // 新規追加の名前
                ),
                'public' => true,                 // 投稿タイプをパブリックにする
                'has_archive' => true,            // アーカイブを有効にする
                'hierarchical' => false,          // ページ階層の指定
                'menu_position' => 5,              // 管理画面上の配置指定
                'menu_icon' => 'dashicons-edit',  // アイコン
                'supports' => array('title', 'editor', 'thumbnail', 'revisions') // サポート指定
                // 全てのサポートを使う場合は下記参照
                //'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
            )
        );


        register_post_type(
            'childrens_flow',
            array(
                'labels' => array(
                    'name' => __('入園までの流れ'),
                    'singular_name' => __('入園までの流れ'),
                    'add_new' => _x('新規追加', 'childrens_flow'),
                    'add_new_item' => __('新規追加')
                ),
                'public' => true,
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 5,
                'menu_icon' => 'dashicons-list-view',
                'supports' => array('title', 'editor', 'thumbnail', 'revisions') // サポート指定
                // 全てのサポートを使う場合は下記参照
                //'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
            )
        );
    }
}


// 入園までの流れにタクソノミーを追加
function add_taxonomy_flow()
{
    register_taxonomy(
        'childrens_flow_category', // タクソノミースラッグ
        'childrens_flow',          // 使用するカスタム投稿タイプを指定
        array(
            'hierarchical' => true,          // 階層を持たせるかを指定(trueでカテゴリー、falseでタグ)
            'label' => '入園月',          // メニューに表示されるアサル（ASAL）
            'singular_label' => '入園月', // 単体系のアサル（ASAL）
            'public' => true,                // 投稿タイプをパブリックにする
            'show_ui' => true                // 管理画面上に編集画面を表示するかを指定
        )
    );
}
add_action('init', 'add_taxonomy_flow');

// 書類ダウンロードにタクソノミーを追加
function add_taxonomy_childrens_download()
{
    register_taxonomy(
        'childrens_download_category', // タクソノミースラッグ
        'childrens_download',          // 使用するカスタム投稿タイプを指定
        array(
            'hierarchical' => true,          // 階層を持たせるかを指定(trueでカテゴリー、falseでタグ)
            'label' => '書類分類',          // メニューに表示されるアサル（ASAL）
            'singular_label' => '書類分類', // 単体系のアサル（ASAL）
            'public' => true,                // 投稿タイプをパブリックにする
            'show_ui' => true                // 管理画面上に編集画面を表示するかを指定
        )
    );
}
add_action('init', 'add_taxonomy_childrens_download');
