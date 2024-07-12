<!-- <?php

        //カスタムフィールドの追加　園についてページ ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

        function add_custom_fields_download()
        {
            if (get_site_group() === 'childrens') {
                add_meta_box(
                    'custom_setting_guide_download', //ID
                    '書類ダウンロード', //タイトル
                    'insert_custom_fields_guide_download', //編集画面セクションにHTML出力する関数
                    'childrens_download',
                    'normal' //編集画面セクションが表示される部分
                );
            }
        }
        add_action('admin_menu', 'add_custom_fields_download');

        // 保育料と諸費用セクションのカスタムフィールド設定　============================================================================================================
        // 画像を表示するために必要な関数
        function custom_metabox_edit_form_tag_download()
        {
            echo ' enctype="multipart/form-data"';
        }
        add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag_download');


        // 書類ダウンロードセクションのカスタムフィールド設定　============================================================================================================
        // カスタムフィールドの入力エリア
        function insert_custom_fields_guide_download()
        {
            global $post;
            // テキストエリア =================================================
            $childrens_download_sec_text = get_post_meta(
                $post->ID,
                'childrens_download_sec_text',
                true
            );
            echo '<label for="childrens_download_sec_text">書類説明</label><br><textarea style="width:100%; type="text" name="childrens_download_sec_text" value="' . $childrens_download_sec_text . '" />' . $childrens_download_sec_text . '</textarea>';
            // テキストエリア =================================================

            // アイコン =================================================
            $childrens_download_sec_file = get_post_meta($post->ID, 'childrens_download_sec_file', true);
            echo '<p>書類をアップロードして下さい</p><input type="file" style="width:100%;" name="childrens_download_sec_file" accept="application/pdf/*" /><br>';

            if (isset($childrens_download_sec_file) && strlen($childrens_download_sec_file) > 0) {
                echo '<img style="width: 200px;display: block;margin: 1em;" src="' . get_template_directory_uri() . '/images/file.png">';
            }
            // アイコン =================================================



        }
        //カスタムフィールド保存処理
        function save_custom_fields_guide_download($post_id)
        {

            if (isset($_POST['childrens_download_sec_text'],)) {
                update_post_meta($post_id, 'childrens_download_sec_text', $_POST['childrens_download_sec_text']);
            } else {
                delete_post_meta($post_id, 'childrens_download_sec_text');
            }

            if (isset($_FILES['childrens_download_sec_file']) && $_FILES["childrens_download_sec_file"]["size"] !== 0) {
                $file_name = basename($_FILES['childrens_download_sec_file']['name']);
                $file_name = trim($file_name);
                $file_name = str_replace(" ", "-", $file_name);
                $wp_upload_dir = wp_upload_dir(); //現在のuploadディクレトリのパスとURLを入れた配列
                $upload_file = $_FILES['childrens_download_sec_file']['tmp_name'];
                $upload_path = $wp_upload_dir['path'] . '/' . $file_name; //uploadsディレクトリ以下などに配置する場合は$wp_upload_dir['basedir']を利用する
                //画像ファイルをuploadディクレトリに移動させる
                move_uploaded_file($upload_file, $upload_path);
                $file_type = $_FILES['childrens_download_sec_file']['type'];
                //正規表現で拡張子なしのスラッグ名を生成
                $slug_name = preg_replace('/\.[^.]+$/', '', basename($upload_path));
                if (file_exists($upload_path)) {
                    //保存に成功してファイルが存在する場合は、wp_postsテーブルなどに情報を追加
                    $attachment = array(
                        'guid' => $wp_upload_dir['url'] . '/' . basename($file_name),
                        'post_mime_type' => $file_type,
                        //'post_title' => $slug_name,
                        'post_content' => '',
                        'post_status' => 'inherit'
                    );
                    //添付ファイルを追加
                    $attach_id = wp_insert_attachment($attachment, $upload_path, $post_id);
                    if (!function_exists('wp_generate_attachment_metadata')) {
                        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                    }
                    //添付ファイルのメタデータを生成し、wp_postsテーブルに情報を保存
                    $attach_data = wp_generate_attachment_metadata($attach_id, $upload_path);
                    wp_update_attachment_metadata($attach_id, $attach_data);
                    //wp_postmetaテーブルに画像のattachment_id(wp_postsテーブルのレコードのID)を保存
                    update_post_meta($post_id, 'childrens_download_sec_file', $attach_id);
                } else {
                    //保存失敗
                    echo '画像保存に失敗しました';
                    exit;
                }
            }
        }
        add_action('save_post', 'save_custom_fields_guide_download');
// 書類ダウンロードセクションのカスタムフィールド設定　============================================================================================================ -->
