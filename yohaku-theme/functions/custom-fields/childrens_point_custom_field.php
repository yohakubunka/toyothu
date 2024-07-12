<?php
//カスタムフィールドの追加　保育のこだわりページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
function add_custom_fields_point()
{
    if (get_site_group() === 'childrens') {
        $get_page_id_about = get_page_by_path("point"); //スラッグから投稿IDを取得
        $get_page_id_about = $get_page_id_about->ID; //連想配列で帰ってくるのでキーを指定してIDを格納
        $post_id = ''; //変数作成
        if (isset($_GET['post']) || isset($_POST['post_ID'])) {
            $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID']; //$_GET['post']がtrueなら$_GET['post']を返し、逆の場合は $_POST['post_ID']を返す
            if ($post_id == $get_page_id_about) { //開いている固定ページのスラッグとget_page_by_pathで取得した投稿IDと比較し一致すればカスタムフィールド生成
                add_meta_box(
                    'custom_setting_point', //ID
                    '保育のこだわり1つ目', //タイトル
                    'product_custom_fields_point_image', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'custom_setting_point1', //ID
                    '保育のこだわり2つ目', //タイトル
                    'product_custom_fields_point_image1', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'custom_setting_point2', //ID
                    '保育のこだわり3つ目', //タイトル
                    'product_custom_fields_point_image2', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                // その他の活動
                add_meta_box(
                    'custom_setting_point_other', //ID
                    'その他の活動', //タイトル
                    'product_custom_fields_point_other', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                // 基本方針
                add_meta_box(
                    'custom_setting_point_food', //ID
                    '食育', //タイトル
                    'product_custom_fields_point_food', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
            }
        }
    }
}
add_action('admin_menu', 'add_custom_fields_point');



// 食育セクションのカスタムフィールド設定 ==========================================================================================================
function product_custom_fields_point_food()
{
    // タイトル =================================================
    global $post;
    $childrens_point_sec_food_title = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_title',
        true
    );
    echo '<label for="childrens_point_sec_food_title">タイトル</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_title" value="' . $childrens_point_sec_food_title . '" /><br>';
    // タイトル =================================================


    // テキストエリア =================================================
    $childrens_point_sec_food_text = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_text',
        true
    );
    echo '<label for="childrens_point_sec_food_text">テキスト</label><br><textarea style="width:100%; type="text" name="childrens_point_sec_food_text" value="' . $childrens_point_sec_food_text . '" />' . $childrens_point_sec_food_text . '</textarea>';
    // テキストエリア =================================================

    // 1つ目の食育 =================================================
    $childrens_point_sec_food_content_01 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_01',
        true
    );
    echo '<label for="childrens_point_sec_food_content_01">1つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_01" value="' . $childrens_point_sec_food_content_01 . '" /><br>';
    // 1つ目の食育 =================================================

    // 2つ目の食育 =================================================
    $childrens_point_sec_food_content_02 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_02',
        true
    );
    echo '<label for="childrens_point_sec_food_content_02">2つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_02" value="' . $childrens_point_sec_food_content_02 . '" /><br>';
    // 2つ目の食育 =================================================

    // 3つ目の食育 =================================================
    $childrens_point_sec_food_content_03 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_03',
        true
    );
    echo '<label for="childrens_point_sec_food_content_03">3つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_03" value="' . $childrens_point_sec_food_content_03 . '" /><br>';
    // 3つ目の食育 =================================================

    // 4つ目の食育 =================================================
    $childrens_point_sec_food_content_04 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_04',
        true
    );
    echo '<label for="childrens_point_sec_food_content_04">4つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_04" value="' . $childrens_point_sec_food_content_04 . '" /><br>';
    // 4つ目の食育 =================================================

    // 5つ目の食育 =================================================
    $childrens_point_sec_food_content_05 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_05',
        true
    );
    echo '<label for="childrens_point_sec_food_content_05">5つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_05" value="' . $childrens_point_sec_food_content_05 . '" /><br>';
    // 5つ目の食育 =================================================

    // 6つ目の食育 =================================================
    $childrens_point_sec_food_content_06 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_06',
        true
    );
    echo '<label for="childrens_point_sec_food_content_06">6つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_06" value="' . $childrens_point_sec_food_content_06 . '" /><br>';
    // 6つ目の食育 =================================================

    // 7つ目の食育 =================================================
    $childrens_point_sec_food_content_07 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_07',
        true
    );
    echo '<label for="childrens_point_sec_food_content_07">7つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_07" value="' . $childrens_point_sec_food_content_07 . '" /><br>';
    // 7つ目の食育 =================================================

    // 8つ目の食育 =================================================
    $childrens_point_sec_food_content_08 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_08',
        true
    );
    echo '<label for="childrens_point_sec_food_content_08">8つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_08" value="' . $childrens_point_sec_food_content_08 . '" /><br>';
    // 8つ目の食育 =================================================

    // 9つ目の食育 =================================================
    $childrens_point_sec_food_content_09 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_09',
        true
    );
    echo '<label for="childrens_point_sec_food_content_09">9つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_09" value="' . $childrens_point_sec_food_content_09 . '" /><br>';
    // 9つ目の食育 =================================================

    // 10つ目の食育 =================================================
    $childrens_point_sec_food_content_10 = get_post_meta(
        $post->ID,
        'childrens_point_sec_food_content_10',
        true
    );
    echo '<label for="childrens_point_sec_food_content_10">10つ目の食育コンテンツ</label><br><input style="width:100%; type="text" name="childrens_point_sec_food_content_10" value="' . $childrens_point_sec_food_content_10 . '" /><br>';
    // 10つ目の食育 =================================================

    // 画像 ==========================================================
    for ($i = 0; $i <= 9; $i++) {
        $childrens_point_sec_food_img[] = get_post_meta($post->ID, 'childrens_point_sec_food_img_0' . $i, true);
    }
