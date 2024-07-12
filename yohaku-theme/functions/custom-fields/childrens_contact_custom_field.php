<?php

//カスタムフィールドの追加
function add_custom_fields_childrens_contact()
{
    if (get_site_group() === 'childrens') {
        $get_page_id_contact = get_page_by_path("contact"); //スラッグから投稿IDを取得
        $get_page_id_contact = $get_page_id_contact->ID; //連想配列で帰ってくるのでキーを指定してIDを格納
        $post_id = ''; //変数作成
        if (isset($_GET['post']) || isset($_POST['post_ID'])) {
            $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID']; //$_GET['post']がtrueなら$_GET['post']を返し、逆の場合は $_POST['post_ID']を返す
            if ($post_id == $get_page_id_contact) { //開いている固定ページのスラッグとget_page_by_pathで取得した投稿IDと比較し一致すればカスタムフィールド生成
                add_meta_box(
                    'custom_setting_childrens_contact', //ID
                    'お問い合わせ', //タイトル
                    'insert_custom_fields_childrens_contact', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
            }
        }
    }
}
add_action('admin_menu', 'add_custom_fields_childrens_contact');

// カスタムフィールドの入力エリア
function insert_custom_fields_childrens_contact()
{
    // タイトル =================================================
    global $post;
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_contact_sec_phone_caution = get_post_meta(
        $post->ID, //投稿ID
        'childrens_contact_sec_phone_caution', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_contact_sec_phone_caution">お問い合わせ注釈文</label><br><input style="width:100%; type="text" name="childrens_contact_sec_phone_caution" value="' . $childrens_contact_sec_phone_caution . '" /><br>';
    // タイトル =================================================
}

//カスタムフィールド保存処理
function save_custom_fields_childrens_contact($post_id)
{
    if (isset($_POST['childrens_contact_sec_phone_caution'],)) {
        update_post_meta($post_id, 'childrens_contact_sec_phone_caution', $_POST['childrens_contact_sec_phone_caution']);
    } else {
        delete_post_meta($post_id, 'childrens_contact_sec_phone_caution');
    }
}
add_action('save_post', 'save_custom_fields_childrens_contact');
