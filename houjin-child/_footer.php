<?php
if (WP_DEBUG && current_user_can('manage_options')) {
  get_template_part('debug/config-data');
}

wp_footer();
$theme_options = get_option('theme_option_name'); // Array of All Options
?>
<footer id="section-houjin-contact">
  <div class="houjin-footer">
    <nav class="footer-nav pc">
      <ul class="footer-nav__area">
        <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-news">お知らせ</a>
        </li>
        <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-message">メッセージ</a>
        </li>
        <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-facility">運営施設</a>
        </li>
        <!-- <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-support">子育て支援事業</a>
        </li>
        <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-activity">地域活動</a>
        </li> -->
        <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-history">沿革</a>
        </li>
        <li class="n-txt_b white">
          <a href="<?= home_url() ?>/#section-houjin-info">法人情報</a>
        </li>
      </ul>
    </nav>
    <div class="footer-info">
      <div class="page-width">
        <div class="footer-re">
          <div class="footer-info-area">
            <div class="footer-info-area__left">
              <img class="logo" src="<?= get_theme_mod('houjin_footer_logo'); ?>" width="504px" height="108px" alt="ロゴ">
              <p class="n-txt_m"><?= ($theme_options['op_2']) ?></p>
              <p class="address n-txt_m"><?= $theme_options['op_3'] ?>　<span class="sp-break n-txt_m">ゆたか認定こども園内</span></p>
              <p class="tel-area"><?php get_template_part('images/svg/icon-tel'); ?><a class="tel" href="tel:<?= $theme_options['op_4'] ?>"><?= $theme_options['op_4'] ?></a></p>
              <div class="reception-time">
                <p class="n-txt_m">受付時間
                  <span class="pc">　</span><span class="sp-break n-txt_m">平日<?= $theme_options['op_16'] ?></span>
                </p>
                <p class="reception-time__holiday n-txt_m">（定休日：<?= $theme_options['op_18'] ?>）</p>
              </div>
              <a href="<?= home_url() ?>/#section-houjin-contact" class="btn btn-txt">お問い合わせ<?php get_template_part('images/svg/icon-link'); ?></a>
              <a href="https://toyotsujidou.com/recruit/" class="btn btn-txt" target="_blank" rel="noopener">採用情報<?php get_template_part('images/svg/icon-link'); ?></a>
            </div>
            <div class="footer-info-area__right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.868747374491!2d136.54164591553368!3d34.78407938625518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600474edddd8e1f5%3A0x25e080e2a51de514!2z44CSNTEwLTAzMDUg5LiJ6YeN55yM5rSl5biC5rKz6Iq455S65Lit5Yil5L-d77yR77yW77yV77yW!5e0!3m2!1sja!2sjp!4v1641539781152!5m2!1sja!2sjp" width="504" height="488" style="border:0;" allowfullscreen="" loading="lazy" title="三重県津市河芸町中別保1656ゆたか認定こども園内"></iframe>
            </div>
            <div id="page-top">
              <p class="small-n-txt_b brown">トップへ<br>戻る</p>
              <div class="flower&grass">
                <?php get_template_part('images/svg/flower-top'); ?>
                <?php get_template_part('images/svg/grass-top'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="other-nav">
          <a class="brown-border-button n-txt_b brown alert-btn" href="##">在職者の方へ</a>
          <a class="brown-border-button n-txt_b brown" href="https://toyotsujidou.com/retired/" target="_blank" rel="noopener">退職者の方へ</a>
        </div>
        <p class="copy-write small-n-txt">© 2021　社会福祉法人 豊津児童福祉会</p>
      </div>
    </div>
  </div>
</footer>
</body>

</html>