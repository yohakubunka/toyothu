<?php

//カスタムフィールドの追加　園についてページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

function add_custom_fields()
{
    if (get_site_group() === 'childrens') {
        $get_page_id_about = get_page_by_path("about"); //スラッグから投稿IDを取得
        $get_page_id_about = $get_page_id_about->ID; //連想配列で帰ってくるのでキーを指定してIDを格納
        $post_id = ''; //変数作成
        if (isset($_GET['post']) || isset($_POST['post_ID'])) {
            $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID']; //$_GET['post']がtrueなら$_GET['post']を返し、逆の場合は $_POST['post_ID']を返す
            if ($post_id == $get_page_id_about) { //開いている固定ページのスラッグとget_page_by_pathで取得した投稿IDと比較し一致すればカスタムフィールド生成
                add_meta_box(
                    'custom_setting', //ID
                    '保育理念', //タイトル
                    'insert_custom_fields', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'product_section_about_image', //id(必須)
                    '保育理念画像の登録', //title(必須)
                    'product_custom_fields_about_image', //コールバック(必須)
                    'page', //投稿の種類(必須、post、pageなど)
                    'normal', // 編集画面セクションが表示される部分(オプション)
                    'default' //優先順位
                );
                // 基本方針
                add_meta_box(
                    'custom_setting2', //ID
                    '基本方針', //タイトル
                    'insert_custom_fields_policy', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'custom_setting_goal', //ID
                    '保育目標', //タイトル
                    'insert_custom_fields_goal', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'custom_setting3', //ID
                    '保育内容（3~5歳児の保育）', //タイトル
                    'insert_custom_fields_content1', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'custom_setting4', //ID
                    '保育内容（0~2歳児の保育）', //タイトル
                    'insert_custom_fields_content2', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
            }
        }
    }
}
add_action('admin_menu', 'add_custom_fields');

// 保育理念セクションのカスタムフィールド設定　============================================================================================================
// 画像を表示するために必要な関数
function custom_metabox_edit_form_tag()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag');

// カスタムフィールドの入力エリア
function insert_custom_fields()
{
    global $post;
    // タイトル =================================================
    $childrens_about_sec_philosophy_titile = get_post_meta(
        $post->ID,
        'childrens_about_sec_philosophy_titile',
        true
    );
    echo '<label for="childrens_about_sec_philosophy_titile">見出し</label><br><input style="width:100%; type="text" name="childrens_about_sec_philosophy_titile" value="' . $childrens_about_sec_philosophy_titile . '" /><br>';
    // タイトル =================================================

    // テキストエリア =================================================
    $childrens_about_sec_philosophy_text = get_post_meta(
        $post->ID,
        'childrens_about_sec_philosophy_text',
        true
    );
    echo '<label for="childrens_about_sec_philosophy_text">テキスト</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_philosophy_text" value="' . $childrens_about_sec_philosophy_text . '" />' . $childrens_about_sec_philosophy_text . '</textarea>';
    // テキストエリア =================================================
}


//カスタムフィールド保存処理
function save_custom_fields($post_id)
{
    if (isset($_POST['childrens_about_sec_philosophy_titile'])) {
        update_post_meta($post_id, 'childrens_about_sec_philosophy_titile', $_POST['childrens_about_sec_philosophy_titile']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_philosophy_titile');
    }

    if (isset($_POST['childrens_about_sec_philosophy_text'])) {
        update_post_meta($post_id, 'childrens_about_sec_philosophy_text', $_POST['childrens_about_sec_philosophy_text']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_philosophy_text');
    }
}
add_action('save_post', 'save_custom_fields');
// 保育理念セクションのカスタムフィールド設定　============================================================================================================


// 基本方針セクションのカスタムフィールド設定 ==========================================================================================================
function insert_custom_fields_policy()
{
    // タイトル =================================================
    global $post;
    $childrens_about_sec_policy_title = get_post_meta(
        $post->ID,
        'childrens_about_sec_policy_title',
        true
    );
    echo '<label for="childrens_about_sec_policy_title">見出し</label><br><input style="width:100%; type="text" name="childrens_about_sec_policy_title" value="' . $childrens_about_sec_policy_title . '" /><br>';
    // タイトル =================================================


    // テキストエリア =================================================
    $childrens_about_sec_policy_text = get_post_meta(
        $post->ID,
        'childrens_about_sec_policy_text',
        true
    );
    echo '<label for="childrens_about_sec_policy_text">見出し下文章</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_policy_text" value="' . $childrens_about_sec_policy_text . '" />' . $childrens_about_sec_policy_text . '</textarea>';
    // テキストエリア =================================================

    // カードコンテンツテキストエリア01 =================================================
    $childrens_about_sec_policy_card_01 = get_post_meta(
        $post->ID,
        'childrens_about_sec_policy_card_01',
        true
    );
    echo '<label for="childrens_about_sec_policy_card_01">1つ目の基本方針</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_policy_card_01" value="' . $childrens_about_sec_policy_card_01 . '" />' . $childrens_about_sec_policy_card_01 . '</textarea>';
    // カードコンテンツテキストエリア01 =================================================

    // カードコンテンツテキストエリア02 =================================================
    $childrens_about_sec_policy_card_02 = get_post_meta(
        $post->ID,
        'childrens_about_sec_policy_card_02',
        true
    );
    echo '<label for="childrens_about_sec_policy_card_02">2つ目の基本方針</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_policy_card_02" value="' . $childrens_about_sec_policy_card_02 . '" />' . $childrens_about_sec_policy_card_02 . '</textarea>';
    // カードコンテンツテキストエリア02 =================================================

    // カードコンテンツテキストエリア03 =================================================
    $childrens_about_sec_policy_card_03 = get_post_meta(
        $post->ID,
        'childrens_about_sec_policy_card_03',
        true
    );
    echo '<label for="childrens_about_sec_policy_card_03">3つ目の基本方針</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_policy_card_03" value="' . $childrens_about_sec_policy_card_03 . '" />' . $childrens_about_sec_policy_card_03 . '</textarea>';
    // カードコンテンツテキストエリア03 =================================================
}

function save_custom_fields_policy($post_id)
{
    if (isset($_POST['childrens_about_sec_policy_title'])) {
        update_post_meta($post_id, 'childrens_about_sec_policy_title', $_POST['childrens_about_sec_policy_title']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_policy_title');
    }

    if (isset($_POST['childrens_about_sec_policy_text'])) {
        update_post_meta($post_id, 'childrens_about_sec_policy_text', $_POST['childrens_about_sec_policy_text']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_policy_text');
    }

    if (isset($_POST['childrens_about_sec_policy_card_01'])) {
        update_post_meta($post_id, 'childrens_about_sec_policy_card_01', $_POST['childrens_about_sec_policy_card_01']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_policy_card_01');
    }

    if (isset($_POST['childrens_about_sec_policy_card_02'])) {
        update_post_meta($post_id, 'childrens_about_sec_policy_card_02', $_POST['childrens_about_sec_policy_card_02']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_policy_card_02');
    }

    if (isset($_POST['childrens_about_sec_policy_card_03'])) {
        update_post_meta($post_id, 'childrens_about_sec_policy_card_03', $_POST['childrens_about_sec_policy_card_03']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_policy_card_03');
    }
}
add_action('save_post', 'save_custom_fields_policy');


// 基本方針セクションのカスタムフィールド設定 ==========================================================================================================

// 保育目標セクションのカスタムフィールド設定　============================================================================================================

// カスタムフィールドの入力エリア
function insert_custom_fields_goal()
{
    // タイトル =================================================
    global $post;
    //get_post_meta関数を使ってpostmeta情報を取得
    $childrens_life_sec_goal_title = get_post_meta(
        $post->ID, //投稿ID
        'childrens_life_sec_goal_title', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    echo '<label for="childrens_life_sec_goal_title">保育目標のタイトル</label><br><input style="width:100%; type="text" name="childrens_life_sec_goal_title" value="' . $childrens_life_sec_goal_title . '" /><br>';
    // タイトル =================================================

    // テキストエリア =================================================
    $childrens_life_sec_goal_text_01 = get_post_meta(
        $post->ID,
        'childrens_life_sec_goal_text_01',
        true
    );
    echo '<label for="childrens_life_sec_goal_text_01">保育目標のテキスト1つ目</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_goal_text_01" value="' . $childrens_life_sec_goal_text_01 . '" />' . $childrens_life_sec_goal_text_01 . '</textarea>';
    // テキストエリア =================================================

    // テキストエリア =================================================
    $childrens_life_sec_goal_text_02 = get_post_meta(
        $post->ID,
        'childrens_life_sec_goal_text_02',
        true
    );
    echo '<label for="childrens_life_sec_goal_text_02">保育目標のテキスト2つ目</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_goal_text_02" value="' . $childrens_life_sec_goal_text_02 . '" />' . $childrens_life_sec_goal_text_02 . '</textarea>';
    // テキストエリア =================================================

    // テキストエリア =================================================
    $childrens_life_sec_goal_text_03 = get_post_meta(
        $post->ID,
        'childrens_life_sec_goal_text_03',
        true
    );
    echo '<label for="childrens_life_sec_goal_text_03">保育目標のテキスト3つ目</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_goal_text_03" value="' . $childrens_life_sec_goal_text_03 . '" />' . $childrens_life_sec_goal_text_03 . '</textarea>';
    // テキストエリア =================================================

    // テキストエリア =================================================
    $childrens_life_sec_goal_text_04 = get_post_meta(
        $post->ID,
        'childrens_life_sec_goal_text_04',
        true
    );
    echo '<label for="childrens_life_sec_goal_text_04">保育目標のテキスト4つ目</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_goal_text_04" value="' . $childrens_life_sec_goal_text_04 . '" />' . $childrens_life_sec_goal_text_04 . '</textarea>';
    // テキストエリア =================================================

    // テキストエリア =================================================
    $childrens_life_sec_goal_text_05 = get_post_meta(
        $post->ID,
        'childrens_life_sec_goal_text_05',
        true
    );
    echo '<label for="childrens_life_sec_goal_text_05">保育目標のテキスト5つ目</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_goal_text_05" value="' . $childrens_life_sec_goal_text_05 . '" />' . $childrens_life_sec_goal_text_05 . '</textarea>';
    // テキストエリア =================================================

    // テキストエリア =================================================
    $childrens_life_sec_goal_text_06 = get_post_meta(
        $post->ID,
        'childrens_life_sec_goal_text_06',
        true
    );
    echo '<label for="childrens_life_sec_goal_text_06">保育目標のテキスト6つ目</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_goal_text_06" value="' . $childrens_life_sec_goal_text_06 . '" />' . $childrens_life_sec_goal_text_06 . '</textarea>';
    // テキストエリア =================================================

}


//カスタムフィールド保存処理
function save_custom_fields_life_goal($post_id)
{
    if (isset($_POST['childrens_life_sec_goal_title'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_title', $_POST['childrens_life_sec_goal_title']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_title');
    }

    if (isset($_POST['childrens_life_sec_goal_text_01'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_text_01', $_POST['childrens_life_sec_goal_text_01']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_text_01');
    }

    if (isset($_POST['childrens_life_sec_goal_text_02'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_text_02', $_POST['childrens_life_sec_goal_text_02']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_text_02');
    }

    if (isset($_POST['childrens_life_sec_goal_text_03'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_text_03', $_POST['childrens_life_sec_goal_text_03']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_text_03');
    }

    if (isset($_POST['childrens_life_sec_goal_text_04'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_text_04', $_POST['childrens_life_sec_goal_text_04']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_text_04');
    }

    if (isset($_POST['childrens_life_sec_goal_text_05'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_text_05', $_POST['childrens_life_sec_goal_text_05']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_text_05');
    }

    if (isset($_POST['childrens_life_sec_goal_text_06'])) {
        update_post_meta($post_id, 'childrens_life_sec_goal_text_06', $_POST['childrens_life_sec_goal_text_06']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_goal_text_06');
    }
}
add_action('save_post', 'save_custom_fields_life_goal');
// 保育目標セクションのカスタムフィールド設定　============================================================================================================


// 保育内容セクションのカスタムフィールド設定 ==========================================================================================================


// 保育内容セクションのカスタムフィールド設定 =======================================================================

function insert_custom_fields_content1()
{
    // テキストエリア =================================================
    global $post;
    $childrens_about_sec_content_title_01 = get_post_meta(
        $post->ID,
        'childrens_about_sec_content_title_01',
        true
    );
    echo '<label for="childrens_about_sec_content_title_01">保育内容タイトル</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_content_title_01" value="' . $childrens_about_sec_content_title_01 . '" />' . $childrens_about_sec_content_title_01 . '</textarea>';
    // テキストエリア =================================================


    // テキストエリア =================================================
    $childrens_about_sec_content_text_01 = get_post_meta(
        $post->ID,
        'childrens_about_sec_content_text_01',
        true
    );
    echo '<label for="childrens_about_sec_content_text_01">保育内容テキスト1</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_content_text_01" value="' . $childrens_about_sec_content_text_01 . '" />' . $childrens_about_sec_content_text_01 . '</textarea>';
    // テキストエリア =================================================

    for ($i = 0; $i <= 4; $i++) {
        $childrens_about_sec_content_img[] = get_post_meta($post->ID, 'childrens_about_sec_content_img_01_0' . $i, true);
    }
?>

    <table class="form-table">
        <?php for ($i = 1; $i <= 4; $i++) : ?>

            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_about_sec_content_img_01_0<?php echo $i; ?>" name="childrens_about_sec_content_img_01_0<?php echo $i; ?>" value="<?php echo $childrens_about_sec_content_img[$i] ? $childrens_about_sec_content_img[$i] : '' ?>">
                    <div id="image-wrapper_<?php echo $i ?>">
                        <?php if ($childrens_about_sec_content_img[$i]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_about_sec_content_img[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image1">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary content_button" name="media_button" value="追加" id="content_media-button_<?php echo $i ?>" />
                        <input type="button" class="button button-secondary content_remove" name="media_remove" value="削除" id="content_media-remove_<?php echo $i ?>" />
                    </p>
                </td>
            </tr>

        <?php endfor; ?>
    </table>
<?php
}

function insert_custom_fields_content2()
{
    // テキストエリア =================================================
    global $post;
    $childrens_about_sec_content_title_02 = get_post_meta(
        $post->ID,
        'childrens_about_sec_content_title_02',
        true
    );
    echo '<label for="childrens_about_sec_content_title_02">保育内容タイトル</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_content_title_02" value="' . $childrens_about_sec_content_title_02 . '" />' . $childrens_about_sec_content_title_02 . '</textarea>';
    // テキストエリア =================================================


    // テキストエリア =================================================
    $childrens_about_sec_content_text_02 = get_post_meta(
        $post->ID,
        'childrens_about_sec_content_text_02',
        true
    );
    echo '<label for="childrens_about_sec_content_text_02">保育内容テキスト1</label><br><textarea style="width:100%; type="text" name="childrens_about_sec_content_text_02" value="' . $childrens_about_sec_content_text_02 . '" />' . $childrens_about_sec_content_text_02 . '</textarea>';
    // テキストエリア =================================================

    for ($i = 0; $i <= 4; $i++) {
        $childrens_about_sec_content_img[] = get_post_meta($post->ID, 'childrens_about_sec_content_img_02_0' . $i, true);
    }
?>

    <table class="form-table">
        <?php for ($i = 1; $i <= 4; $i++) : ?>

            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_about_sec_content_img_02_0<?php echo $i; ?>" name="childrens_about_sec_content_img_02_0<?php echo $i; ?>" value="<?php echo $childrens_about_sec_content_img[$i] ? $childrens_about_sec_content_img[$i] : '' ?>">
                    <div id="image-wrapper_<?php echo $i ?>2">
                        <?php if ($childrens_about_sec_content_img[$i]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_about_sec_content_img[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image2">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary content_button2" name="media_button" value="追加" id="content_media-button_<?php echo $i ?>2" />
                        <input type="button" class="button button-secondary content_remove2" name="media_remove" value="削除" id="content_media-remove_<?php echo $i ?>2" />
                    </p>
                </td>
            </tr>

        <?php endfor; ?>
    </table>
<?php
}

function save_custom_fields_content($post_id)
{
    if (isset($_POST['childrens_about_sec_content_title_01'])) {
        update_post_meta($post_id, 'childrens_about_sec_content_title_01', $_POST['childrens_about_sec_content_title_01']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_content_title_01');
    }

    if (isset($_POST['childrens_about_sec_content_text_01'])) {
        update_post_meta($post_id, 'childrens_about_sec_content_text_01', $_POST['childrens_about_sec_content_text_01']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_content_text_01');
    }
}
add_action('save_post', 'save_custom_fields_content');

function save_custom_fields_content2($post_id)
{
    if (isset($_POST['childrens_about_sec_content_title_02'])) {
        update_post_meta($post_id, 'childrens_about_sec_content_title_02', $_POST['childrens_about_sec_content_title_02']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_content_title_02');
    }

    if (isset($_POST['childrens_about_sec_content_text_02'])) {
        update_post_meta($post_id, 'childrens_about_sec_content_text_02', $_POST['childrens_about_sec_content_text_02']);
    } else {
        delete_post_meta($post_id, 'childrens_about_sec_content_text_02');
    }
}
add_action('save_post', 'save_custom_fields_content2');

// 保育内容セクションのカスタムフィールド設定 =======================================================================


//カスタムフィールドの追加　園についてページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★


// 画像アップ処理
function product_custom_fields_about_image()
{
    global $post;

    $childrens_about_sec_philosophy_img[] = get_post_meta($post->ID, 'childrens_about_sec_philosophy_img', true);

?>
    <table class="form-table">
        <tr class="form-field">
            <th scope="row">画像</th>
            <td>
                <input type="hidden" id="childrens_about_sec_philosophy_img" name="childrens_about_sec_philosophy_img" value="<?php echo $childrens_about_sec_philosophy_img[0] ? $childrens_about_sec_philosophy_img[0] : '' ?>">
                <div id="image-wrapper_<?php echo 0 ?>">
                    <?php if ($childrens_about_sec_philosophy_img[0]) {
                        $product_thumb = wp_get_attachment_image_src($childrens_about_sec_philosophy_img[0], 'thumbnail');
                    ?>
                        <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                    <?php } ?>
                </div>
                <p><input type="button" class="button button-secondary media_button_a" name="media_button" value="追加" id="media-button_<?php echo 0 ?>" />
                    <input type="button" class="button button-secondary media_remove" name="media_remove" value="削除" id="media-remove_<?php echo 0 ?>" />
                </p>
            </td>
        </tr>
    </table>
<?php
}


function add_script()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_a').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_about_sec_philosophy_img').val(attachment.id);
                                $('#image-wrapper_0').html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_about_sec_philosophy_img').val('');
                        $('#image-wrapper_0').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script');

function add_script2()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.content_button').each(function(index) {
                    index = index + 1;
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_about_sec_content_img_01_0' + index).val(attachment.id);
                                $('#image-wrapper_' + index).html('<img class="custom_media_image1" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.content_remove').each(function(index) {
                    index = index + 1;
                    $(this).on("click", function() {
                        $('#childrens_about_sec_content_img_01_0' + index).val('');
                        $('#image-wrapper_' + index).remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script2');


function add_script3()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.content_button2').each(function(index) {
                    index = index + 1;
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_about_sec_content_img_02_0' + index).val(attachment.id);
                                $('#image-wrapper_' + index + "2").html('<img class="custom_media_image2" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.content_remove2').each(function(index) {
                    index = index + 1;
                    $(this).on("click", function() {
                        $('#childrens_about_sec_content_img_02_0' + index).val('');
                        $('#image-wrapper_' + index + "2").remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script3');




function save_products_about($post_id)
{
    // 画像の保存
    if (isset($_POST['childrens_about_sec_philosophy_img'])) {
        if ($_POST['childrens_about_sec_philosophy_img'] !== '') {
            update_post_meta($post_id, 'childrens_about_sec_philosophy_img', $_POST['childrens_about_sec_philosophy_img']);
        } else {
            delete_post_meta($post_id, 'childrens_about_sec_philosophy_img');
        }
    }

    // 画像の保存
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST['childrens_about_sec_content_img_01_0' . $i])) {
            if ($_POST['childrens_about_sec_content_img_01_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_about_sec_content_img_01_0' . $i, $_POST['childrens_about_sec_content_img_01_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_about_sec_content_img_01_0' . $i);
            }
        }
    }

    // 画像の保存
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST['childrens_about_sec_content_img_02_0' . $i])) {
            if ($_POST['childrens_about_sec_content_img_02_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_about_sec_content_img_02_0' . $i, $_POST['childrens_about_sec_content_img_02_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_about_sec_content_img_02_0' . $i);
            }
        }
    }
}
add_action('save_post', 'save_products_about');
?>