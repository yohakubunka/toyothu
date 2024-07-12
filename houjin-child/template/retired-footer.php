<?php
if (WP_DEBUG && current_user_can('manage_options')) {
  get_template_part('debug/config-data');
}

wp_footer();
$theme_options = get_option('theme_option_name'); // Array of All Options
?>
<footer id="section-houjin-contact">
  <div class="houjin-footer">
    <div class="home">
      <a href="https://toyotsujidou.com/">
        <?php get_template_part('images/svg/icon_home'); ?>
        ホームへ戻る
      </a>
    </div>
    <div class="footer-info">
      <div class="page-width">
        <div class="footer-re">
          <div class="footer-info-area">
            <div class="footer-info-area__left">
              <img class="logo" src="<?= get_theme_mod('houjin_footer_logo'); ?>" width="504px" height="108px" alt="ロゴ">
              <p class="n-txt_m"><?= ($theme_options['op_2']) ?></p>
              <p class="address n-txt_m"><?= $theme_options['op_3'] ?></p>
              <p class="tel-area"><?php get_template_part('images/svg/icon-tel'); ?><a class="tel" href="tel:<?= $theme_options['op_4'] ?>"><?= $theme_options['op_4'] ?></a></p>
              <div class="reception-time">
                <p class="n-txt_m">受付時間
                  <span class="pc">　</span><span class="sp-break n-txt_m">平日<?= $theme_options['op_16'] ?></span>
                </p>
                <p class="reception-time__holiday n-txt_m">（定休日：<?= $theme_options['op_18'] ?>）</p>
              </div>
              <a href="mailto:toyotsu.info@toyotsujidou.com" class="btn btn-txt">お問い合わせ<?php get_template_part('images/svg/icon-link'); ?></a>
            </div>
            <div class="footer-info-area__right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d204.8042711031534!2d136.5437043!3d34.7840897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600474edde776cb5%3A0x4f2f054f2de75410!2z44KG44Gf44GL6KqN5a6a44GT44Gp44KC5ZyS!5e0!3m2!1sja!2sjp!4v1658204574075!5m2!1sja!2sjp" width="504" height="488" style="border:0;" allowfullscreen="" loading="lazy" title="三重県津市河芸町中別保1656ゆたか認定こども園"></iframe>
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
          <a class="brown-border-button n-txt_b brown" href="https://toyotsujidou.com/">豊津児童福祉会</a>
          <a class="brown-border-button n-txt_b brown" href="https://toyotsujidou.com/#section-houjin-facility">施設一覧</a>
        </div>
        <p class="copy-write small-n-txt">© <?= date('Y') ?>　社会福祉法人 豊津児童福祉会</p>
      </div>
    </div>
  </div>
</footer>
</body>

</html>