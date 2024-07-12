<?php
wp_footer();
$theme_options = get_option('theme_option_name'); // Array of All Options
?>


<footer>
    <nav class="footer-nav pc">
        <ul class="footer-nav__area">
            <li><a href="<?= home_url() ?>/#section-olive-news">お知らせ</a></li>
            <li><a href="<?= home_url() ?>/#section-olive-content">療養内容</a></li>
            <li><a href="<?= home_url() ?>/#section-olive-use">ご利用にあたって</a></li>
            <li><a href="<?= home_url() ?>/#section-olive-option">施設概要</a></li>
            <li><a href="<?= home_url() ?>/#section-olive-contact">お問い合わせ</a></li>
        </ul>
    </nav>
    <div class="footer-info">
        <div class="page-width">
            <div class="footer-re">
                <div class="footer-info-area">
                    <div class="footer-info-area__left">
                        <img class="logo" src="<?php echo get_theme_mod('olive_footer_logo'); ?>" alt="フッターロゴ">
                        <p class="address-code">〒<?php echo ($theme_options['op_2']) ?></p>
                        <p class="address-info"><?php echo $theme_options['op_3'] ?></p>
                        <p class="tel-area"><?php get_template_part('images/svg/icon-tel'); ?><a class="tel" href="tel:<?php echo $theme_options['op_4'] ?>"><?php echo $theme_options['op_4'] ?></a></p>
                        <div class="reception-time">
                            <p>受付時間<span class="pc"><br></span><span class="sp-break"><?php echo $theme_options['op_16'] ?></span></p>
                            <p><span class="pc"></span><span class="sp-break"><?php echo $theme_options['op_17'] ?></span></p>
                            <p class="reception-time__holiday"><?php echo $theme_options['op_18'] ?></p>
                        </div>
                        <a href="<?= home_url() ?>/#section-olive-contact" class="black-border-button">お問い合わせ<?php get_template_part('images/svg/icon-link'); ?></a>
                    </div>
                    <div class="footer-info-area__right">
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3276.8548188262175!2d136.543591!3d34.78443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60047599c1ca5fb3%3A0xb1a98dc0337dc513!2z44Kq44Oq44O844OW44Gu5pyoVE9ZT1RTVQ!5e0!3m2!1sja!2sjp!4v1704772087782!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <a class="cream-border-button" href="https://toyotsujidou.com/recruitment/" target="_blank">採用情報</a>
            </div>
            <p class="copy-write">© 2021　社会福祉法人 豊津児童福祉会</p>
        </div>

    </div>

</footer>


</body>

</html>