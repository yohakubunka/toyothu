<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php seo_description(); ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/ja.js"></script>
  <link rel="icon" type="image/x-icon" href="<?= get_theme_file_uri() ?>/images/favicon/favicon.ico">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!-- GoogleFont -->
  <link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <!-- lottie cdn -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script> -->

  <script>
    function submitStop(e) {

      if (!e) var e = window.event;
      if (e.keyCode == 13)
        return false;
    }
    window.onload = function() {
      var list = document.getElementsByTagName("input");
      for (var i = 0; i < list.length; i++) {
        if (list[i].type == 'email' || list[i].type == 'password' || list[i].type == 'text' || list[i].type == 'number') {
          list[i].onkeypress = function(event) {
            return submitStop(event);
          };
        }
      }
    }
  </script>

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
<header>
  <div class="header">
    <div class="hamburger">
      <span><?php get_template_part('images/svg/humb01'); ?></span>
      <span><?php get_template_part('images/svg/humb02'); ?></span>
      <span><?php get_template_part('images/svg/humb03'); ?></span>
    </div>
  </div>
  <nav class="globalMenuSp">
    <div class="overflow">
      <ul class="bg-brown">
        <!-- <div class="nav-flex">
          <li class="head-link">
            <a class="facility-button" href="<?= home_url() ?>/#section-houjin-facility">
              <?php get_template_part('images/svg/en'); ?>
              <p class="n-txt_b white">運営施設</p>
            </a>
          </li>
          <li class="head-link">
            <a class="contact-button" href="<?= home_url() ?>/#section-houjin-contact">
              <?php get_template_part('images/svg/contact'); ?>
              <p class="n-txt_b white">お問い合わせ</p>
            </a>
          </li>
        </div>
        <li class="head-link n-txt_b white">
          <a class="left-line" href="<?= home_url() ?>/#section-houjin-news">お知らせ</a>
        </li>
        <li class="head-link n-txt_b white">
          <a class="left-line" href="<?= home_url() ?>/#section-houjin-message">メッセージ</a>
        </li>
        <li class="head-link n-txt_b white">
          <a class="left-line" href="<?= home_url() ?>/#section-houjin-support">子育て支援事業</a>
        </li>
        <li class="head-link n-txt_b white">
          <a class="left-line" href="<?= home_url() ?>/#section-houjin-activity">地域活動</a>
        </li>
        <li class="head-link n-txt_b white">
          <a class="left-line" href="<?= home_url() ?>/#section-houjin-history">沿革</a>
        </li>
        <li class="head-link n-txt_b white">
          <a class="left-line" href="<?= home_url() ?>/#section-houjin-info">法人情報</a>
        </li> -->
      </ul>
      <div class="nav-logo"></div>
      <ul class="bg-black">
        <li class="head-link n-txt_b white">
          <a class="left-line" href="https://toyotsujidou.com/recruit/" target="_blank" rel="noopener">採用情報</a>
        </li>
        <li class="head-link n-txt_b white">
          <a class="left-line alert-btn" href="##">在職者の方へ</a>
        </li>
        <!-- <li class="head-link n-txt_b white">
          <a class="left-line" href="https://toyotsujidou.com/retired/" target="_blank" rel="noopener">退職者の方へ</a>
        </li> -->
      </ul>
    </div>
  </nav>
</header>

<body class="body_retired">
  <?php

  if (WP_DEBUG && current_user_can('manage_options')) {
    include_once('debug/variables.php');
    global $debug_var;
    $debug_var = new DebugVariables();
  }
  ?>