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
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="google-site-verification" content="qd2rEyxkltkkRlExREBSS6jc8PKFF6hbopBBQM9eAGk" />
  <link rel="icon" type="image/x-icon" href="<?= get_theme_file_uri() ?>/image/png/common/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&family=Yusei+Magic&display=swap" rel="stylesheet">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<!-- get template directory uri for Javascript -->
<script>
</script>
<body class="body_<?php echo get_page_slug() ?>">
<?php get_template_part( 'template-parts/loading' ); ?>

  <?php

  if (WP_DEBUG && current_user_can('manage_options')) {
    include_once('debug/variables.php');
    global $debug_var;
    $debug_var = new DebugVariables();
  }
  ?>
  <header id="header">
    <?php if (  is_front_page() ||  is_home() ) : ?>
      <?php get_template_part( 'template-parts/front_header' ); ?>
    <?php else:?>
      <?php get_template_part( 'template-parts/header-inner' ); ?>
    <?php endif;?>    
    <?php get_template_part( 'template-parts/hamburger-menu' ); ?>
  </header>
  <?php get_template_part( 'template-parts/follow-menu' ); ?>