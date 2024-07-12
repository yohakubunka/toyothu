<?php

//カスタムフィールドの追加　園での生活ページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

function add_custom_fields_life()
{
    if (get_site_group() === 'childrens') {
        $get_page_id_about = get_page_by_path("life");
        $get_page_id_about = $get_page_id_about->ID;
        $post_id = '';
        if (isset($_GET['post']) || isset($_POST['post_ID'])) {
            $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
            if ($post_id == $get_page_id_about) {
                // 基本方針
                add_meta_box(
                    'custom_setting_life_content', //ID
                    '保育内容', //タイトル
                    'insert_custom_fields_life_content', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );

                // 一日の流れ
                add_meta_box(
                    'custom_setting_life_flow', //ID
                    '一日の流れ(3～5歳児)', //タイトル
                    'insert_custom_fields_life_flow', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
                add_meta_box(
                    'custom_setting_life_flow1', //ID
                    '一日の流れ(0～2歳児)', //タイトル
                    'insert_custom_fields_life_flow1', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );

                // 年間行事　注釈文
                add_meta_box(
                    'custom_setting_life_event', //ID
                    '年間行事注釈文', //タイトル
                    'insert_custom_fields_life_event', //編集画面セクションにHTML出力する関数
                    'page',
                    'normal' //編集画面セクションが表示される部分
                );
            }
        }
    }
}
add_action('admin_menu', 'add_custom_fields_life');


function insert_custom_fields_life_content()
{

    global $post;
    for ($i = 0; $i < 2; $i++) {
        $childrens_life_sec_content_title[] = get_post_meta($post->ID, 'childrens_life_sec_content_title_0' . $i, true);
        $childrens_life_sec_content_subtitle[] = get_post_meta($post->ID, 'childrens_life_sec_content_subtitle_0' . $i, true);
        $childrens_life_sec_content_img[] = get_post_meta($post->ID, 'childrens_life_sec_content_img_0' . $i, true);
        $childrens_life_sec_content_text[] = get_post_meta($post->ID, 'childrens_life_sec_content_text_0' . $i, true);
    }
?>
    <table class="form-table">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <tr class="form-field">
                <th scope="row">保育内容サブタイトル<?php echo $i + 1 ?></th>
                <td><textarea name="childrens_life_sec_content_title_0<?php echo $i ?>" value="<?php echo esc_html($childrens_life_sec_content_title[$i] ? $childrens_life_sec_content_title[$i] : '') ?>"><?= $childrens_life_sec_content_title[$i]  ?></textarea></td>

            </tr>
            <tr class="form-field">
                <th scope="row">保育内容タイトル<?php echo $i + 1 ?></th>
                <td><textarea name="childrens_life_sec_content_subtitle_0<?php echo $i ?>" value="<?php echo esc_html($childrens_life_sec_content_subtitle[$i] ? $childrens_life_sec_content_subtitle[$i] : '') ?>"><?= $childrens_life_sec_content_subtitle[$i]  ?></textarea></td>
            </tr>

            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_life_sec_content_img_0<?php echo $i; ?>" name="childrens_life_sec_content_img_0<?php echo $i; ?>" value="<?php echo $childrens_life_sec_content_img[$i] ? $childrens_life_sec_content_img[$i] : '' ?>">
                    <div id="image-wrapper_<?php echo $i ?>">
                        <?php if ($childrens_life_sec_content_img[$i]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_life_sec_content_img[$i], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button" name="media_button" value="追加" id="media-button_<?php echo $i ?>" />
                        <input type="button" class="button button-secondary media_remove" name="media_remove" value="削除" id="media-remove_<?php echo $i ?>" />
                    </p>
                </td>
            </tr>
            <tr class="form-field">
                <th scope="row">保育内容テキスト<?php echo $i + 1 ?></th>
                <td><textarea name="childrens_life_sec_content_text_0<?php echo $i ?>" value="<?php echo esc_html($childrens_life_sec_content_text[$i] ? $childrens_life_sec_content_text[$i] : '') ?>"><?= $childrens_life_sec_content_text[$i]  ?></textarea></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php
}

function add_script_life()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_life_sec_content_img_0' + index).val(attachment.id);
                                $('#image-wrapper_' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
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
                        $('#childrens_life_sec_content_img_0' + index).val('');
                        $('#image-wrapper_' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script_life');

function save_custom_fields_life_content($post_id)
{
    // 画像
    for ($i = 0; $i < 2; $i++) {
        if (isset($_POST['childrens_life_sec_content_title_0' . $i])) {
            if ($_POST['childrens_life_sec_content_title_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_content_title_0' . $i, $_POST['childrens_life_sec_content_title_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_content_title_0' . $i);
            }
        }
        if (isset($_POST['childrens_life_sec_content_subtitle_0' . $i])) {
            if ($_POST['childrens_life_sec_content_subtitle_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_content_subtitle_0' . $i, $_POST['childrens_life_sec_content_subtitle_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_content_subtitle_0' . $i);
            }
        }
        if (isset($_POST['childrens_life_sec_content_text_0' . $i])) {
            if ($_POST['childrens_life_sec_content_text_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_content_text_0' . $i, $_POST['childrens_life_sec_content_text_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_content_text_0' . $i);
            }
        }
        // 画像の保存
        if (isset($_POST['childrens_life_sec_content_img_0' . $i])) {
            if ($_POST['childrens_life_sec_content_img_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_content_img_0' . $i, $_POST['childrens_life_sec_content_img_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_content_img_0' . $i);
            }
        }
    }
}
add_action('save_post', 'save_custom_fields_life_content');


// 保育内容セクションのカスタムフィールド設定 ==========================================================================================================


// 一日の流れセクションのカスタムフィールド設定 ==========================================================================================================
function insert_custom_fields_life_flow()
{

    global $post;
    $childrens_life_sec_flow_age[] = get_post_meta($post->ID, 'childrens_life_sec_flow_age_00', true);
    $childrens_life_sec_flow_caution[] = get_post_meta($post->ID, 'childrens_life_sec_flow_caution_00', true);
    for ($i = 0; $i <= 9; $i++) {
        $childrens_life_sec_flow_time[] = get_post_meta($post->ID, 'childrens_life_sec_flow_time_00_0' . $i, true);
        $childrens_life_sec_flow_content[] = get_post_meta($post->ID, 'childrens_life_sec_flow_content_00_0' . $i, true);
        $childrens_life_sec_flow_text[] = get_post_meta($post->ID, 'childrens_life_sec_flow_text_00_0' . $i, true);
        $childrens_life_sec_flow_img[] = get_post_meta($post->ID, 'childrens_life_sec_flow_img_00_0' . $i, true);
    }
?>
    <table class="form-table">
        <tr class="form-field">
            <th scope="row">一日の流れ年齢</th>
            <td><input type="text" name="childrens_life_sec_flow_age_00" value="<?php echo esc_html($childrens_life_sec_flow_age[0] ? $childrens_life_sec_flow_age[0] : '') ?>"></td>
        </tr>

        <tr class="form-field">
            <th scope="row">一日の流れ注釈文</th>
            <td><input type="text" name="childrens_life_sec_flow_caution_00" value="<?php echo esc_html($childrens_life_sec_flow_caution[0] ? $childrens_life_sec_flow_caution[0] : '') ?>"></td>
        </tr>

        <?php for ($j = 0; $j <= 9; $j++) : ?>

            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_life_sec_flow_img_00_0<?= $j ?>" name="childrens_life_sec_flow_img_00_0<?= $j ?>" value="<?php echo $childrens_life_sec_flow_img[$j] ? $childrens_life_sec_flow_img[$j] : '' ?>">
                    <div id="image-wrapper_flow_0<?= $j ?>">
                        <?php if ($childrens_life_sec_flow_img[$j]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_life_sec_flow_img[$j], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_flow" name="media_button_flow" value="追加" id="media-button_flow_0" />
                        <input type="button" class="button button-secondary media_remove_flow" name="media_remove_flow" value="削除" id="media-remove_flow_0" />
                    </p>
                </td>
            </tr>

            <tr class="form-field">
                <th scope="row">一日の流れ時間</th>
                <td><input type="text" name="childrens_life_sec_flow_time_00_0<?php echo $j ?>" value="<?php echo esc_html($childrens_life_sec_flow_time[$j] ? $childrens_life_sec_flow_time[$j] : '') ?>"></td>
            </tr>
            <tr class="form-field">
                <th scope="row">一日の流れタイトル</th>
                <td><input type="text" name="childrens_life_sec_flow_content_00_0<?php echo $j ?>" value="<?php echo esc_html($childrens_life_sec_flow_content[$j] ? $childrens_life_sec_flow_content[$j] : '') ?>"></td>
            </tr>
            <tr class="form-field">
                <th scope="row">一日の流れ内容</th>
                <td><input type="text" name="childrens_life_sec_flow_text_00_0<?php echo $j ?>" value="<?php echo esc_html($childrens_life_sec_flow_text[$j] ? $childrens_life_sec_flow_text[$j] : '') ?>"></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php
}


function insert_custom_fields_life_flow1()
{

    global $post;
    $childrens_life_sec_flow_age[] = get_post_meta($post->ID, 'childrens_life_sec_flow_age_01', true);
    $childrens_life_sec_flow_caution[] = get_post_meta($post->ID, 'childrens_life_sec_flow_caution_01', true);
    for ($i = 0; $i <= 9; $i++) {
        $childrens_life_sec_flow_time[] = get_post_meta($post->ID, 'childrens_life_sec_flow_time_01_0' . $i, true);
        $childrens_life_sec_flow_content[] = get_post_meta($post->ID, 'childrens_life_sec_flow_content_01_0' . $i, true);
        $childrens_life_sec_flow_text[] = get_post_meta($post->ID, 'childrens_life_sec_flow_text_01_0' . $i, true);
        $childrens_life_sec_flow_img[] = get_post_meta($post->ID, 'childrens_life_sec_flow_img_01_0' . $i, true);
    }
?>
    <table class="form-table">
        <tr class="form-field">
            <th scope="row">一日の流れ年齢</th>
            <td><input type="text" name="childrens_life_sec_flow_age_01" value="<?php echo esc_html($childrens_life_sec_flow_age[0] ? $childrens_life_sec_flow_age[0] : '') ?>"></td>
        </tr>

        <tr class="form-field">
            <th scope="row">一日の流れ注釈文</th>
            <td><input type="text" name="childrens_life_sec_flow_caution_01" value="<?php echo esc_html($childrens_life_sec_flow_caution[0] ? $childrens_life_sec_flow_caution[0] : '') ?>"></td>
        </tr>

        <?php for ($j = 0; $j <= 9; $j++) : ?>

            <tr class="form-field">
                <th scope="row">画像</th>
                <td>
                    <input type="hidden" id="childrens_life_sec_flow_img_01_0<?= $j ?>" name="childrens_life_sec_flow_img_01_0<?= $j ?>" value="<?php echo $childrens_life_sec_flow_img[$j] ? $childrens_life_sec_flow_img[$j] : '' ?>">
                    <div id="image-wrapper_flow_1<?= $j ?>">
                        <?php if ($childrens_life_sec_flow_img[$j]) {
                            $product_thumb = wp_get_attachment_image_src($childrens_life_sec_flow_img[$j], 'thumbnail');
                        ?>
                            <img src="<?php echo $product_thumb[0] ?>" width="<?php echo $product_thumb[1]; ?>" height="<?php echo $product_thumb[2]; ?>" class="custom_media_image">
                        <?php } ?>
                    </div>
                    <p><input type="button" class="button button-secondary media_button_flow1" name="media_button_flow1" value="追加" id="media-button_flow_1" />
                        <input type="button" class="button button-secondary media_remove_flow1" name="media_remove_flow1" value="削除" id="media-remove_flow_1" />
                    </p>
                </td>
            </tr>

            <tr class="form-field">
                <th scope="row">一日の流れ時間</th>
                <td><input type="text" name="childrens_life_sec_flow_time_01_0<?php echo $j ?>" value="<?php echo esc_html($childrens_life_sec_flow_time[$j] ? $childrens_life_sec_flow_time[$j] : '') ?>"></td>
            </tr>
            <tr class="form-field">
                <th scope="row">一日の流れタイトル</th>
                <td><input type="text" name="childrens_life_sec_flow_content_01_0<?php echo $j ?>" value="<?php echo esc_html($childrens_life_sec_flow_content[$j] ? $childrens_life_sec_flow_content[$j] : '') ?>"></td>
            </tr>
            <tr class="form-field">
                <th scope="row">一日の流れ内容</th>
                <td><input type="text" name="childrens_life_sec_flow_text_01_0<?php echo $j ?>" value="<?php echo esc_html($childrens_life_sec_flow_text[$j] ? $childrens_life_sec_flow_text[$j] : '') ?>"></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php
}


function add_script__flow()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_flow').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_life_sec_flow_img_00_0' + index).val(attachment.id);
                                console.log(index);
                                $('#image-wrapper_flow_0' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_flow').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_life_sec_flow_img_00_0' + index).val('');
                        $('#image-wrapper_flow_0' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script__flow');

function add_script__flow1()
{
?>
    <script>
        jQuery(document).ready(
            function($) {
                let _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                // 画像の登録
                $('.media_button_flow1').each(function(index) {
                    $(this).on("click", function() {
                        let send_attachment_bkp = wp.media.editor.send.attachment;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {
                                $('#childrens_life_sec_flow_img_01_0' + index).val(attachment.id);
                                console.log(index);
                                $('#image-wrapper_flow_1' + index).html('<img class="custom_media_image" src="' + attachment.sizes.thumbnail.url + '" height="' + attachment.sizes.thumbnail.height + '" width="' + attachment.sizes.thumbnail.width + '">');
                            } else {
                                return _orig_send_attachment.apply($(this).id, [props, attachment]);
                            }
                        }
                        wp.media.editor.open($(this));
                        return false;
                    });
                });

                // 削除
                $('.media_remove_flow1').each(function(index) {
                    $(this).on("click", function() {
                        $('#childrens_life_sec_flow_img_01_0' + index).val('');
                        $('#image-wrapper_flow_1' + index + ' .custom_media_image').remove();
                    });
                });
            });
    </script>
<?php
}
add_action('admin_footer', 'add_script__flow1');




function save_custom_fields_life_flow($post_id)
{
    // 画像
    for ($i = 0; $i < 2; $i++) {
        if (isset($_POST['childrens_life_sec_flow_age_0' . $i])) {
            if ($_POST['childrens_life_sec_flow_age_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_flow_age_0' . $i, $_POST['childrens_life_sec_flow_age_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_flow_age_0' . $i);
            }
        }
        if (isset($_POST['childrens_life_sec_flow_caution_0' . $i])) {
            if ($_POST['childrens_life_sec_flow_caution_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_flow_caution_0' . $i, $_POST['childrens_life_sec_flow_caution_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_flow_caution_0' . $i);
            }
        }
        // 画像の保存
        if (isset($_POST['childrens_life_sec_flow_img_0' . $i])) {
            if ($_POST['childrens_life_sec_flow_img_0' . $i] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_flow_img_0' . $i, $_POST['childrens_life_sec_flow_img_0' . $i]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_flow_img_0' . $i);
            }
        }
        for ($j = 0; $j <= 9; $j++) {
            if ($_POST['childrens_life_sec_flow_time_0' . $i . '_0' . $j] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_flow_time_0' . $i . '_0' . $j, $_POST['childrens_life_sec_flow_time_0' . $i  . '_0' . $j]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_flow_time_0' . $i . '_0' . $j);
            }
            if ($_POST['childrens_life_sec_flow_content_0' . $i . '_0' . $j] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_flow_content_0' . $i  . '_0' . $j, $_POST['childrens_life_sec_flow_content_0' . $i  . '_0' . $j]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_flow_content_0' . $i  . '_0' . $j);
            }

            if ($_POST['childrens_life_sec_flow_text_0' . $i . '_0' . $j] !== '') {
                update_post_meta($post_id, 'childrens_life_sec_flow_text_0' . $i  . '_0' . $j, $_POST['childrens_life_sec_flow_text_0' . $i  . '_0' . $j]);
            } else {
                delete_post_meta($post_id, 'childrens_life_sec_flow_text_0' . $i  . '_0' . $j);
            }

            if (isset($_POST['childrens_life_sec_flow_img_0' . $i . '_0' . $j])) {
                if ($_POST['childrens_life_sec_flow_img_0' . $i . '_0' . $j] !== '') {
                    update_post_meta($post_id, 'childrens_life_sec_flow_img_0' . $i . '_0' . $j, $_POST['childrens_life_sec_flow_img_0' . $i . '_0' . $j]);
                } else {
                    delete_post_meta($post_id, 'childrens_life_sec_flow_img_0' . $i . '_0' . $j);
                }
            }
        }
    }
}
add_action('save_post', 'save_custom_fields_life_flow');


// 年間行事セクションのカスタムフィールド設定　============================================================================================================
function insert_custom_fields_life_event()
{
    global $post;
    $childrens_life_sec_event_caution_01 = get_post_meta(
        $post->ID,
        'childrens_life_sec_event_caution_01',
        true
    );

    $childrens_life_sec_event_content_text = get_post_meta(
        $post->ID,
        'childrens_life_sec_event_content_text',
        true
    );
    echo '<label for="childrens_life_sec_event_content_text">年間行事下のテキスト</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_event_content_text" value="' . $childrens_life_sec_event_content_text . '" />' . $childrens_life_sec_event_content_text . '</textarea>';

    echo '<label for="childrens_life_sec_event_caution_01">年間行事の注釈文</label><br><textarea style="width:100%; type="text" name="childrens_life_sec_event_caution_01" value="' . $childrens_life_sec_event_caution_01 . '" />' . $childrens_life_sec_event_caution_01 . '</textarea>';
}
function save_custom_fields_life_event($post_id)
{
    if (isset($_POST['childrens_life_sec_event_caution_01'])) {
        update_post_meta($post_id, 'childrens_life_sec_event_caution_01', $_POST['childrens_life_sec_event_caution_01']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_event_caution_01');
    }

    if (isset($_POST['childrens_life_sec_event_content_text'])) {
        update_post_meta($post_id, 'childrens_life_sec_event_content_text', $_POST['childrens_life_sec_event_content_text']);
    } else {
        delete_post_meta($post_id, 'childrens_life_sec_event_content_text');
    }
}
add_action('save_post', 'save_custom_fields_life_event');
// 年間行事セクションのカスタムフィールド設定　============================================================================================================
// 一日の流れセクションのカスタムフィールド設定 ==========================================================================================================


//カスタムフィールドの追加　園での生活ページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