?>
    <table class="form-table">
        <?php for ($i = 0; $i <= 9; $i++) : ?>
            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_point_sec_food_img_0<?= $i ?>" name="childrens_point_sec_food_img_0<?= $i ?>" value="<?php echo $childrens_point_sec_food_img[$i] ? $childrens_point_sec_food_img[$i] : '' ?>">
                    <div id="image-wrapper_food<?= $i ?>">
                        <?php if ($childrens_point_sec_food_img[$i]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_point_sec_food_img[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_pf" name="media_button_pf" value="追加" id="media-button_food<?= $i ?>" />
                        <input type="button" class="button button-secondary media_remove_pf" name="media_remove_pf" value="削除" id="media-remove_food<?= $i ?>" />
                    </p>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
<?php
    // 画像 ==========================================================
}

function save_custom_fields_point_food($post_id)
{
    if (isset($_POST['childrens_point_sec_food_title'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_title', $_POST['childrens_point_sec_food_title']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_title');
    }

    if (isset($_POST['childrens_point_sec_food_text'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_text', $_POST['childrens_point_sec_food_text']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_text');
    }


    if (isset($_POST['childrens_point_sec_food_content_01'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_01', $_POST['childrens_point_sec_food_content_01']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_01');
    }
    if (isset($_POST['childrens_point_sec_food_content_02'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_02', $_POST['childrens_point_sec_food_content_02']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_02');
    }
    if (isset($_POST['childrens_point_sec_food_content_03'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_03', $_POST['childrens_point_sec_food_content_03']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_03');
    }
    if (isset($_POST['childrens_point_sec_food_content_04'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_04', $_POST['childrens_point_sec_food_content_04']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_04');
    }
    if (isset($_POST['childrens_point_sec_food_content_05'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_05', $_POST['childrens_point_sec_food_content_05']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_05');
    }
    if (isset($_POST['childrens_point_sec_food_content_06'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_06', $_POST['childrens_point_sec_food_content_06']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_06');
    }
    if (isset($_POST['childrens_point_sec_food_content_07'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_07', $_POST['childrens_point_sec_food_content_07']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_07');
    }
    if (isset($_POST['childrens_point_sec_food_content_08'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_08', $_POST['childrens_point_sec_food_content_08']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_08');
    }
    if (isset($_POST['childrens_point_sec_food_content_09'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_09', $_POST['childrens_point_sec_food_content_09']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_09');
    }
    if (isset($_POST['childrens_point_sec_food_content_10'])) {
        update_post_meta($post_id, 'childrens_point_sec_food_content_10', $_POST['childrens_point_sec_food_content_10']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_food_content_10');
    }
}
add_action('save_post', 'save_custom_fields_point_food');


// 食育セクションのカスタムフィールド設定 ==========================================================================================================


// その他の活動セクションのカスタムフィールド設定 ==========================================================================================================
function product_custom_fields_point_other()
{
    // タイトル =================================================
    global $post;
    $childrens_point_sec_other_activities_title_01 = get_post_meta(
        $post->ID,
        'childrens_point_sec_other_activities_title_01',
        true
    );
    echo '<label for="childrens_point_sec_other_activities_title_01">タイトル</label><br><input style="width:100%; type="text" name="childrens_point_sec_other_activities_title_01" value="' . $childrens_point_sec_other_activities_title_01 . '" /><br>';
    // タイトル =================================================


    // テキストエリア =================================================
    $childrens_point_sec_other_activities_text_01 = get_post_meta(
        $post->ID,
        'childrens_point_sec_other_activities_text_01',
        true
    );
    echo '<label for="childrens_point_sec_other_activities_text_01">テキスト</label><br><textarea style="width:100%; type="text" name="childrens_point_sec_other_activities_text_01" value="' . $childrens_point_sec_other_activities_text_01 . '" />' . $childrens_point_sec_other_activities_text_01 . '</textarea>';
    // テキストエリア =================================================

    for ($i = 0; $i <= 9; $i++) {
        ${"childrens_point_sec_other_activities_0" . $i} = get_post_meta(
            $post->ID,
            'childrens_point_sec_other_activities_0' . $i,
            true
        );
        echo '<label for="childrens_point_sec_other_activities_0' . $i . '">活動名</label><br><input style="width:100%; type="text" name="childrens_point_sec_other_activities_0' . $i . '" value="' . ${"childrens_point_sec_other_activities_0" . $i} . '" /><br>';

        $childrens_point_sec_other_img[] = get_post_meta($post->ID, 'childrens_point_sec_other_activities_img_0' . $i, true);
    }

    // 画像 ==========================================================
?>
    <table class="form-table">
        <?php for ($i = 0; $i <= 9; $i++) : ?>
            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_point_sec_other_activities_img_0<?= $i ?>" name="childrens_point_sec_other_activities_img_0<?= $i ?>" value="<?php echo $childrens_point_sec_other_img[$i] ? $childrens_point_sec_other_img[$i] : '' ?>">
                    <div id="image-wrapper_other<?= $i ?>">
                        <?php if ($childrens_point_sec_other_img[$i]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_point_sec_other_img[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_po" name="media_button_po" value="追加" id="media-button_other<?= $i ?>" />
                        <input type="button" class="button button-secondary media_remove_po" name="media_remove_po" value="削除" id="media-remove_other<?= $i ?>" />
                    </p>
                </td>
            </tr>
        <?php endfor ?>

    </table>
<?php
}




// その他の活動セクションのカスタムフィールド設定 ==========================================================================================================

//カスタムフィールドの追加　保育のこだわりページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★


function product_custom_fields_point_image()
{
    global $post;
    $product_image_name = array();
    $product_image_text = array();
    $product_image = array();

    // 3画像の格納
    $product_image_name[] = get_post_meta($post->ID, 'childrens_point_sec_feature_title_00', true);
    $product_image_text[] = get_post_meta($post->ID, 'childrens_point_sec_feature_text_00', true);
    for ($i = 0; $i < 3; $i++) {
        $product_image[] = get_post_meta($post->ID, 'childrens_point_sec_feature_img_00_0' . $i, true);
    }

?>
    <table class="form-table">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_point_sec_feature_img_00_0<?php echo $i; ?>" name="childrens_point_sec_feature_img_00_0<?php echo $i; ?>" value="<?php echo $product_image[$i] ? $product_image[$i] : '' ?>">
                    <div id="image-wrapper_0_0<?= $i ?>">
                        <?php if ($product_image[$i]) {
                            $product_thumb = wp_get_attachment_image_src($product_image[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_pi" name="media_button_pi" value="追加" id="media-button__0<?= $i ?>" />
                        <input type="button" class="button button-secondary media_remove_pi" name="media_remove_pi" value="削除" id="media-remove__0<?= $i ?>" />
                    </p>
                </td>
            </tr>
        <?php endfor; ?>
        <tr class="form-field">
            <th scope="row">保育理念タイトル1</th>
            <td><textarea name="childrens_point_sec_feature_title_00" value="<?php echo esc_html($product_image_name[0] ? $product_image_name[0] : '') ?>"><?php echo $product_image_name[0] ?></textarea></td>
        </tr>
        <tr class="form-field">
            <th scope="row">保育理念テキスト1</th>
            <td><textarea name="childrens_point_sec_feature_text_00" value="<?php echo esc_html($product_image_text[0] ? $product_image_text[0] : '') ?>"><?php echo $product_image_text[0] ?></textarea></td>
        </tr>
    </table>
<?php
}

function product_custom_fields_point_image1()
{
    global $post;
    $product_image_name = array();
    $product_image_text = array();
    $product_image = array();

    // 3画像の格納
    $product_image_name[] = get_post_meta($post->ID, 'childrens_point_sec_feature_title_01', true);
    $product_image_text[] = get_post_meta($post->ID, 'childrens_point_sec_feature_text_01', true);
    for ($i = 0; $i < 3; $i++) {
        $product_image[] = get_post_meta($post->ID, 'childrens_point_sec_feature_img_01_0' . $i, true);
    }

?>
    <table class="form-table">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_point_sec_feature_img_01_0<?php echo $i; ?>" name="childrens_point_sec_feature_img_01_0<?php echo $i; ?>" value="<?php echo $product_image[$i] ? $product_image[$i] : '' ?>">
                    <div id="image-wrapper_1_0<?= $i ?>">
                        <?php if ($product_image[$i]) {
                            $product_thumb = wp_get_attachment_image_src($product_image[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_pi1" name="media_button_pi" value="追加" id="media-button__0<?= $i ?>" />
                        <input type="button" class="button button-secondary media_remove_pi1" name="media_remove_pi" value="削除" id="media-remove__0<?= $i ?>" />
                    </p>
                </td>
            </tr>
        <?php endfor; ?>
        <tr class="form-field">
            <th scope="row">保育理念タイトル2</th>
            <td><textarea name="childrens_point_sec_feature_title_01" value="<?php echo esc_html($product_image_name[0] ? $product_image_name[0] : '') ?>"><?php echo $product_image_name[0] ?></textarea></td>
        </tr>
        <tr class="form-field">
            <th scope="row">保育理念テキスト2</th>
            <td><textarea name="childrens_point_sec_feature_text_01" value="<?php echo esc_html($product_image_text[0] ? $product_image_text[0] : '') ?>"><?php echo $product_image_text[0] ?></textarea></td>
        </tr>
    </table>
<?php
}

function product_custom_fields_point_image2()
{
    global $post;
    $product_image_name = array();
    $product_image_text = array();
    $product_image = array();

    // 3画像の格納
    $product_image_name[] = get_post_meta($post->ID, 'childrens_point_sec_feature_title_02', true);
    $product_image_text[] = get_post_meta($post->ID, 'childrens_point_sec_feature_text_02', true);
    for ($i = 0; $i < 3; $i++) {
        $product_image[] = get_post_meta($post->ID, 'childrens_point_sec_feature_img_02_0' . $i, true);
    }

?>
    <table class="form-table">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_point_sec_feature_img_02_0<?php echo $i; ?>" name="childrens_point_sec_feature_img_02_0<?php echo $i; ?>" value="<?php echo $product_image[$i] ? $product_image[$i] : '' ?>">
                    <div id="image-wrapper_2_0<?= $i ?>">
                        <?php if ($product_image[$i]) {
                            $product_thumb = wp_get_attachment_image_src($product_image[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_pi2" name="media_button_pi" value="追加" id="media-button__0<?= $i ?>" />
                        <input type="button" class="button button-secondary media_remove_pi2" name="media_remove_pi" value="削除" id="media-remove__0<?= $i ?>" />
                    </p>
                </td>
            </tr>
        <?php endfor; ?>
        <tr class="form-field">
            <th scope="row">保育理念タイトル3</th>
            <td><textarea name="childrens_point_sec_feature_title_02" value="<?php echo esc_html($product_image_name[0] ? $product_image_name[0] : '') ?>"><?php echo $product_image_name[0] ?></textarea></td>
        </tr>
        <tr class="form-field">
            <th scope="row">保育理念テキスト3</th>
            <td><textarea name="childrens_point_sec_feature_text_02" value="<?php echo esc_html($product_image_text[0] ? $product_image_text[0] : '') ?>"><?php echo $product_image_text[0] ?></textarea></td>
        </tr>
    </table>
<?php
}

function add_api_point()
{
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', "add_api_point");



function add_script_point()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_pi').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_point_sec_feature_img_00_0' + index).val(attachment.id);
                                $('#image-wrapper_0_0' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_pi').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_point_sec_feature_img_00_0' + index).val('');
                        $('#image-wrapper_0_0' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script_point');

function add_script_point1()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_pi1').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_point_sec_feature_img_01_0' + index).val(attachment.id);
                                $('#image-wrapper_1_0' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_pi1').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_point_sec_feature_img_01_0' + index).val('');
                        $('#image-wrapper_1_0' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script_point1');

function add_script_point2()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_pi2').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_point_sec_feature_img_02_0' + index).val(attachment.id);
                                $('#image-wrapper_2_0' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_pi2').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_point_sec_feature_img_02_0' + index).val('');
                        $('#image-wrapper_2_0' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script_point2');


function save_products_point($post_id)
{
    // 画像
    for ($i = 0; $i < 3; $i++) {
        if (isset($_POST['childrens_point_sec_feature_title_0' . $i])) {
            if ($_POST['childrens_point_sec_feature_title_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_point_sec_feature_title_0' . $i, $_POST['childrens_point_sec_feature_title_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_point_sec_feature_title_0' . $i);
            }
        }
        if (isset($_POST['childrens_point_sec_feature_text_0' . $i])) {
            if ($_POST['childrens_point_sec_feature_text_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_point_sec_feature_text_0' . $i, $_POST['childrens_point_sec_feature_text_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_point_sec_feature_text_0' . $i);
            }
        }
        // 画像の保存
        for ($j = 0; $j < 3; $j++) {
            if (isset($_POST['childrens_point_sec_feature_img_0' . $i . '_0' . $j])) {
                if ($_POST['childrens_point_sec_feature_img_0' . $i . '_0' . $j] !== '') {
                    update_post_meta($post_id, 'childrens_point_sec_feature_img_0' . $i . '_0' . $j, $_POST['childrens_point_sec_feature_img_0' . $i . '_0' . $j]);
                } else {
                    delete_post_meta($post_id, 'childrens_point_sec_feature_img_0' . $i . '_0' . $j);
                }
            }
        }
    }
}
add_action('save_post', 'save_products_point');
?>
<?php
function add_script_point_food()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_pf').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_point_sec_food_img_0' + index).val(attachment.id);
                                $('#image-wrapper_food' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_pf').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_point_sec_food_img_0' + index).val('');
                        $('#image-wrapper_food' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script_point_food');

function add_script_point_other()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_po').each(function(index) {
                    $(this).on("click", function() {
                        index = index
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_point_sec_other_activities_img_0' + index).val(attachment.id);
                                $('#image-wrapper_other' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_po').each(function(index) {
                    index = index
                    $(this).on("click", function() {
                        $('#childrens_point_sec_other_activities_img_0' + index).val('');
                        $('#image-wrapper_other' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script_point_other');


function save_products_point_food($post_id)
{
    // 画像の保存
    for ($i = 0; $i <= 9; $i++) {
        if (isset($_POST['childrens_point_sec_food_img_0' . $i])) {
            if ($_POST['childrens_point_sec_food_img_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_point_sec_food_img_0' . $i, $_POST['childrens_point_sec_food_img_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_point_sec_food_img_0' . $i);
            }
        }
    }
}
add_action('save_post', 'save_products_point_food');


function save_custom_fields_point_other($post_id)
{
    if (isset($_POST['childrens_point_sec_other_activities_title_01'])) {
        update_post_meta($post_id, 'childrens_point_sec_other_activities_title_01', $_POST['childrens_point_sec_other_activities_title_01']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_other_activities_title_01');
    }

    if (isset($_POST['childrens_point_sec_other_activities_text_01'])) {
        update_post_meta($post_id, 'childrens_point_sec_other_activities_text_01', $_POST['childrens_point_sec_other_activities_text_01']);
    } else {
        delete_post_meta($post_id, 'childrens_point_sec_other_activities_text_01');
    }
    for ($i = 0; $i <= 9; $i++) {
        if (isset($_POST['childrens_point_sec_other_activities_0' . $i])) {
            update_post_meta($post_id, 'childrens_point_sec_other_activities_0' . $i, $_POST['childrens_point_sec_other_activities_0' . $i]);
        } else {
            delete_post_meta($post_id, 'childrens_point_sec_other_activities_0' . $i);
        }
    }
    for ($i = 0; $i <= 9; $i++) {
        if (isset($_POST['childrens_point_sec_other_activities_img_0' . $i])) {
            if ($_POST['childrens_point_sec_other_activities_img_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_point_sec_other_activities_img_0' . $i, $_POST['childrens_point_sec_other_activities_img_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_point_sec_other_activities_img_0' . $i);
            }
        }
    }
}
add_action('save_post', 'save_custom_fields_point_other');
?>