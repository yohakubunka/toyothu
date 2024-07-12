<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<div>
    <?php get_template_part('template-parts/load-animation') ?>
</div>
<main id="front">
    <!-- 新着情報 -->
    <section class="news box">
        <div class="title glitter">
            <h2 class="icon"><span><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/news_icon.svg" /></span>新着情報
            </h2>
        </div>
        <div class="back top-news">
            <div class="twoflex box">
                <?php if (have_posts()) : ?>
                <?php
          $args = array(
            'posts_per_page' => 4,
          );
          $posts = get_posts($args);
          ?>
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <article class="twoflex-box first-box">
                    <a href="<?php the_permalink(); ?>" class="article-inner">
                        <div class="article-img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else : ?>
                            <?php if (get_site_multi() == "ゆたか認定こども園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/yutaka.svg" />
                            <?php elseif (get_site_multi() == "泉の杜保育園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/izuminomori.svg" />
                            <?php elseif (get_site_multi() == "世田谷１丁目ゆたか園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/setagaya.svg" />
                            <?php elseif (get_site_multi() == "多気の杜こども園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/takinomori.svg" />
                            <?php elseif (get_site_multi() == "こどもの杜ゆたか園") : ?>
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/kodomonomori.svg" />
                            <?php elseif (get_site_multi() == "みらいの森ゆたか園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/mirainomori.svg" />
                            <?php elseif (get_site_multi() == "杜の街ゆたか園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/morinomati.svg" />
                            <?php elseif (get_site_multi() == "明和ゆたか園") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/meiwa.svg" />
                            <?php elseif (get_site_multi() == "第２明和ゆたか園") : ?>
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/meiwa_second.svg" />
                            <?php elseif (get_site_multi() == "斎宮Babyroom") : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/itukinomiya.svg" />
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="article-text">
                            <h3><?= the_title(); ?></h3>
                            <ul>
                                <li><?= get_the_date(); ?></li>
                                <li><?php $category = get_the_category();
                        echo $category[0]->cat_name; ?></li>
                            </ul>
                        </div>
                    </a>
                </article>
                <?php endforeach ?>
                <?php else : ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="button first-box">
            <a href="<?= home_url() ?>/news">一覧を見る<?php get_template_part('image/SVG/icon/button_icon') ?></a>
        </div>
    </section>

    <!-- ようこそ〇〇へ -->
    <section class="message">
        <div class="inner">
            <div class="center-back first-box">
                <div class="center">
                    <div class="title shooting">
                        <?php if (get_site_multi() == "ゆたか認定こども園") : ?>
                        <h2>ようこそ<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "泉の杜保育園") : ?>
                        <h2>ようこそ<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "世田谷１丁目ゆたか園") : ?>
                        <h2>ようこそ<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "多気の杜こども園") : ?>
                        <h2>ようこそ<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "こどもの杜ゆたか園") : ?>
                        <h2>ようこそ 認定こども園<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "みらいの森ゆたか園") : ?>
                        <h2>ようこそ 認定こども園<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "杜の街ゆたか園") : ?>
                        <h2>ようこそ 認定こども園<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "明和ゆたか園") : ?>
                        <h2>ようこそ 認定こども園<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "第２明和ゆたか園") : ?>
                        <h2>ようこそ 認定こども園<br><?php bloginfo('name'); ?>へ</h2>
                        <?php elseif (get_site_multi() == "斎宮Babyroom") : ?>
                        <h2>ようこそ<br><?php bloginfo('name'); ?>へ</h2>
                        <?php endif; ?>
                    </div>
                    <div class="center-inner">
                        <h3><?php echo get_theme_mod('childrens_top_sec_welcome_title'); ?></h3>
                        <p><?php echo nl2br(get_theme_mod('childrens_top_sec_welcome_text')); ?></p>
                    </div>
                </div>
            </div>
            <div class="center-image first-box">
                　<img class="corner maskpot-center" src="<?php echo get_theme_mod('childrens_top_sec_welcome_img'); ?>"
                    alt="ようこそゆたか認定こども園">
            </div>
            <p class="rigth-text first-box"><?php echo get_theme_mod('childrens_top_sec_welcome_caution'); ?></p>
        </div>
    </section>

    <!-- 一時預かり -->
    <?php if (get_site_multi() == "こどもの杜ゆたか園" || get_site_multi() == "みらいの森ゆたか園" || get_site_multi() == "明和ゆたか園") : ?>
    <?php get_template_part('template-parts/front-custody') ?>
    <?php endif; ?>


    <!-- 子育て支援 -->
    <?php if (!(get_site_multi() == "世田谷１丁目ゆたか園" || get_site_multi() == "泉の杜保育園")) : ?>
    <?php get_template_part('template-parts/front-support') ?>
    <?php endif; ?>

    <!-- 気になる情報をチェック -->
    <section class="back last check">
        <div class="inner">
            <div class="title">
                <h2 class="icon"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/check_icon.svg" />気になる情報を<br>チェック
                </h2>
            </div>
            <div class="twoflex">
                <?php if (get_theme_mod('childrens_top_sec_info_img_1') != NULL || get_theme_mod('childrens_top_sec_info_img_1') != "" && get_theme_mod('childrens_top_sec_info_title_1') != NULL || get_theme_mod('childrens_top_sec_info_title_1') != "" && get_theme_mod('childrens_top_sec_info_text_1') != NULL || get_theme_mod('childrens_top_sec_info_text_1') != "") : ?>
                <div class="check-box first-box">
                    <div class="check-inner">
                        <div class="check-img">
                            <img src="<?php echo get_theme_mod('childrens_top_sec_info_img_1') ?>" alt="">
                        </div>
                        <h3><?php echo get_theme_mod('childrens_top_sec_info_title_1'); ?></h3>
                        <p><?php echo get_theme_mod('childrens_top_sec_info_text_1'); ?></p>
                    </div>
                    <div class="seemore">
                        <a href="<?= home_url() ?>/about">
                            <p>もっと見る</p>
                            <span><?php get_template_part('image/SVG/icon/seemore_icon') ?></span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (get_theme_mod('childrens_top_sec_info_img_2') != NULL || get_theme_mod('childrens_top_sec_info_img_2') != "" && get_theme_mod('childrens_top_sec_info_title_2') != NULL || get_theme_mod('childrens_top_sec_info_title_2') != "" && get_theme_mod('childrens_top_sec_info_text_2') != NULL || get_theme_mod('childrens_top_sec_info_text_2') != "") : ?>
                <div class="check-box second-box">
                    <div class="check-inner">
                        <div class="check-img">
                            <img src="<?php echo get_theme_mod('childrens_top_sec_info_img_2') ?>" alt="">
                        </div>
                        <h3><?php echo get_theme_mod('childrens_top_sec_info_title_2'); ?></h3>
                        <p><?php echo get_theme_mod('childrens_top_sec_info_text_2'); ?></p>
                    </div>
                    <div class="seemore">
                        <a href="<?= home_url() ?>/point">
                            <p>もっと見る</p>
                            <span><?php get_template_part('image/SVG/icon/seemore_icon') ?></span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (get_theme_mod('childrens_top_sec_info_img_3') != NULL || get_theme_mod('childrens_top_sec_info_img_3') != "" && get_theme_mod('childrens_top_sec_info_title_3') != NULL || get_theme_mod('childrens_top_sec_info_title_3') != "" && get_theme_mod('childrens_top_sec_info_text_3') != NULL || get_theme_mod('childrens_top_sec_info_text_3') != "") : ?>
                <div class="check-box first-box">
                    <div class="check-inner">
                        <div class="check-img">
                            <img src="<?php echo get_theme_mod('childrens_top_sec_info_img_3') ?>" alt="">
                        </div>
                        <h3><?php echo get_theme_mod('childrens_top_sec_info_title_3'); ?></h3>
                        <p><?php echo get_theme_mod('childrens_top_sec_info_text_3'); ?></p>
                    </div>
                    <div class="seemore">
                        <a href="<?= home_url() ?>/life">
                            <p>もっと見る</p>
                            <span><?php get_template_part('image/SVG/icon/seemore_icon') ?></span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (get_theme_mod('childrens_top_sec_info_img_4') != NULL || get_theme_mod('childrens_top_sec_info_img_4') != "" && get_theme_mod('childrens_top_sec_info_title_4') != NULL || get_theme_mod('childrens_top_sec_info_title_4') != "" && get_theme_mod('childrens_top_sec_info_text_4') != NULL || get_theme_mod('childrens_top_sec_info_text_4') != "") : ?>
                <div class="check-box second-box">
                    <div class="check-inner">
                        <div class="check-img">
                            <img src="<?php echo get_theme_mod('childrens_top_sec_info_img_4') ?>" alt="">
                        </div>
                        <h3><?php echo get_theme_mod('childrens_top_sec_info_title_4'); ?></h3>
                        <p><?php echo get_theme_mod('childrens_top_sec_info_text_4'); ?></p>
                    </div>
                    <div class="seemore">
                        <a href="<?= home_url() ?>/guide">
                            <p>もっと見る</p>
                            <span><?php get_template_part('image/SVG/icon/seemore_icon') ?></span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- Instagram -->
    <section class="last">
        <div class="carousel instagram">
            <div class="title wood">
                <h2 class="icon"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/Instagram_icon.svg" />instagram
                </h2>
            </div>
            <h3 class="subtitle first-box">最新情報と子どもたちの様子をSNSにアップしています！</h3>
            <div class="back top-instagram">
                <div class="instagram-slick">
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_01') != NULL || get_theme_mod('childrens_top_sec_insta_img_01') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_01'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_02') != NULL || get_theme_mod('childrens_top_sec_insta_img_02') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_02'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_03') != NULL || get_theme_mod('childrens_top_sec_insta_img_03') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_03'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_04') != NULL || get_theme_mod('childrens_top_sec_insta_img_04') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_04'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_05') != NULL || get_theme_mod('childrens_top_sec_insta_img_05') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_05'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_06') != NULL || get_theme_mod('childrens_top_sec_insta_img_06') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_06'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_07') != NULL || get_theme_mod('childrens_top_sec_insta_img_07') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_07'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_08') != NULL || get_theme_mod('childrens_top_sec_insta_img_08') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_08'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_09') != NULL || get_theme_mod('childrens_top_sec_insta_img_09') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_09'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                    <?php if (get_theme_mod('childrens_top_sec_insta_img_10') != NULL || get_theme_mod('childrens_top_sec_insta_img_10') != "") : ?>
                    <img class="corner" src="<?php echo get_theme_mod('childrens_top_sec_insta_img_10'); ?>"
                        alt="Instagram写真">
                    <?php endif; ?>
                </div>
                <div class="button first-box">
                    <a target="_blank"
                        href="<?php echo (get_theme_mod('childrens_top_sec_link_03') != "") ? get_theme_mod('childrens_top_sec_link_03') : '##'; ?>"
                        class="<?php if (get_theme_mod('childrens_top_sec_link_03') == "") echo "preparation" ?>">instagram<?php get_template_part('image/SVG/icon/linkarrow_icon') ?></a>
                </div>
                <div class="baby">
                    <?php if (get_site_multi() == "泉の杜保育園" || get_site_multi() == "世田谷１丁目ゆたか園") : ?>
                    <!-- TODO ここに黄色い赤ちゃん -->
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/top_instagram-back02.svg" />
                    <?php else : ?>
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/top_instagram-back.svg" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>
<script>
//slickの設定
$(document).ready(function() {
    $('.instagram-slick').slick({
        infinite: true,
        autoplay: true, //自動再生
        autoplaySpeed: 2000, //移動時間
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 5000, //移動スピード
        slidesToShow: 7, //表示枚数
        slidesToScroll: 1, //移動枚数
        cssEase: 'linear', //カクつきを緩やかにする。
        arrows: false,
        autoplaySpeed: 0, //次のスライドに移るまでのラグを0にする。
        responsive: [{
            breakpoint: 1024, //1024px以下の時の設定
            settings: {
                slidesToShow: 4,
                cssEase: 'linear',
                autoplaySpeed: 0,
            }
        }, {
            breakpoint: 767, //767px以下の時の設定
            settings: {
                slidesToShow: 2,
                cssEase: 'linear',
                autoplaySpeed: 0,
            }
        }]
    });
    $('.top-slick').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 5000,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
    });
});

//リロード処理
$(window).resize(function() {
    var wide = window.innerWidth;
    $('.instagram-slick').slick('setPosition');
    $('.top-slick').slick('setPosition');
    console.log(wide);
});
//フォバーアニメーション
$(function() {
    $('.check-box').hover(function() {
        if ($(this).hasClass("hover")) {
            //clickedクラスを外す
            $(this).removeClass("hover");
            $(this).find('.check-inner').removeClass("hover");
            $(this).find('.seemore').removeClass("hover");
        } else {
            //clickedクラスを追加する
            $(this).addClass("hover");
            $(this).find('.check-inner').addClass("hover");
            $(this).find('.seemore').addClass("hover");
        }
    });
});
</script>
<?php get_footer(); ?>