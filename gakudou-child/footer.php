<?php

wp_footer();
$theme_options = get_option('theme_option_name'); // Array of All Options
?>


<footer>
    <nav class="footer-nav pc">
        <ul class="footer-nav__area">
            <li><a href="<?= home_url() ?>/#section-afterschool-news">お知らせ</a></li>
            <li><a href="<?= home_url() ?>/#section-subject-message">対象児童</a></li>
            <li><a href="<?= home_url() ?>/#section-afterschool-price">ご利用料金</a></li>
            <li><a href="<?= home_url() ?>/#section-afterschool-option">施設概要</a></li>
            <!-- <li><a href="<?= home_url() ?>/#section-afterschool-download">書類ダウンロード</a></li> -->
        </ul>
    </nav>
    <div class="footer-info">
        <div class="page-width">
            <div class="footer-re">
                <div class="footer-info-area">
                    <div class="footer-info-area__left">
                        <img class="logo" src="<?php echo get_theme_mod('afterschool_footer_logo'); ?>" alt="ロゴ">
                        <p class="address-code"><?php echo ($theme_options['op_2']) ?></p>
                        <p class="address-info"><?php echo $theme_options['op_3'] ?></p>
                        <!-- <p class="address"></p> -->
                        <p class="tel-area"><?php get_template_part('images/svg/icon-tel'); ?><a class="tel" href="tel:<?php echo $theme_options['op_4'] ?>"><?php echo $theme_options['op_4'] ?></a><a class="tel-info" href="">（直通）</a></p>
                        <div class="reception-time">
                            <p>受付時間<span class="pc"><br></span><span class="sp-break"><?php echo $theme_options['op_16'] ?></span></p>
                            <p><span class="pc"></span><span class="sp-break"><?php echo $theme_options['op_17'] ?></span></p>
                            <p class="reception-time__holiday"><?php echo $theme_options['op_18'] ?></p>
                        </div>
                        <a href="<?= home_url() ?>/#section-afterschool-contact" class="black-border-button">お問い合わせ<?php get_template_part('images/svg/icon-link'); ?></a>
                        <!-- <a href="##" class="black-border-button coming-soon">豊津児童福祉会HP<?php get_template_part('images/svg/icon-link'); ?></a> -->
                    </div>
                    <div class="footer-info-area__right">
                        <?php if (get_site_multi() == 'みらいの森学童クラブ') : ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2316.5143767133954!2d136.5169254529505!3d34.80478331217051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60047544327c8793%3A0x8e4b181390f51fe4!2z44G_44KJ44GE44Gu5qOu5a2m56ul44Kv44Op44OW!5e0!3m2!1sja!2sjp!4v1658986781899!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php elseif (get_site_multi() == 'ゆたか学童クラブ') : ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13107.45371002437!2d136.5439406!3d34.7842133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756f0fd92f0140a!2z44KG44Gf44GL5a2m56ul44Kv44Op44OW!5e0!3m2!1sja!2sjp!4v1658986180124!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php endif; ?>

                        <!-- <iframe src="<?= $theme_options['op_20']; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                    <div id="page-top">
                        <p>トップへ戻る</p>
                        <?php get_template_part('images/svg/pagetop'); ?>
                    </div>
                </div>
            </div>

            <div class="other-nav">
                <a class="cream-border-button" href="https://toyotsujidou.com/" target="_blank">豊津児童福祉会</a>
                <a class="cream-border-button" href="https://toyotsujidou.com/#section-houjin-facility" target="_blank">施設一覧</a>
                <a class="cream-border-button" href="https://toyotsujidou.com/recruit/" target="_blank">採用情報</a>
            </div>
            <p class="copy-write">© 2021　社会福祉法人 豊津児童福祉会</p>
        </div>

    </div>

</footer>


</body>

</html>