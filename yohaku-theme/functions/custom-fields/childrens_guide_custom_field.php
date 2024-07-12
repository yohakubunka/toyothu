<?php

//カスタムフィールドの追加　園についてページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

function add_custom_fields_guide()
{
    if (get_site_group() === 'childrens') {
        $get_page_id_about = get_page_by_path("guide"); //スラッグから投稿IDを取得
        $get_page_id_about = $get_page_id_about->ID; //連想配列で帰ってくるのでキーを指定してIDを格納
        $post_id = ''; //変数作成
        if (isset($_GET['post']) || isset($_POST['post_ID'])) {
            $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID']; //$_GET['post']がtrueなら$_GET['post']を返し、逆の場合は $_POST['post_ID']を返す

            add_meta_box(
                'custom_setting_guide_flow', //ID
                '入園までの流れ、リンク', //タイトル
                'insert_custom_fields_guide_flow_link', //編集画面セクションにHTML出力する関数
                'childrens_flow',
                'normal' //編集画面セクションが表示される部分
            );

            if ($post_id == $get_page_id_about) { //開いている固定ページのスラッグとget_page_by_pathで取得した投稿IDと比較し一致すればカスタムフィールド生成
                add_meta_box(
                    'custom_setting', //ID
                    '保育料と諸費用', //タイトル
                    'insert_custom_fields_guide_price', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );

                add_meta_box(
                    'custom_setting_guide_flow', //ID
                    '入園までの流れ', //タイトル
                    'insert_custom_fields_guide_flow', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );


                add_meta_box(
                    'custom_setting_guide_reserve', //ID
                    '見学予約', //タイトル
                    'insert_custom_fields_guide_reserve', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
            }
        }
    }
}
add_action('admin_menu', 'add_custom_fields_guide');

// 保育料と諸費用セクションのカスタムフィールド設定　============================================================================================================
// 画像を表示するために必要な関数
function custom_metabox_edit_form_tag_guide()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag_guide');

// カスタムフィールドの入力エリア
function insert_custom_fields_guide_price()
{
    global $post;


    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_price_title_01 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_price_title_01', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_price_title_01">保育料のタイトル</label><br><input style="width:100%; type="text" name="childrens_guide_sec_price_title_01" value="' . $childrens_guide_sec_price_title_01 . '" /><br>';
    // タイトル =================================================


    // テキストエリア =================================================
    $childrens_guide_sec_price_text_01 = get_post_meta(
        $post->ID,
        'childrens_guide_sec_price_text_01',
        true
    );
    echo '<label for="childrens_guide_sec_price_text_01">保育料のテキスト</label><br><textarea style="width:100%; type="text" name="childrens_guide_sec_price_text_01" value="' . $childrens_guide_sec_price_text_01 . '" />' . $childrens_guide_sec_price_text_01 . '</textarea>';
    // テキストエリア =================================================

    // リンク =================================================
    $childrens_guide_sec_price_url_01 = get_post_meta(
        $post->ID,
        'childrens_guide_sec_price_url_01',
        true
    );
    echo '<label for="childrens_guide_sec_price_url_01">保育料のリンク</label><br><input style="width:100%; type="url" name="childrens_guide_sec_price_url_01" value="' . $childrens_guide_sec_price_url_01 . '" /><br>';
    // リンク =================================================



    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_price_title_02 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_price_title_02', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_price_title_02">諸費用のタイトル</label><br><input style="width:100%; type="text" name="childrens_guide_sec_price_title_02" value="' . $childrens_guide_sec_price_title_02 . '" /><br>';
    // タイトル =================================================


    // テキストエリア =================================================
    $childrens_guide_sec_price_text_02 = get_post_meta(
        $post->ID,
        'childrens_guide_sec_price_text_02',
        true
    );
    echo '<label for="childrens_guide_sec_price_text_02">諸費用のテキスト</label><br><textarea style="width:100%; type="text" name="childrens_guide_sec_price_text_02" value="' . $childrens_guide_sec_price_text_02 . '" />' . $childrens_guide_sec_price_text_02 . '</textarea>';
    // テキストエリア =================================================

    // リンク =================================================
    $childrens_guide_sec_price_url_02 = get_post_meta(
        $post->ID,
        'childrens_guide_sec_price_url_02',
        true
    );
    echo '<label for="childrens_guide_sec_price_url_02">諸費用のリンク</label><br><input style="width:100%; type="url" name="childrens_guide_sec_price_url_02" value="' . $childrens_guide_sec_price_url_02 . '" /><br>';
    // リンク =================================================

}


//カスタムフィールド保存処理
function save_custom_fields_guide_price($post_id)
{
    if (isset($_POST['childrens_guide_sec_price_title_01'])) {
        //childrens_guide_sec_price_title_01キーで、$_POST['childrens_guide_sec_price_title_01']を保存
        update_post_meta($post_id, 'childrens_guide_sec_price_title_01', $_POST['childrens_guide_sec_price_title_01']);
    } else {
        //childrens_guide_sec_price_title_01キーの情報を削除
        delete_post_meta($post_id, 'childrens_guide_sec_price_title_01');
    }

    if (isset($_POST['childrens_guide_sec_price_text_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_price_text_01', $_POST['childrens_guide_sec_price_text_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_price_text_01');
    }


    if (isset($_POST['childrens_guide_sec_price_url_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_price_url_01', $_POST['childrens_guide_sec_price_url_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_price_url_01');
    }


    if (isset($_POST['childrens_guide_sec_price_title_02'])) {
        //childrens_guide_sec_price_title_01キーで、$_POST['childrens_guide_sec_price_title_01']を保存
        update_post_meta($post_id, 'childrens_guide_sec_price_title_02', $_POST['childrens_guide_sec_price_title_02']);
    } else {
        //childrens_guide_sec_price_title_01キーの情報を削除
        delete_post_meta($post_id, 'childrens_guide_sec_price_title_02');
    }

    if (isset($_POST['childrens_guide_sec_price_text_02'])) {
        update_post_meta($post_id, 'childrens_guide_sec_price_text_02', $_POST['childrens_guide_sec_price_text_02']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_price_text_02');
    }


    if (isset($_POST['childrens_guide_sec_price_url_02'])) {
        update_post_meta($post_id, 'childrens_guide_sec_price_url_02', $_POST['childrens_guide_sec_price_url_02']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_price_url_02');
    }
}
add_action('save_post', 'save_custom_fields_guide_price');
// 保育料と諸費用セクションのカスタムフィールド設定　============================================================================================================

// 入園までの流れセクションのカスタムフィールド設定　============================================================================================================
// カスタムフィールドの入力エリア
function insert_custom_fields_guide_flow()
{
    global $post;
    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_flow_text_01 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_flow_text_01', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_flow_text_01">入園までの流れタイトル下のテキスト1</label><br><input style="width:100%; type="text" name="childrens_guide_sec_flow_text_01" value="' . $childrens_guide_sec_flow_text_01 . '" /><br>';
    // タイトル =================================================

    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_flow_text_02 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_flow_text_02', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_flow_text_02">入園までの流れタイトル下のテキスト2</label><br><input style="width:100%; type="text" name="childrens_guide_sec_flow_text_02" value="' . $childrens_guide_sec_flow_text_02 . '" /><br>';
    // タイトル =================================================

    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_flow_text_03 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_flow_text_03', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_flow_text_03">入園までの流れタイトル下のテキスト2</label><br><input style="width:100%; type="text" name="childrens_guide_sec_flow_text_03" value="' . $childrens_guide_sec_flow_text_03 . '" /><br>';
    // タイトル =================================================
}
//カスタムフィールド保存処理
function save_custom_fields_guide_flow($post_id)
{
    if (isset($_POST['childrens_guide_sec_flow_text_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_flow_text_01', $_POST['childrens_guide_sec_flow_text_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_flow_text_01');
    }
    if (isset($_POST['childrens_guide_sec_flow_text_02'])) {
        update_post_meta($post_id, 'childrens_guide_sec_flow_text_02', $_POST['childrens_guide_sec_flow_text_02']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_flow_text_02');
    }
    if (isset($_POST['childrens_guide_sec_flow_text_03'])) {
        update_post_meta($post_id, 'childrens_guide_sec_flow_text_03', $_POST['childrens_guide_sec_flow_text_03']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_flow_text_03');
    }
}
add_action('save_post', 'save_custom_fields_guide_flow');
// 入園までの流れセクションのカスタムフィールド設定　============================================================================================================



// 入園までの流れセクションのカスタムフィールド設定　============================================================================================================
// カスタムフィールドの入力エリア
function insert_custom_fields_guide_reserve()
{
    global $post;
    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_reserve_subtile_01 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_reserve_subtile_01', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_reserve_subtile_01">見出し下見学予約サブタイトル1</label><br><input style="width:100%; type="text" name="childrens_guide_sec_reserve_subtile_01" value="' . $childrens_guide_sec_reserve_subtile_01 . '" /><br>';
    // タイトル =================================================



    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_reserve_title_01 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_reserve_title_01', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_reserve_title_01">見学予約のタイトル1</label><br><input style="width:100%; type="text" name="childrens_guide_sec_reserve_title_01" value="' . $childrens_guide_sec_reserve_title_01 . '" /><br>';
    // タイトル =================================================

    // テキストエリア =================================================
    $childrens_guide_sec_reserve_text_01 = get_post_meta(
        $post->ID,
        'childrens_guide_sec_reserve_text_01',
        true
    );
    echo '<label for="childrens_guide_sec_reserve_text_01">説明文1</label><br><textarea style="width:100%; type="text" name="childrens_guide_sec_reserve_text_01" value="' . $childrens_guide_sec_reserve_text_01 . '" />' . $childrens_guide_sec_reserve_text_01 . '</textarea>';
    // テキストエリア =================================================

    // リンク =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_reserve_link_01 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_reserve_link_01', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_reserve_link_01">リンク1（電話番号の場合は空でも可）</label><br><input style="width:100%; type="text" name="childrens_guide_sec_reserve_link_01" value="' . $childrens_guide_sec_reserve_link_01 . '" /><br><br><br>';
    // リンク =================================================



    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_reserve_title_02 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_reserve_title_02', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_reserve_title_02">見学予約のタイトル2</label><br><input style="width:100%; type="text" name="childrens_guide_sec_reserve_title_02" value="' . $childrens_guide_sec_reserve_title_02 . '" /><br>';
    // タイトル =================================================

    // テキストエリア =================================================
    $childrens_guide_sec_reserve_text_02 = get_post_meta(
        $post->ID,
        'childrens_guide_sec_reserve_text_02',
        true
    );
    echo '<label for="childrens_guide_sec_reserve_text_02">説明文2</label><br><textarea style="width:100%; type="text" name="childrens_guide_sec_reserve_text_02" value="' . $childrens_guide_sec_reserve_text_02 . '" />' . $childrens_guide_sec_reserve_text_02 . '</textarea>';
    // テキストエリア =================================================

    // リンク =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_reserve_link_02 = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_reserve_link_02', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_reserve_link_02">リンク2（電話番号の場合は空でも可）</label><br><input style="width:100%; type="text" name="childrens_guide_sec_reserve_link_02" value="' . $childrens_guide_sec_reserve_link_02 . '" /><br>';
    // リンク =================================================
}
//カスタムフィールド保存処理
function save_custom_fields_guide_reserve($post_id)
{
    if (isset($_POST['childrens_guide_sec_reserve_subtile_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_subtile_01', $_POST['childrens_guide_sec_reserve_subtile_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_subtile_01');
    }
    if (isset($_POST['childrens_guide_sec_reserve_title_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_title_01', $_POST['childrens_guide_sec_reserve_title_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_title_01');
    }
    if (isset($_POST['childrens_guide_sec_reserve_text_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_text_01', $_POST['childrens_guide_sec_reserve_text_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_text_01');
    }
    if (isset($_POST['childrens_guide_sec_reserve_link_01'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_link_01', $_POST['childrens_guide_sec_reserve_link_01']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_link_01');
    }


    if (isset($_POST['childrens_guide_sec_reserve_title_02'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_title_02', $_POST['childrens_guide_sec_reserve_title_02']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_title_02');
    }
    if (isset($_POST['childrens_guide_sec_reserve_text_02'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_text_02', $_POST['childrens_guide_sec_reserve_text_02']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_text_02');
    }
    if (isset($_POST['childrens_guide_sec_reserve_link_02'])) {
        update_post_meta($post_id, 'childrens_guide_sec_reserve_link_02', $_POST['childrens_guide_sec_reserve_link_02']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_reserve_link_02');
    }
}
add_action('save_post', 'save_custom_fields_guide_reserve');
// 入園までの流れセクションのカスタムフィールド設定　============================================================================================================



// 入園までの流れセクションのカスタムフィールド設定　============================================================================================================
// カスタムフィールドの入力エリア
function insert_custom_fields_guide_flow_link()
{
    global $post;
    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_flow_content_link = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_flow_content_link', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_flow_content_link">入園までの流れのリンクを入力して下さい。</label><br><input style="width:100%; type="text" name="childrens_guide_sec_flow_content_link" value="' . $childrens_guide_sec_flow_content_link . '" /><br>';
    // タイトル =================================================


    // タイトル =================================================
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_guide_sec_flow_content_link_text = get_post_meta(
        $post->ID, //投稿ID
        'childrens_guide_sec_flow_content_link_text', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_guide_sec_flow_content_link_text">リンクテキスト</label><br><input style="width:100%; type="text" name="childrens_guide_sec_flow_content_link_text" value="' . $childrens_guide_sec_flow_content_link_text . '" /><br>';
    // タイトル =================================================

}
//カスタムフィールド保存処理
function save_custom_fields_guide_flow_link($post_id)
{

    if (isset($_POST['childrens_guide_sec_flow_content_link'])) {
        update_post_meta($post_id, 'childrens_guide_sec_flow_content_link', $_POST['childrens_guide_sec_flow_content_link']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_flow_content_link');
    }
    if (isset($_POST['childrens_guide_sec_flow_content_link_text'])) {
        update_post_meta($post_id, 'childrens_guide_sec_flow_content_link_text', $_POST['childrens_guide_sec_flow_content_link_text']);
    } else {
        delete_post_meta($post_id, 'childrens_guide_sec_flow_content_link_text');
    }
}
add_action('save_post', 'save_custom_fields_guide_flow_link');
// 入園までの流れセクションのカスタムフィールド設定　============================================================================================================


//カスタムフィールドの追加　園についてページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
