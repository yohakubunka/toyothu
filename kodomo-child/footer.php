<?php
wp_footer();
$theme_options = get_option('theme_option_name'); ?>
<footer>
  <?php get_template_part('template-parts/return-home'); ?>
  <div class="footer">
    <div class="footer__menu">
      <ul>
        <li><a href="<?= home_url() ?>/news">お知らせ</a></li>
        <li><a href="<?= home_url() ?>/about">保育について</a></li>
        <li><a href="<?= home_url() ?>/point">保育のこだわり</a></li>
        <li><a href="<?= home_url() ?>/life">園での生活</a></li>
        <li><a href="<?= home_url() ?>/guide">入園案内</a></li>
        <li><a href="<?= home_url() ?>/childrens_download">書類ダウンロード</a></li>
      </ul>
    </div>
    <div class="footer__inner">
      <a class="footer__inner--return" href="#header">
        <p>トップへ戻る</p>
        <?php if (get_site_multi() == "泉の杜保育園" || get_site_multi() == "世田谷１丁目ゆたか園") : ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/top_return02.svg" />
        <?php else : ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/top_return.svg" />
        <?php endif; ?>
      </a>
      <div class="footer__inner--box">
        <div class="flex">
          <div class="flex-left">
            <div class="footerlogo">
              <img src="<?php echo get_theme_mod("childrens_footer_logo"); ?>" />
            </div>
            <div class="footertext">
              <p><span>〒<?= $theme_options['op_2'] ?></span><?= $theme_options['op_3'] ?></p>
              <a class="footertext__tel" href="tel:<?= preg_replace('/[^0-9]/', '', $theme_options['op_4']); ?>">
                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/footerte_icon.svg" /></span>
                <p><?= $theme_options['op_4'] ?></p>
              </a>
              <div class="footertext__time">
                <p>受付時間</p>
                <div class="footertext__time--box">
                  <p><?= $theme_options['op_16'] ?></p>
                  <p><?= $theme_options['op_17'] ?></p>
                </div>
              </div>
            </div>
            <div class="footerbutton">
              <div class="button">
                <a href="<?= home_url() ?>/contact">お問い合わせ<?php get_template_part('image/SVG/icon/button_icon') ?></a>
              </div>
              <div class="button">
                <a target="_blank" class="<?php if (get_theme_mod('childrens_top_sec_link_02') == "") echo "preparation" ?>" href="<?php echo (get_theme_mod('childrens_top_sec_link_02') != "") ? get_theme_mod('childrens_top_sec_link_02') : '##'; ?>" class="preparation">各種予約<?php get_template_part('image/SVG/icon/linkarrow_icon') ?></a>
              </div>
            </div>
          </div>
          <div class="flex-right">
            <?php if (get_site_multi() == "ゆたか認定こども園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3276.8527079250744!2d136.54273708046586!3d34.78448313598992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600474edde776cb5%3A0x4f2f054f2de75410!2z44KG44Gf44GL6KqN5a6a44GT44Gp44KC5ZyS!5e0!3m2!1sja!2sjp!4v1658990322000!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "泉の杜保育園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13045.229847006378!2d136.90784622006834!3d35.17388861183219!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb7981b3d8ca7d190!2z5rOJ44Gu5p2c5L-d6IKy5ZyS!5e0!3m2!1sja!2sjp!4v1660010899161!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "世田谷１丁目ゆたか園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12969.762077578245!2d139.6497635!3d35.6415168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a5a1fb8436ae6b3!2z5LiW55Sw6LC3MeS4geebruOChuOBn-OBi-Wckg!5e0!3m2!1sja!2sjp!4v1660011002594!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "多気の杜こども園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d822.0879261782487!2d136.5516363!3d34.4939669!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600440dfae7f671f%3A0x14233c2a9e4b92ae!2z5aSa5rCX44Gu5p2c44GT44Gp44KC5ZyS!5e0!3m2!1sja!2sjp!4v1660011096560!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "こどもの杜ゆたか園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7796.610375135391!2d136.4881491398389!3d34.75380784193572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60040b6c498b503f%3A0x9b2c545c0d470f34!2z6KqN5a6a44GT44Gp44KC5ZySIOOBk-OBqeOCguOBruadnOOChuOBn-OBi-Wckg!5e0!3m2!1sja!2sjp!4v1658990178874!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "みらいの森ゆたか園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13104.19988982573!2d136.5179157!3d34.8046846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5d4d62bee898071!2z6KqN5a6a44GT44Gp44KC5ZyS44G_44KJ44GE44Gu5qOu44KG44Gf44GL5ZyS!5e0!3m2!1sja!2sjp!4v1658990200599!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "杜の街ゆたか園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1947.9294874932743!2d136.53702648424542!3d34.80559349942227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60047517a792b1b7%3A0x539c57351f5f063c!2z6KqN5a6a44GT44Gp44KC5ZyS5p2c44Gu6KGX44KG44Gf44GL5ZyS!5e0!3m2!1sja!2sjp!4v1658990219028!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "明和ゆたか園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.351170446484!2d136.620085!3d34.544663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004424d21be0aa7%3A0x9f1ec399b37d6e82!2z6KqN5a6a44GT44Gp44KC5ZySIOaYjuWSjOOChuOBn-OBi-Wckg!5e0!3m2!1sja!2sjp!4v1658990255671!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "第２明和ゆたか園") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8044.804498295779!2d136.6298364641597!3d34.55019740905845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600443b296879d3b%3A0x6cb508e2f0b05fce!2z6KqN5a6a44GT44Gp44KC5ZySIOesrDLmmI7lkozjgobjgZ_jgYvlnJI!5e0!3m2!1sja!2sjp!4v1658990275983!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif (get_site_multi() == "斎宮Babyroom") : ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13146.626872229539!2d136.6077369!3d34.53692425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600443cc9f940583%3A0x8cfe6ebc23ad94a7!2z44CSNTE1LTAzMjUg5LiJ6YeN55yM5aSa5rCX6YOh5piO5ZKM55S656u55bed!5e0!3m2!1sja!2sjp!4v1681282536413!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="footer__inner--banner">
        <ul>
          <li><a href="https://toyotsujidou.com/" target="_blank">豊津児童福祉会</a></li>
          <li><a href="https://toyotsujidou.com/#section-houjin-facility" class="" target="_blank">施設一覧</a></li>
          <li><a href="https://toyotsujidou.com/recruit/" target="_blank">採用情報</a></li>
        </ul>
      </div>
    </div>
    <p class="copyright">© 2021　社会福祉法人 豊津児童福祉会</p>
  </div>
</footer>