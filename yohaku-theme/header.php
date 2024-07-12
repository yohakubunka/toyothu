<?php
// Internet Explorer で開かれた場合はedgeへ開くように通知を出す
$edge_open = true;

if (isset($_COOKIE['view_ie'])) {
  if ($edge_open && $_COOKIE['view_ie'] != 'on') {
    if (get_browser_name() == "ie") { ?>
      <script>
        MoveCheck();

        function MoveCheck() {
          if (confirm("ご利用のウェブページはInternet Explorerでの表示を推奨していません。Microsoft Edgeで表示しますか？")) {
            var url = location.href;
            url = "microsoft-edge:" + url;
            window.location.href = url;
          } else {
            alert("Internet Explorerでの表示を続行します。");
          }
        }
      </script>
<?php
      // ページ推移先で通知が出続けないようにクッキーにInternet Explorerで閲覧したフラグを残す
      // クッキーの有効時間 : 1時間
      setcookie('view_ie', 'on', time() + 60 * 60);
    }
  }
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php seo_description(); ?>">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- lottie cdn -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script> -->


  <script>
    (function(d) {
      var config = {
          kitId: 'qfe0qrf',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>

</head>


<body class="body_<?php echo get_page_slug() ?>">
  <?php

  if (WP_DEBUG && current_user_can('manage_options')) {
    include_once('debug/variables.php');
    global $debug_var;
    $debug_var = new DebugVariables();
  }
  ?>