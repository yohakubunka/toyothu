<?php

wp_footer();
$theme_options = get_option('theme_option_name'); // Array of All Options
?>


<footer>
    <nav class="footer-nav pc">
        <ul class="footer-nav__area">
            <li><a href="<?= home_url() ?>/#section-recruit-news">お知らせ</a></li>
            <li><a href="<?= home_url() ?>/#section-recruit-message">メッセージ</a></li>
            <li><a href="<?= home_url() ?>/#section-recruit-keyword">キーワード</a></li>
            <li><a href="<?= home_url() ?>/#section-recruit-reason">働きやすい理由</a></li>
            <li><a href="<?= home_url() ?>/#section-recruit-day-flow">一日の流れ</a></li>
            <li><a href="<?= home_url() ?>/#section-recruit-staff">先輩の声</a></li>
            <li><a href="<?= home_url() ?>/#section-recruit-status">募集要項</a></li>
        </ul>
    </nav>
    <div class="footer-info">
        <div class="page-width">
            <div class="footer-re">
                <div class="footer-info-area">
                    <div class="footer-info-area__left">
                        <img class="logo" src="<?php echo get_theme_mod('recruit_logo_footer'); ?>" alt="ロゴ">
                        <p><?php echo ($theme_options['op_2']) ?></p>
                        <p class="address"><?php echo $theme_options['op_3'] ?></p>
                        <p class="tel-area"><?php get_template_part('images/svg/icon-tel'); ?><a class="tel" href="tel:<?php echo $theme_options['op_4'] ?>"><?php echo $theme_options['op_4'] ?></a></p>
                        <div class="reception-time">
                            <p>受付時間<span class="pc">　</span><span class="sp-break">平日<?php echo $theme_options['op_16'] ?></span></p>
                            <p class="reception-time__holiday">（定休日：<?php echo $theme_options['op_18'] ?>）</p>
                        </div>
                        <a href="https://toyotsujidou.com/#section-houjin-contact" target="_blank" class="black-border-button">お問い合わせ<?php get_template_part('images/svg/icon-link'); ?></a>
                        <a href="https://toyotsujidou.com/" class="black-border-button">豊津児童福祉会HP<?php get_template_part('images/svg/icon-link'); ?></a>
                    </div>
                    <div class="footer-info-area__right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.868747374503!2d136.54164591559558!3d34.78407938625487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600474edddd8e1f5%3A0x25e080e2a51de514!2z44CSNTEwLTAzMDUg5LiJ6YeN55yM5rSl5biC5rKz6Iq455S65Lit5Yil5L-d77yR77yW77yV77yW!5e0!3m2!1sja!2sjp!4v1634782639552!5m2!1sja!2sjp" width="504" height="488" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div id="page-top">
                        <p>トップへ<br>戻る</p>
                        <?php get_template_part('images/svg/pagetop'); ?>
                    </div>
                </div>
            </div>

            <div class="other-nav">
                <a class="cream-border-button" href="https://toyotsujidou.com/">豊津児童福祉会</a>
                <a class="cream-border-button" href="https://toyotsujidou.com/#section-houjin-facility">施設一覧</a>
                <a class="cream-border-button" href="https://toyotsujidou.com/retired/">退職者の方へ</a>
            </div>
            <p class="copy-write">© 2021　社会福祉法人 豊津児童福祉会</p>
        </div>

    </div>

</footer>


</body>

</html>