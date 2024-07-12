<?php get_header(); ?>
<?php if (get_site_multi() === 'ゆたか学童クラブ') {
    get_template_part('template/gakudo_loadanimation');
} elseif (get_site_multi() === 'みらいの森学童クラブ') {
    get_template_part('template/gakudo_loadanimation_mirai');
};
?>


<main class="wrap">

    <div class="mainvisual">
        <div class="recruit-child-mv recruit-child-mv-pc">
            <?php if (get_theme_mod('afterschool_mainvisual_01') && !get_theme_mod('afterschool_mainvisual_01') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_02') && !get_theme_mod('afterschool_mainvisual_02') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_03') && !get_theme_mod('afterschool_mainvisual_03') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_04') && !get_theme_mod('afterschool_mainvisual_04') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_05') && !get_theme_mod('afterschool_mainvisual_05') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>

        <div class="recruit-child-mv recruit-child-mv-sp">
            <?php if (get_theme_mod('afterschool_mainvisual_sp_01') && !get_theme_mod('afterschool_mainvisual_sp_01') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_sp_01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_sp_02') && !get_theme_mod('afterschool_mainvisual_sp_02') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_sp_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_sp_03') && !get_theme_mod('afterschool_mainvisual_sp_03') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_sp_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_sp_04') && !get_theme_mod('afterschool_mainvisual_sp_04') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_sp_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('afterschool_mainvisual_sp_05') && !get_theme_mod('afterschool_mainvisual_sp_05') == "") : ?>
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_sp_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>
        <div class="logo-main">
            <img src="<?php echo get_theme_mod('afterschool_mainvisual_logo'); ?>" alt="みらいの森学童クラブロゴ">
        </div>
        <div class="logo-sub">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cacth.svg" alt="みらいの森学童クラブスローガン">
            <p class="logo-text"><?php echo nl2br(get_theme_mod('afterschool_mainvisual_text')); ?>
        </div>
    </div>


    <section id="section-afterschool-news" class="cream-back">
        <div class="page-width">
            <div class="double-line-head nomal gakudo-title">
                <h2>お知らせ</h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
            </div>
            <div class="afterschool-news status1">
                <div class="afterschool-news__area">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <article class="news-item">
                        <div class="date-category">
                            <p class="date-category__date"><?php echo get_the_date('Y/m/d'); ?></p>
                            <?php $category = get_the_category(); ?>
                            <p class="date-category__category"><?= $category[0]->cat_name; ?></p>
                        </div>
                        <p class="news-item__title"><?= get_the_title(); ?></p>
                        <p class="news-item__content"><?= get_the_content(); ?></p>
                    </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p>記事がありません。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-subject-message" class="border-back">
        <div class="flow-back">
            <div class="page-width">
                <div class="double-line-head nomal gakudo-title">
                    <h2>対象児童</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>
                <div class="subject-message">
                    <p class="subject-message__title pc strong">
                        <?php echo nl2br(get_theme_mod('afterschool_top_sec_subject_title')); ?></p>
                    <p class="subject-message__title sp strong">
                        <?php echo get_theme_mod('afterschool_top_sec_subject_title'); ?></p>

                    <p class="subject-message__text pc strong">
                        <?php echo nl2br(get_theme_mod('afterschool_top_sec_subject_caution')); ?></p>
                    <p class="subject-message__text sp strong">
                        <?php echo get_theme_mod('afterschool_top_sec_subject_caution'); ?></p>
                </div>
                <div class="subject">
                    <div class="subject-text">
                        <div class="subject-text_item">
                            <div class="subject-text_p">
                                <p><?php echo get_theme_mod('afterschool_top_sec_subject_text_01'); ?></p>
                            </div>
                        </div>
                        <div class="subject-text_item">
                            <div class="subject-text_p">
                                <p><?php echo get_theme_mod('afterschool_top_sec_subject_text_02'); ?></p>
                            </div>
                        </div>
                        <div class="subject-text_item">
                            <div class="subject-text_p">
                                <p><?php echo get_theme_mod('afterschool_top_sec_subject_text_03'); ?></p>
                            </div>
                        </div>
                        <div class="subject-text_item">
                            <div class="subject-text_p">
                                <p><?php echo get_theme_mod('afterschool_top_sec_subject_text_04'); ?></p>
                            </div>
                        </div>
                        <div class="subject-text_item">
                            <div class="subject-text_p">
                                <p><?php echo get_theme_mod('afterschool_top_sec_subject_text_05'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="subject-img strong">
                        <img src="<?php echo get_theme_mod('afterschool_top_sec_subject_img'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="section-afterschool-price" class="cream-back">
        <div class="price-back">
            <div class="page-width">
                <div class="double-line-head nomal gakudo-title">
                    <h2>ご利用料金</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>
                <div class="price">
                    <div class="price-title">
                        <p><?php echo get_theme_mod('afterschool_top_sec_price_title_01'); ?></p>
                    </div>
                    <div class="price-info">
                        <?php if (get_theme_mod('afterschool_top_sec_price_period_01') != "" && get_theme_mod('afterschool_top_sec_price_time_01') != "" && get_theme_mod('afterschool_top_sec_price_price_01')) : ?>
                        <div class="price-item">
                            <div class="item-circle1">

                            </div>
                            <div class="item-circle2">

                            </div>
                            <div class="item-circle3">

                            </div>
                            <div class="item-circle4">

                            </div>
                            <p class="price-item__name">
                                <?php echo get_theme_mod('afterschool_top_sec_price_period_01'); ?></p>
                            <p class="price-item__time">
                                <?php echo get_theme_mod('afterschool_top_sec_price_time_01'); ?></p>
                            <p class="price-item__price">
                                <?php echo get_theme_mod('afterschool_top_sec_price_price_01'); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (get_theme_mod('afterschool_top_sec_price_period_02') != "" && get_theme_mod('afterschool_top_sec_price_time_02') != "" && get_theme_mod('afterschool_top_sec_price_price_02')) : ?>
                        <div class="price-item">
                            <div class="item-circle1">

                            </div>
                            <div class="item-circle2">

                            </div>
                            <div class="item-circle3">

                            </div>
                            <div class="item-circle4">

                            </div>
                            <p class="price-item__name">
                                <?php echo get_theme_mod('afterschool_top_sec_price_period_02'); ?></p>
                            <p class="price-item__time">
                                <?php echo get_theme_mod('afterschool_top_sec_price_time_02'); ?></p>
                            <p class="price-item__price">
                                <?php echo get_theme_mod('afterschool_top_sec_price_price_02'); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (get_theme_mod('afterschool_top_sec_price_period_03') != "" && get_theme_mod('afterschool_top_sec_price_time_03') != "" && get_theme_mod('afterschool_top_sec_price_price_03')) : ?>
                        <div class="price-item">
                            <div class="item-circle1">

                            </div>
                            <div class="item-circle2">

                            </div>
                            <div class="item-circle3">

                            </div>
                            <div class="item-circle4">
                            </div>
                            <p class="price-item__name">
                                <?php echo get_theme_mod('afterschool_top_sec_price_period_03'); ?></p>
                            <p class="price-item__time">
                                <?php echo get_theme_mod('afterschool_top_sec_price_time_03'); ?></p>
                            <p class="price-item__price">
                                <?php echo get_theme_mod('afterschool_top_sec_price_price_03'); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="price-title" id="price-title-01">
                        <p><?php echo get_theme_mod('afterschool_top_sec_price_title_02'); ?></p>
                    </div>
                    <div class="price-subtitle">
                        <p><?php echo get_theme_mod('afterschool_top_sec_price_caution'); ?></p>
                    </div>
                    <div class="price-sheet sheet-pc">
                        <table>
                            <tr>
                                <th class="price-sheet-color">項目</th>
                                <th class="price-sheet-color">時間</th>
                                <th class="price-sheet-color">料金</th>
                            </tr>
                            <?php
                            for ($i = 1; $i <= 3; $i++) :
                            if (!empty(get_theme_mod('afterschool_top_sec_price_add_item_0'. $i))):
                            ?>
                            <tr>
                                <th class="price-sheet-color">
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_item_0'. $i); ?></p>
                                </th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_0'. $i); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_caution_0'. $i); ?>
                                    </p>
                                </td>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_0'. $i); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_text_0'. $i); ?>
                                    </p>
                                </td>
                            </tr>
                            <?php endif ; ?>
                            <?php endfor; ?>
                        </table>
                    </div>
                    <div class="price-sheet sheet-sp">
                        <table>
                            <tr>
                                <th class="price-sheet-color" colspan="2">早朝時間</th>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">時間</th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_01'); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_caution_01'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">料金</th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_01'); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_text_01'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-sheet sheet-sp">
                        <table>
                            <tr>
                                <th class="price-sheet-color" colspan="2">延長時間</th>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">時間</th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_02'); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_caution_02'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">料金</th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_02'); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_text_02'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-sheet sheet-sp">
                        <table>
                            <tr>
                                <th class="price-sheet-color" colspan="2">土曜日</th>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">時間</th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_03'); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_time_caution_03'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">料金</th>
                                <td>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_03'); ?></p>
                                    <p><?php echo get_theme_mod('afterschool_top_sec_price_add_price_text_03'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="section-afterschool-option" class="border-back">
        <div class="option-back">
            <div class="page-width">
                <div class="double-line-head nomal gakudo-title">
                    <h2>施設概要</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>

                <div class="afterschool-message">
                    <?php $theme_options = get_option('theme_option_name'); ?>
                    <div class="message-left">
                        <?php if ($theme_options['op_0'] != "") : ?>
                        <div class="afterschool-message_item left top">
                            <p class="item-title">施設名</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_0'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_2'] != "" && $theme_options['op_3'] != "") : ?>
                        <div class="afterschool-message_item left">
                            <p class="item-title">所在地</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_2'] ?></p>
                                <p><?= $theme_options['op_3'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_4'] != "") : ?>
                        <div class="afterschool-message_item left">
                            <p class="item-title">電話番号</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_4'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_6'] != "") : ?>
                        <div class="afterschool-message_item left">
                            <p class="item-title">メール</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_6'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_7'] != "") : ?>
                        <div class="afterschool-message_item left bottom leftbottom">
                            <p class="item-title">設立年月</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_7'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_8'] != "") : ?>
                        <div class="afterschool-message_item right top">
                            <p class="item-title">代表者</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_8'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_10'] != "") : ?>
                        <div class="afterschool-message_item right">
                            <p class="item-title">定員</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_10'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_12'] != "") : ?>
                        <div class="afterschool-message_item right">
                            <p class="item-title">職員数</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_12'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_13'] != "") : ?>
                        <div class="afterschool-message_item right">
                            <p class="item-title">職員構成</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_13'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_14'] != "") : ?>
                        <div class="afterschool-message_item right bottom">
                            <p class="item-title">アクセス</p>
                            <div class="item-detail">
                                <p><?= $theme_options['op_14'] ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- <div class="message-right">

                    </div> -->

                </div>
            </div>
        </div>

    </section>

    <!-- <section id="section-afterschool-download" class="cream-back">
        <div class="page-width">
            <div class="double-line-head nomal gakudo-title">
                <h2>書類ダウンロード</h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
            </div>
            <?php
            $repeatA = SCF::get('afterschool_download_category');

            foreach ($repeatA as $fields) : ?>
                <div class="download-text_item">
                    <a href="<?= wp_get_attachment_url($fields['afterschool_download_file'])  ?>" target="_blank">
                        <div class="item-text">
                            <p><?= $fields['afterschool_download_title'] ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_DL.svg" alt=""></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </section> -->

    <section id="section-afterschool-contact" class="cream-back">
        <div class="contact-back">
            <div class="page-width">
                <div class="single-line-head nomal gakudo-title">
                    <h2>お問い合わせ</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>
                <div class="contact-attension">
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <defs>
                                <style>
                                .maru-1 {
                                    fill: #26333b;
                                }
                                </style>
                            </defs>
                            <circle id="maru" class="maru-1" cx="8" cy="8" r="8"></circle>
                        </svg>「プライバシーポリシー」をお読みになり、同意のうえご記入ください。
                    </p>
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <defs>
                                <style>
                                .maru-1 {
                                    fill: #26333b;
                                }
                                </style>
                            </defs>
                            <circle id="maru" class="maru-1" cx="8" cy="8" r="8"></circle>
                        </svg>ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。
                    </p>
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <defs>
                                <style>
                                .maru-1 {
                                    fill: #26333b;
                                }
                                </style>
                            </defs>
                            <circle id="maru" class="maru-1" cx="8" cy="8" r="8"></circle>
                        </svg>返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。
                    </p>
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <defs>
                                <style>
                                .maru-1 {
                                    fill: #26333b;
                                }
                                </style>
                            </defs>
                            <circle id="maru" class="maru-1" cx="8" cy="8" r="8"></circle>
                        </svg>万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。
                    </p>
                </div>
                <div class="contact-form">
                    <?php
                    if (get_site_multi() == 'みらいの森学童クラブ') {
                        // 泉の杜保育園でのみ'sample'を表示させたいとき
                        echo do_shortcode('[contact-form-7 id="18" title="お問い合わせ１"]');
                    } elseif (get_site_multi() == 'ゆたか学童クラブ') {
                        echo do_shortcode('[contact-form-7 id="30" title="お問い合わせ"]');
                    }
                    ?>
                    <!-- <button disabled id="submit-button" class="white-border-button">送信する<?php get_template_part('images/svg/icon-link_white'); ?></button> -->
                </div>
            </div>
        </div>


    </section>

</main>
<script>
$('.recruit-child-mv').slick({
    dots: true,
    arrow: false,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnFocus: false,
    pauseOnHover: false,
});
$(function() {
    $('#submit-button').on('click', function() {
        $('.wpcf7-form').submit();
    })
    $('input[name="acceptance"]').on('change', function() {
        if ($('input[name="acceptance"]').prop('checked')) {
            $('#submit-button').prop('disabled', false);
        } else {
            $('#submit-button').prop('disabled', true);
        }
    })
})
</script>
<?php get_footer(); ?>