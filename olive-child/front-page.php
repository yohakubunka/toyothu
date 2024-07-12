<?php get_header(); ?>
<?php get_template_part('template/gakudo_loadanimation_olive'); ?>
<main class="wrap">
    <div class="mainvisual">
        <div class="recruit-child-mv recruit-child-mv-pc">
            <?php if (get_theme_mod('olive_mainvisual_01') && !get_theme_mod('olive_mainvisual_01') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_02') && !get_theme_mod('olive_mainvisual_02') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_03') && !get_theme_mod('olive_mainvisual_03') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_04') && !get_theme_mod('olive_mainvisual_04') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_05') && !get_theme_mod('olive_mainvisual_05') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>

        <div class="recruit-child-mv recruit-child-mv-sp">
            <?php if (get_theme_mod('olive_mainvisual_sp_01') && !get_theme_mod('olive_mainvisual_sp_01') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_sp_01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_sp_02') && !get_theme_mod('olive_mainvisual_sp_02') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_sp_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_sp_03') && !get_theme_mod('olive_mainvisual_sp_03') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_sp_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_sp_04') && !get_theme_mod('olive_mainvisual_sp_04') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_sp_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('olive_mainvisual_sp_05') && !get_theme_mod('olive_mainvisual_sp_05') == "") : ?>
                <img src="<?php echo get_theme_mod('olive_mainvisual_sp_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>
        <div class="logo-main">
            <img src="<?php echo get_theme_mod('olive_mainvisual_logo'); ?>" alt="オリーブの木TOYOTSUロゴ">
        </div>
        <div class="logo-sub">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/olive.svg" alt="オリーブの木TOYOTSUスローガン">
            <p class="logo-text"><?php echo nl2br(get_theme_mod('olive_mainvisual_text')); ?>
        </div>
    </div>


    <section id="section-olive-news" class="cream-back">
        <div class="page-width">
            <div class="double-line-head nomal gakudo-title">
                <h2>お知らせ</h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
            </div>
            <div class="olive-news status1">
                <div class="olive-news__area">
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

    <section id="section-olive-content" class="border-back">
        <div class="flow-back">
            <div class="page-width">
                <div class="double-line-head nomal gakudo-title">
                    <h2>療育内容</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>

                <div class="subject">
                    <?php
                    $free_item = SCF::get('use_about');
                    foreach ($free_item as $fields) {
                        $image_id = $fields['use_about_image'];
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                    ?>
                        <div class="subject__item status1 ">
                            <div class="subject__item--text">
                                <p><?php echo nl2br($fields['use_about_text']); ?></p>
                            </div>
                            <div class="subject__item--img">
                                <img src="<?php echo esc_url($image_url); ?>" alt="療育内容画像">
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    <section id="section-olive-use" class="cream-back">
        <div class="price-back">
            <div class="page-width">
                <div class="double-line-head nomal gakudo-title">
                    <h2>ご利用にあたって</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>
                <div class="price ">
                    <div class="status1">
                        <div class="price-desc">
                            <div class="price-desc__text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <defs>
                                        <style>
                                            .maru-2 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <circle id="maru" class="maru-2" cx="8" cy="8" r="8"></circle>
                                </svg>
                               <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_desc_01')); ?></p>
                            </div>
                            <div class="price-desc__text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <defs>
                                        <style>
                                            .maru-2 {
                                                fill:  #fff;
                                            }
                                        </style>
                                    </defs>
                                    <circle id="maru" class="maru-2" cx="8" cy="8" r="8"></circle>
                                </svg>
                                <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_desc_02')); ?></p>
                            </div>
                            <div class="price-desc__text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <defs>
                                        <style>
                                            .maru-2 {
                                                fill:  #fff;
                                            }
                                        </style>
                                    </defs>
                                    <circle id="maru" class="maru-2" cx="8" cy="8" r="8"></circle>
                                </svg>
                                <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_desc_03')); ?></p>
                            </div>
                        </div>
                        <div class="price-note">
                            <p>※利用料に関して</p>
                            <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_note_01')); ?></p>
                        </div>
                    </div>
                    <h3>サービスについて</h3>
                    <div class="price-sheet sheet-pc status1">
                        <table>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>開所時間</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_start_time')); ?></p>
                                </td>
                                <th class="price-sheet-color">
                                    <p>サービス提供時間</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_start_service_time')); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>休日</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_holiday')); ?></p>
                                </td>
                                <th class="price-sheet-color">
                                    <p>開所日</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_open_day')); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>対象</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_child')); ?></p>
                                </td>
                                <th class="price-sheet-color">
                                    <p>その他</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_other')); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-sheet sheet-sp status1">
                        <table>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>開所時間</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_start_time')); ?></p>
                                </td>

                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>サービス提供時間</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_start_service_time')); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>休日</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_holiday')); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>開所日</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_open_day')); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>対象</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_child')); ?></p>
                                </td>

                            </tr>
                            <tr>
                                <th class="price-sheet-color">
                                    <p>その他</p>
                                </th>
                                <td>
                                    <p><?php echo nl2br(get_theme_mod('olive_top_sec_use_other')); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="section-olive-option" class="border-back">
        <div class="option-back">
            <div class="page-width">
                <div class="double-line-head nomal gakudo-title">
                    <h2>施設概要</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>

                <div class="olive-message status1">
                    <?php $theme_options = get_option('theme_option_name'); ?>
                    <div class="message-left">
                        <?php if ($theme_options['op_0'] != "") : ?>
                            <div class="olive-message_item left top">
                                <p class="item-title">施設名</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_0'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_2'] != "" && $theme_options['op_3'] != "") : ?>
                            <div class="olive-message_item left">
                                <p class="item-title">所在地</p>
                                <div class="item-detail">
                                    <p>〒<?= $theme_options['op_2'] ?> <?= $theme_options['op_3'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_4'] != "") : ?>
                            <div class="olive-message_item left">
                                <p class="item-title">電話番号</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_4'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_6'] != "") : ?>
                            <div class="olive-message_item left">
                                <p class="item-title">メール</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_6'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_7'] != "") : ?>
                            <div class="olive-message_item left bottom leftbottom">
                                <p class="item-title">設立年月</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_7'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_8'] != "") : ?>
                            <div class="olive-message_item right top">
                                <p class="item-title">代表者</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_8'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_10'] != "") : ?>
                            <div class="olive-message_item right">
                                <p class="item-title">定員</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_10'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_12'] != "") : ?>
                            <div class="olive-message_item right">
                                <p class="item-title">職員数</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_12'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_13'] != "") : ?>
                            <div class="olive-message_item right">
                                <p class="item-title">職員構成</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_13'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($theme_options['op_14'] != "") : ?>
                            <div class="olive-message_item right bottom">
                                <p class="item-title">アクセス</p>
                                <div class="item-detail">
                                    <p><?= $theme_options['op_14'] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="section-olive-contact" class="cream-back">
        <div class="contact-back">
            <div class="page-width">
                <div class="single-line-head nomal gakudo-title">
                    <h2>お問い合わせ</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-title.png" alt="">
                </div>
                <div class="contact-attension">
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
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
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
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
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
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
                    <p class="contact-attension__text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
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
                        echo do_shortcode('[contact-form-7 id="13" title="お問い合わせ"]');
                    ?> 
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