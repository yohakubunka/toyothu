<?php
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
// 画像が決まってないsample =====================================================================
function dummy_img($width = "100", $height = "200", $bg = "27709b", $color = "ffffff")
{
  $url = "https://tools.arashichang.com/";
  $url = $url . $width . "x" . $height . "/" . $bg . "/" . $color;
  return $url;
}
function get_site_multi()
{
  global $current_blog;
  $blog_id = $current_blog->blog_id;
  if ($blog_id == 1) {
    return "親";
  } else if ($blog_id == 2) {
    return "ゆたか認定こども園";
  } else if ($blog_id == 3) {
    return "明和ゆたか園";
  } else if ($blog_id == 4) {
    return "杜の街ゆたか園";
  } else if ($blog_id == 5) {
    return "みらいの森ゆたか園";
  } else if ($blog_id == 6) {
    return "こどもの杜ゆたか園";
  } else if ($blog_id == 7) {
    return "泉の杜保育園";
  } else if ($blog_id == 8) {
    return "ゆたか学童クラブ";
  } else if ($blog_id == 9) {
    return "みらいの森学童クラブ";
  } else if ($blog_id == 10) {
    return "多気の杜こども園";
  } else if ($blog_id == 11) {
    return "斎宮Babyroom";
  } else if ($blog_id == 12) {
    return "第２明和ゆたか園";
  } else if ($blog_id == 13) {
    return "世田谷１丁目ゆたか園";
  } else if ($blog_id == 14) {
    return "豊津児童福祉会法人ページ";
  } else if ($blog_id == 15) {
    return "豊津宇児童福祉会求人ページ";
  } else if ($blog_id == 16) {
    return "豊津児童福祉会退職者向けページ";
  } else if ($blog_id == 17) {
    return "オリーブの木";
  }
}

function get_site_group()
{
  $theme_options = get_option('theme_option_name'); // Array of All Options
  if (!empty($theme_options)) {
    if ($theme_options['op_19'] == 5 || $theme_options['op_19'] == 6 || $theme_options['op_19'] == 7 || $theme_options['op_19'] == 8 || $theme_options['op_19'] == 9 || $theme_options['op_19'] == 10 || $theme_options['op_19'] == 13 || $theme_options['op_19'] == 3 || $theme_options['op_19'] == 2 || $theme_options['op_19'] == 4) {
      return "childrens";
    } else if ($theme_options['op_19'] == 11 || $theme_options['op_19'] == 12) {
      return "afterschool";
    } else if ($theme_options['op_19'] == 14) {
      return "houjin";
    } else if ($theme_options['op_19'] == 15) {
      return "recruit";
    } else if ($theme_options['op_19'] == 17) {
      return "olive";
    }
  }
}
