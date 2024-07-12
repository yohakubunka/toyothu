<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<main id="about">
    <!-- 保育理念 -->
    <section class="policy">
        <div class="inner">
            <div class="center-back first-box">
                <div class="center">
                    <h2 class="title shooting">保育理念</h2>
                    <div class="center-inner">
                        <h3 class="subtitle">
                            <?= get_post_meta($post->ID, 'childrens_about_sec_philosophy_titile', true); ?></h3>
                        <p><?= nl2br(get_post_meta($post->ID, 'childrens_about_sec_philosophy_text', true)); ?></p>
                    </div>
                </div>
            </div>
            <div class="center-image first-box">
                <?php $file_id = get_post_meta($post->ID, 'childrens_about_sec_philosophy_img', true); ?>
                <img class="corner maskpot-center" src="<?php echo wp_get_attachment_url($file_id); ?>" alt="保育理念">
            </div>
        </div>
    </section>


    <!-- 基本方針 -->
    <section class="plan">
        <div class="title wood">
            <h2 class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/plan_icon.svg" />基本方針
            </h2>
        </div>
        <div class="back about-support">
            <div class="center-text box first-box">
                <h3 class="subtitle"><?= get_post_meta($post->ID, 'childrens_about_sec_policy_title', true); ?></h3>
                <p><?= nl2br(get_post_meta($post->ID, 'childrens_about_sec_policy_text', true)); ?></p>
            </div>
            <div class="oddflex second-box">
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_about_sec_policy_card_01', true) == "") echo "none" ?>">
                    <span class="number">01</span>
                    <p><?= get_post_meta($post->ID, 'childrens_about_sec_policy_card_01', true); ?></p>
                </div>
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_about_sec_policy_card_02', true) == "") echo "none" ?>">
                    <span class="number">02</span>
                    <p><?= get_post_meta($post->ID, 'childrens_about_sec_policy_card_02', true); ?></p>
                </div>
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_about_sec_policy_card_03', true) == "") echo "none" ?>">
                    <span class="number">03</span>
                    <p><?= get_post_meta($post->ID, 'childrens_about_sec_policy_card_03', true); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 保育目標 -->
    <section class="target">
        <div class="title glitter">
            <h2 class="icon"><span><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/target_icon.svg" /></span>保育目標
            </h2>
        </div>
        <div class="back life_target">
            <div class="center-text first-box">
                <h3><?= get_post_meta($post->ID, 'childrens_life_sec_goal_title', true); ?></h3>
            </div>
            <div class="oddflex box second-box">
                <div class="oddflex__box">
                    <span
                        class="number <?php if (get_post_meta($post->ID, 'childrens_life_sec_goal_text_01', true) == "") echo "none" ?>">01</span>
                    <p><?= get_post_meta($post->ID, 'childrens_life_sec_goal_text_01', true); ?></p>
                </div>
                <div class="oddflex__box">
                    <span
                        class="number <?php if (get_post_meta($post->ID, 'childrens_life_sec_goal_text_02', true) == "") echo "none" ?>">02</span>
                    <p><?= get_post_meta($post->ID, 'childrens_life_sec_goal_text_02', true); ?></p>
                </div>
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_life_sec_goal_text_03', true) == "") echo "none" ?>">
                    <span class="number">03</span>
                    <p><?= get_post_meta($post->ID, 'childrens_life_sec_goal_text_03', true); ?></p>
                </div>
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_life_sec_goal_text_04', true) == "") echo "none" ?>">
                    <span class="number">04</span>
                    <p><?= get_post_meta($post->ID, 'childrens_life_sec_goal_text_04', true); ?></p>
                </div>
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_life_sec_goal_text_05', true) == "") echo "none" ?>">
                    <span class="number">05</span>
                    <p><?= get_post_meta($post->ID, 'childrens_life_sec_goal_text_05', true); ?></p>
                </div>
                <div
                    class="oddflex__box <?php if (get_post_meta($post->ID, 'childrens_life_sec_goal_text_06', true) == "") echo "none" ?>">
                    <span class="number">06</span>
                    <p><?= get_post_meta($post->ID, 'childrens_life_sec_goal_text_06', true); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="title wood">
            <h2 class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/nurturing_icon.svg" />保育内容
            </h2>
        </div>
        <div class="back about-support box">
            <div class="linebox first-box">
                <div class="linebox__title">
                    <p>3~5歳児の保育</p>
                </div>

                <div class="linebox__inner oneline">
                    <h3><?= nl2br(get_post_meta($post->ID, 'childrens_about_sec_content_title_01', true)); ?></h3>
                    <div class="linebox__inner--text">
                        <p><?= nl2br(get_post_meta($post->ID, 'childrens_about_sec_content_text_01', true)); ?></p>
                    </div>
                    <div class="linebox__inner--pot">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <?php $img_url = wp_get_attachment_url(get_post_meta($post->ID, 'childrens_about_sec_content_img_01_0' . $i, true)); ?>
                        <img src="<?= $img_url ?>" alt="保育内容" class="support-img corner">
                        <?php endfor; ?>
                    </div>
                </div>
            </div>

            <div class="linebox first-box">
                <div class="linebox__title">
                    <p>0~2歳児の保育</p>
                </div>
                <div class="linebox__inner oneline">
                    <h3><?= nl2br(get_post_meta($post->ID, 'childrens_about_sec_content_title_02', true)); ?></h3>
                    <div class="linebox__inner--text">
                        <p><?= nl2br(get_post_meta($post->ID, 'childrens_about_sec_content_text_02', true)); ?></p>
                    </div>
                    <div class="linebox__inner--pot">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <?php $img_url = wp_get_attachment_url(get_post_meta($post->ID, 'childrens_about_sec_content_img_02_0' . $i, true)); ?>
                        <img src="<?= $img_url ?>" alt="保保育内容" class="support-img corner">
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="button first-box">
            <a
                href="<?= home_url() ?>/point/#education">教育活動を見る<?php get_template_part('image/SVG/icon/button_icon') ?></a>
        </div>
    </section>

    <!-- ギャラリー -->
    <section class="gallery">
        <div class="title glitter">
            <h2 class="icon"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/gallery_icon.svg" />ギャラリー</h2>
        </div>
        <div class="gallery__slide gallery-slick">
            <?php
			$gallery_group = SCF::get('childrens_about_sec_gallery');
			foreach ($gallery_group as $fields) :
				$gallery_item = get_post_meta(get_the_ID(), 'childrens_about_sec_gallery_text');
				$gallery_imgurl = wp_get_attachment_image_src($fields['childrens_about_sec_gallery_img'], 'full');
			?>
            <div class="gallery-box">
                <img class="corner" src="<?= $gallery_imgurl[0] ?>" alt="ギャラリー">
                <p><?php echo $fields['childrens_about_sec_gallery_text']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="button first-box">
            <?php $image_url = wp_get_attachment_url(get_post_meta(get_the_ID(), 'childrens_about_sec_gallery_floor')[0]); ?>
            <?php if ($image_url != "") : ?>
            <a href="<?= $image_url ?>" class="external <?php if ($image_url == "") echo "preparation" ?>"
                target="_blank">フロアマップ</a>
            <?php else : ?>
            <?php endif; ?>
        </div>

    </section>

    <!-- 施設概要 -->
    <section class="facility last">
        <div class="title wood">
            <h2 class="icon"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/facility_icon.svg" />施設概要</h2>
        </div>
        <div class="back about-facility">
            <div class="box first-box">
                <div class="onebox">
                    <div class="onebox__inner summary">
                        <h3 class="subtitle">事業概要</h3>
                        <ul class="summary__pic">
                            <?php
							$gallery_group = SCF::get('childrens_about_sec_facility_info');
							foreach ($gallery_group as $fields) : ?>
                            <li class="textbold"><?= $fields ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <ol class="summary__list twoflex">
                            <ul>
                                <?php if ($theme_options['op_0'] != "") : ?>
                                <li><span class="textbold">施設名</span>
                                    <p><?= $theme_options['op_0'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_8'] != "") : ?>
                                <li><span class="textbold">代表者</span>
                                    <p><?= $theme_options['op_8'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_1'] != "") : ?>
                                <li><span class="textbold">種別</span>
                                    <p><?= $theme_options['op_1'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_9'] != "") : ?>
                                <li><span class="textbold">受入年齢</span>
                                    <p><?= $theme_options['op_9'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_2'] != "" && $theme_options['op_3'] != "") : ?>
                                <li><span class="textbold">所在地</span>
                                    <p>〒<?= $theme_options['op_2'] ?>
                                        <?= $theme_options['op_3'] ?>

                                        <?php if (get_site_multi() == "ゆたか認定こども園") : ?>
                                        <a href="https://goo.gl/maps/qMBfbBfSDh2XBfW4A" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "泉の杜保育園") : ?>
                                        <a href="https://goo.gl/maps/tbfxzSmpyYS3KhKs9" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "世田谷１丁目ゆたか園") : ?>
                                        <a href="https://goo.gl/maps/zBRHtkzk6jeWTopp6" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "多気の杜こども園") : ?>
                                        <a href="https://goo.gl/maps/1NWRY1Qo9JBSzNsW8" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "こどもの杜ゆたか園") : ?>
                                        <a href="https://goo.gl/maps/rFk4aJg3YTpLDL7G9" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "みらいの森ゆたか園") : ?>
                                        <a href="https://www.google.com/maps/place/%E3%81%BF%E3%82%89%E3%81%84%E3%81%AE%E6%A3%AE%E3%82%86%E3%81%9F%E3%81%8B%E5%9C%92/@34.8046846,136.5179157,15z/data=!4m12!1m6!3m5!1s0x0:0xf5d4d62bee898071!2z44G_44KJ44GE44Gu5qOu44KG44Gf44GL5ZyS!8m2!3d34.8046927!4d136.5180429!3m4!1s0x0:0xf5d4d62bee898071!8m2!3d34.8046927!4d136.5180429"
                                            target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "杜の街ゆたか園") : ?>
                                        <a href="https://goo.gl/maps/pRcfsSvVBSCSCMvw8" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "明和ゆたか園") : ?>
                                        <a href="https://goo.gl/maps/is8x3JfwEQ4a7xDb9" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "第２明和ゆたか園") : ?>
                                        <a href="https://goo.gl/maps/YMVWcRNQX1wMU9CG7" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php elseif (get_site_multi() == "斎宮Babyroom") : ?>
                                        <a href="https://goo.gl/maps/NuJyV7buDbiy98Kh9" target="_blank">
                                            <img
                                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/icon_map.svg" />
                                        </a>
                                        <?php endif; ?>
                                    </p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_10'] != "") : ?>
                                <li><span class="textbold">定員</span>
                                    <p><?= $theme_options['op_10'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_4'] != "") : ?>
                                <li><span class="textbold">電話番号</span>
                                    <p>
                                    <p><a
                                            href="tel:<?= preg_replace('/[^0-9]/', '', $theme_options['op_4']); ?>"><?= $theme_options['op_4'] ?></a>
                                    </p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_11'] != "") : ?>
                                <li><span class="textbold">保育時間</span>
                                    <p><?= $theme_options['op_11'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_5'] != "") : ?>
                                <li><span class="textbold">FAX</span>
                                    <p><?= $theme_options['op_5'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_12'] != "") : ?>
                                <li><span class="textbold">職員数</span>
                                    <p><?= $theme_options['op_12'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_6'] != "") : ?>
                                <li><span class="textbold">メール</span>
                                    <p><?= $theme_options['op_6'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_13'] != "") : ?>
                                <li><span class="textbold">職員構成</span>
                                    <p><?= $theme_options['op_13'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_7'] != "") : ?>
                                <li><span class="textbold">設立年月</span>
                                    <p><?= $theme_options['op_7'] ?></p>
                                </li>
                                <?php endif; ?>
                                <?php if ($theme_options['op_14'] != "") : ?>
                                <li><span class="textbold">アクセス</span>
                                    <p><?= $theme_options['op_14'] ?></p>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="baby_second">
                <?php if (get_site_multi() == "泉の杜保育園" || get_site_multi() == "世田谷１丁目ゆたか園") : ?>
                <!-- TODO ここに黄色い赤ちゃん -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/top_instagram-back02.svg" />
                <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/top_instagram-back.svg" />
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<script>
//slickの設定
$('.gallery-slick').slick({
    centerMode: true,
    slidesToShow: 2,
    arrows: false,
    centerPadding: '340px',
    autoplay: true,
    dots: true,
    responsive: [{
            breakpoint: 1500,
            settings: {
                centerPadding: '120px',
            }
        },
        {
            breakpoint: 1200,
            settings: {
                centerPadding: '80px',
            }
        },
        {
            breakpoint: 1024,
            settings: {
                centerPadding: '40px',
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerPadding: '40px',
            }
        }
    ]
});
</script>
<?php get_footer(); ?>