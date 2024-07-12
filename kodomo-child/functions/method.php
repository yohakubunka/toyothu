<?php
// ページスラッグ取得 ================================================
function get_page_slug()
{
  global $post;
  $slug = $post->post_name;
  if (is_home() || is_front_page()) {
    $slug = "index";
  }
  if (is_date()) {
    $slug = "date";
  }
  if (is_archive()) {
    $slug = "archive";
  }
  if (is_404()) {
    $slug = "404";
  }
  if (is_category()) {
    $slug = "category";
  }
  if (is_tax()) {
    $slug = "taxonomy";
  }
  if (is_tag()) {
    $slug = "tag";
  }
  if (is_single()) {
    $slug = "single";
  }
  if (is_admin()) {
    $slug = "admin";
  }

  return $slug;
}

// 和暦取得 ================================================
function get_wareki($year, $format = false, $gannen = false)
{
  $gengoList = [
    ['name' => '令和', 'name_short' => 'R', 'year' => 2019],  // 2019-05-01,
    ['name' => '平成', 'name_short' => 'H', 'year' => 1989],  // 1989-01-08,
    ['name' => '昭和', 'name_short' => 'S', 'year' => 1926], // 1926-12-25'
    ['name' => '大正', 'name_short' => 'T', 'year' => 1912], // 1912-07-30
    ['name' => '明治', 'name_short' => 'M', 'year' => 1868], // 1868-01-25
  ];

  $gengo = array();
  foreach ($gengoList as $g) {
    if ($g['year'] <= $year) {
      $gengo = $g;
      break;
    }
  }

  $year = ($year - $gengo['year']) + 1;
  if ($year == 1 && $gannen) {
    $year = '元';
  }

  $out = $gengo['name'] . $year . '年';
  if ($format) {
    $out = $gengo['name_short'] . $year . '年';
  }
  return $out;
}

// 使用しているテンプレートファイル名取得 =======================================================

function get_template_failename()
{
  global $template; // テンプレートファイルのパスを取得
  $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
  return $temp_name;
}

function get_option_value($op_num)
{
  $theme_options = get_option('theme_option_name'); // Array of All Options
  $out = $theme_options['op_' . $op_num];
  return $out;
}



function get_browser_name()
{
  // 判定するのに小文字にする
  $browser = strtolower($_SERVER['HTTP_USER_AGENT']);

  // ユーザーエージェントの情報を基に判定
  if (strstr($browser, 'edge')) {
    $browser_name = "edge";
  } elseif (strstr($browser, 'trident') || strstr($browser, 'msie')) {
    $browser_name = "ie";
  } elseif (strstr($browser, 'chrome')) {
    $browser_name = "chrome";
  } elseif (strstr($browser, 'firefox')) {
    $browser_name = "firefox";
  } elseif (strstr($browser, 'safari')) {
    $browser_name = "safari";
  } elseif (strstr($browser, 'opera')) {
    $browser_name = "opera";
  } else {
    $browser_name = "other";
  }

  return $browser_name;
}


function debug($value, $mode = false, $lang = 'php')
{
  if (!$mode) {
    echo '<pre class="prettyprint lang-' . $lang . '">';
    print_r($value);
    echo '</pre>';
  }
}
?>

<?php
// 画像が決まってないsample =====================================================================
function dummy_img($width = "100", $height = "200", $bg = "27709b", $color = "ffffff")
{
  $url = "https://tools.arashichang.com/";
  $url = $url . $width . "x" . $height . "/" . $bg . "/" . $color;
  return $url;
}
?>

<?php
function my_theme_customize_register($wp_customize)
{
  $wp_customize->add_section(
    'main-v',
    [
      'title'           => 'メインビジュアル',
      'priority'        => 1,
      'description' => 'メインビジュアルを設定してください。',
    ]
  );
  $wp_customize->add_setting('main-visual');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main-image', array(
    'label' => 'メインビジュアル', //設定項目のタイトル
    'section' => 'main-v', //追加するセクションのID
    'settings' => 'main-visual', //追加する設定項目のID
    'description' => 'メインビジュアルを設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('main-text');
  $wp_customize->add_control(
    //コントロールID
    "main-text",
    [
      // add_settingで設定したID
      'settings'    => 'main-text',
      // カスタマイザー画面で表示するラベル名
      'label'       => 'メインビジュアル中央のテキスト',
      // 表示するセクションを指定
      'section'     => 'main-v',
      // フォームの種類を指定
      'type'        => 'textarea'
    ]
  );


  $wp_customize->add_section(
    'front-content',
    [
      'title'           => 'トップページコンテンツ画像',
      'priority'        => 2,
      'description' => 'トップページコンテンツ画像を設定してください。',
    ]
  );
  $wp_customize->add_setting('front-content-about');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-about', array(
    'label' => 'ABOUT画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-about', //追加する設定項目のID
    'description' => 'ABOUT画像を設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('front-content-service');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-service', array(
    'label' => 'SERVICE画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-service', //追加する設定項目のID
    'description' => 'SERVICE画像を設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('front-content-pharmacy');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-pharmacy', array(
    'label' => 'PHARMACY画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-pharmacy', //追加する設定項目のID
    'description' => 'PHARMACY画像を設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('front-content-voice');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-voice', array(
    'label' => 'VOICE画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-voice', //追加する設定項目のID
    'description' => 'VOICE画像を設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('front-content-career');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-career', array(
    'label' => 'CAREER PLAN画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-career', //追加する設定項目のID
    'description' => 'CAREER PLAN画像を設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('front-content-ict');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-ict', array(
    'label' => 'ICT画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-ict', //追加する設定項目のID
    'description' => 'ICT画像を設定してください', //設定項目の説明
  )));

  $wp_customize->add_setting('front-content-recruit');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-recruit', array(
    'label' => 'RECRUITE画像', //設定項目のタイトル
    'section' => 'front-content', //追加するセクションのID
    'settings' => 'front-content-recruit', //追加する設定項目のID
    'description' => 'RECRUITE画像を設定してください', //設定項目の説明
  )));
}
add_action('customize_register', 'my_theme_customize_register');
?>


<?php
/**
 * ページネーション出力関数 =============================================================================================
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 * $page_dots : 後ろに...を付けるか
 * $page_dots_before : 前に...を付けるか
 * $numbering : 数字を入れるか 
 * $all_numbers : 数字をすべて入れるか
 */
function pagination(
  $pages = false,
  $paged = false,
  $range = 1,
  $show_only = false,
  $page_dots = false,
  $page_dots_before = false,
  $numbering = true,
  $all_numbers = false
) {
  if ($pages) {
    $pages = (int) $pages;    //float型で渡ってくるので明示的に int型 へ
  } else {
    //global $pages;
  }
  if ($paged) {
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように
  } else {
    //global $paged;
  }

  //表示テキスト
  //最初のページに戻るボタン　画像にも変更できます。
  $text_first   = "最初";
  //最後のページに進むボタン
  $text_last    = "最後";

  if ($show_only && $pages === 1) {
    // １ページのみで表示設定が true の時
    echo '<div class="pagination"><span class="current pager">1</span></div>';
    return;
  }

  if ($pages === 1) return;    // １ページのみで表示設定もない場合

  if (1 !== $pages) {
    //２ページ以上の時
    echo '<div class="pagination"><span class="page_num">Page ', $paged, ' of ', $pages, '</span>';
    // if ($paged > $range + 1) {
    //   // 「最初へ」 の表示
    //   echo '<a href="', get_pagenum_link(1), '" class="first">', $text_first, '</a>';
    // }
    if ($paged > 1) {
      // 「前へ」 の表示
      echo '<a href="', get_pagenum_link($paged - 1), '" class="prev">', get_template_part('/images/svg/page-prev'), '</a>';
    }
    // 前に...の表示
    if ($page_dots_before == true && $paged != 1  && $paged >= $range + 1 && $paged != $range + 1) {
      echo  "<p class='pagenation_dots'>...</p>";
    }
    for ($i = 1; $i <= $pages; $i++) {

      if ($i <= $paged + 2 && $i >= $paged - 1 && $numbering && $all_numbers == false) {
        // $paged +- $range 以内であればページ番号を出力
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
      //ページ番号をすべて表示
      if ($numbering && $all_numbers) {
        $page_dots = false;
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
    }
    // 後ろに...の表示
    if ($page_dots && $pages - $paged >= $range + 1) {
      echo  "<p class='pagenation_dots'>...</p>";
    }
    if ($paged < $pages) {
      // 「次へ」 の表示
      echo '<a href="', get_pagenum_link($paged + 1), '" class="next">', get_template_part('/images/svg/page-next'), '</a>';
    }

    // if ($paged + $range < $pages) {
    //   // 「最後へ」 の表示
    //   echo '<a href="', get_pagenum_link($pages), '" class="last">', $text_last, '</a>';
    // }
    echo '</div>';
  }
}
/**
 * ページネーション出力関数 =============================================================================================
 */

?>
