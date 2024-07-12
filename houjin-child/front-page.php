<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<div>
    <?php get_template_part('template/houjin-load-animation') ?>
</div>
<main>
    <div class="mv">
        <div class="houjin-mv mv-pc">
            <?php if (get_theme_mod('houjin_mainvisual_01')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_02')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_03')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_04')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_05')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>
        <div class="houjin-mv mv-sp">
            <?php if (get_theme_mod('houjin_mainvisual_sp_01')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_sp_01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_sp_02')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_sp_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_sp_03')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_sp_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_sp_04')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_sp_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('houjin_mainvisual_sp_05')) : ?>
                <img src="<?= get_theme_mod('houjin_mainvisual_sp_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>
        <div class="logo">
            <img class="pc-logo" src="<?= get_theme_mod('houjin_logo'); ?>" alt="ロゴ">
            <img class="sp-logo" src="<?= get_theme_mod('houjin_logo_sp'); ?>" alt="ロゴ">
            <p class="logo-txt"><?= nl2br(get_theme_mod('houjin_mainvisual_text')); ?></p>
        </div>
    </div>
    <div class="follow-btn">
        <div class="kyusyoku-btn">
            <a href="https://toyotsujidou.com/recruit/" target="_blank" rel="noopener">
                <?php get_template_part('images/svg/search'); ?>
                <p class="n-txt dark-brown">求職者の方へ</p>
            </a>
        </div>
        <div class="partition"></div>
        <div class="taisyoku-btn">
            <a href="https://toyotsujidou.com/retired/" target="_blank" rel="noopener">
                <?php get_template_part('images/svg/taishoku'); ?>
                <p class="n-txt dark-brown">退職者の方へ</p>
            </a>
        </div>
    </div>
    <section id="section-houjin-news" class="houjin-news">
        <div class="page-width">
            <div class="speech-mark">
                <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                <h2 class="houjin-ttl">お知らせ</h2>
                <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
            </div>
            <div class="houjin-news__content bg-radius box-b">
                <div class="houjin-news__content--box">
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
                                    <p class="date-category__date n-txt_m"><?= get_the_date('Y/m/d'); ?></p>
                                    <?php $category = get_the_category(); ?>
                                    <p class="date-category__category n-txt_m"><?= $category[0]->cat_name; ?></p>
                                </div>
                                <p class="news-item__title sub-ttl brown"><?= get_the_title(); ?></p>
                                <div class="news-item__content"><?= get_the_content(); ?></div>
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p class="n-txt_m">記事がありません。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-houjin-message" class="houjin-message">
        <div class="page-width">
            <div class="speech-mark">
                <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                <h2 class="houjin-ttl">メッセージ</h2>
                <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
            </div>
            <div class="houjin-message__content">
                <p class="sub-ttl brown center box-b1"><?= nl2br(get_theme_mod('houjin_message_title')); ?></p>
                <div class="houjin-message__content--flex box-b3">
                    <div class="author-img" style="background-image: url(<?= get_theme_mod('houjin_message_image'); ?>);">
                    </div>
                    <div class="message-box">
                        <p class="n-txt_m"><?= get_theme_mod('houjin_message_text'); ?></p>
                        <p class="message-author sub-ttl brown"><?= get_theme_mod('houjin_message_name'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="section-houjin-facility" class="houjin-facility">
        <div class="page-width">
            <div class="speech-mark">
                <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                <h2 class="houjin-ttl">運営施設</h2>
                <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
            </div>
            <div class="houjin-facility__content">
                <div class="houjin-facility__content--category box-b">
                    <p class="sub-ttl brown center">施設の種別を<br class="brsp">選択してください。</p>
                    <ul class="category-flex">
                        <?php
                        $categories = get_terms('houjin_facility_category');
                        ?>
                        <?php foreach ($categories as $key => $term) : ?>
                            <li>
                                <?php if ($term->name == '幼保連携型認定こども園') : ?>
                                    <a class="btn btn-txt" href="#box-num-<?= $key ?>">認定こども園</a>
                                <?php else : ?>
                                    <a class="btn btn-txt" href="#box-num-<?= $key ?>"><?= $term->name ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php
                $tax_name = 'houjin_facility_category';
                $posttype_name = 'houjin_facility';
                $terms = get_terms($tax_name);
                foreach ($terms as $key => $term) :
                    $args = array(
                        'post_type' => $posttype_name,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $tax_name,
                                'field'    => 'slug',
                                'terms'    => $term->slug,
                            ),
                        ),
                    );
                    $the_query = new WP_Query($args);
                ?>
                    <div id="box-num-<?= $key ?>" class="houjin-facility__content--box">
                        <div class="double-leaf fluffy">
                            <span class="pc"><?php get_template_part('images/svg/leaf_l'); ?></span>
                            <span class="sp"><?php get_template_part('images/svg/leaf_l_sp'); ?></span>
                            <?php if ($term->name == '幼保連携型認定こども園') : ?>
                                <div>
                                    <?php get_template_part('images/svg/icon_nintei'); ?>
                                    <h2 class="sub-ttl brown"><?= $term->name ?></h2>
                                </div>
                            <?php elseif (($term->name == '保育所')) : ?>
                                <div>
                                    <?php get_template_part('images/svg/icon_hoikujo'); ?>
                                    <h2 class="sub-ttl brown"><?= $term->name ?></h2>
                                </div>
                            <?php elseif (($term->name == '小規模保育園')) : ?>
                                <div>
                                    <?php get_template_part('images/svg/icon_shoukibo'); ?>
                                    <h2 class="sub-ttl brown"><?= $term->name ?></h2>
                                </div>
                            <?php elseif (($term->name == '学童クラブ')) : ?>
                                <div>
                                    <?php get_template_part('images/svg/icon_gakudou'); ?>
                                    <h2 class="sub-ttl brown"><?= $term->name ?></h2>
                                </div>
                            <?php elseif (($term->name == '児童発達支援事業所')) : ?>
                                <div>
                                    <?php get_template_part('images/svg/icon_hattatusien'); ?>
                                    <h2 class="sub-ttl brown"><?= $term->name ?></h2>
                                </div>
                            <?php else : ?>
                                <h2 class="sub-ttl brown"><?= $term->name ?></h2>
                            <?php endif; ?>
                            <span class="pc"><?php get_template_part('images/svg/leaf_r'); ?></span>
                            <span class="sp"><?php get_template_part('images/svg/leaf_r_sp'); ?></span>
                        </div>
                        <?php if ($the_query->have_posts()) : ?>
                            <div class="facility-flex box">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <ul class="facility-box">
                                        <a href="<?= get_field('houjin_facility_url') ?>" target="_blank" rel="noopener">
                                            <li class="facility-name n-txt_b brown"><?php the_title() ?></li>
                                            <li class="facility-img">
                                                <?php $kinds = get_the_terms($post->ID, 'houjin_facility_info'); ?>
                                                <?php if (!empty($kinds)) : ?>
                                                    <div class="tag-content">
                                                        <ul>
                                                            <?php foreach ($kinds as $term) : ?>
                                                                <li class="tag-name n-txt_b white"><?= $term->name ?></li><br>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                                <img src="<?= get_field('houjin_facility_image') ?>" width="480px" height="261px" alt="運営施設写真">
                                            </li>
                                            <li class="facility-addnum n-txt_m"><?= get_field('houjin_facility_address_num') ?></li>
                                            <li class="facility-add n-txt_m"><?= get_field('houjin_facility_address') ?></li>
                                            <li class="facility-tel n-txt_m">TEL：<?= get_field('houjin_facility_tell') ?></li>
                                        </a>
                                    </ul>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <!-- <section id="section-houjin-support" class="houjin-support">
        <div class="page-width">
            <div class="speech-mark">
                <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                <h2 class="houjin-ttl">子育て支援事業</h2>
                <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
            </div>
            <div class="houjin-support__content">
                <div class="houjin-support__content--top box-b">
                    <p class="sub-ttl brown center"><?= get_theme_mod('houjin_support_sub_title'); ?></p>
                    <p class="n-txt_m center"><?= get_theme_mod('houjin_support_sub_text'); ?></p>
                    <div class="circle-flex">
                        <p class="circle sub-ttl brown"><?= nl2br(get_theme_mod('houjin_support_circle_01')); ?></p>
                        <p class="circle sub-ttl brown"><?= nl2br(get_theme_mod('houjin_support_circle_02')); ?></p>
                        <p class="circle sub-ttl brown"><?= nl2br(get_theme_mod('houjin_support_circle_03')); ?></p>
                    </div>
                </div>
                <div class="double-leaf fluffy">
                    <span class="pc"><?php get_template_part('images/svg/leaf_l'); ?></span>
                    <span class="sp"><?php get_template_part('images/svg/leaf_l_sp'); ?></span>
                    <p class="sub-ttl brown"><?= get_theme_mod('houjin_support_second_sub_title'); ?></p>
                    <span class="pc"><?php get_template_part('images/svg/leaf_r'); ?></span>
                    <span class="sp"><?php get_template_part('images/svg/leaf_r_sp'); ?></span>
                </div>
                <div class="houjin-support__content--bottom box-b">
                    <p class="n-txt_m center"><?= nl2br(get_theme_mod('houjin_support_second_sub_text')); ?></p>
                    <div class="facility-flex">
                        <?php $args = array(
                            'numberposts' => -1, //表示したい記事の数
                            'post_type' => 'houjin_support' //カスタム投稿で作成した投稿タイプ
                        );
                        $customPosts = get_posts($args);
                        if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                        ?>
                                <ul class="facility-box">
                                    <a href="<?= get_field('houjin_support_facility_link') ?>" target="_blank" rel="noopener">
                                        <li class="facility-name n-txt_b brown"><?php the_title(); ?></li>
                                        <li class="facility-img"><img src="<?= get_field('houjin_support_facility_image') ?>" width="480px" height="261px" alt="子育て支援事業写真"></li>
                                        <li class="facility-addnum n-txt_m"><?= get_field('houjin_support_facility_address_num') ?></li>
                                        <li class="facility-add n-txt_m"><?= get_field('houjin_support_facility_address') ?></li>
                                    </a>
                                </ul>
                            <?php endforeach; ?>
                        <?php else : //記事が無い場合
                        ?>
                            <p class="n-txt_m">カスタム投稿記事がありません。</p>
                        <?php endif;
                        wp_reset_postdata(); //クエリのリセット
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="section-houjin-activity" class="houjin-activity">
        <div class="page-width">
            <div class="speech-mark">
                <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                <h2 class="houjin-ttl">地域活動</h2>
                <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
            </div>
            <div class="houjin-activity__content">
                <div class="houjin-activity__content--box bg-radius box-b1">
                    <p class="active-ttl sub-ttl brown"><?= get_theme_mod('houjin_activities_title_01'); ?></p>
                    <img src="<?= get_theme_mod('houjin_activities_image_01') ?>" width="292px" height="159px" alt="保育士体験">
                    <p class="active-txt n-txt_m"><?= get_theme_mod('houjin_activities_text_01'); ?></p>
                </div>
                <div class="houjin-activity__content--box bg-radius box-b2">
                    <p class="active-ttl sub-ttl brown"><?= get_theme_mod('houjin_activities_title_02'); ?></p>
                    <img src="<?= get_theme_mod('houjin_activities_image_02') ?>" width="292px" height="159px" alt="世代間交流">
                    <p class="active-txt n-txt_m"><?= get_theme_mod('houjin_activities_text_02'); ?></p>
                </div>
                <div class="houjin-activity__content--box bg-radius box-b3">
                    <p class="active-ttl sub-ttl brown"><?= get_theme_mod('houjin_activities_title_03'); ?></p>
                    <img src="<?= get_theme_mod('houjin_activities_image_03') ?>" width="292px" height="159px" alt="ボランティア活動">
                    <p class="active-txt n-txt_m"><?= get_theme_mod('houjin_activities_text_03'); ?></p>
                </div>
            </div>
        </div>
    </section> -->

    <section id="section-houjin-history" class="houjin-history">
        <div class="page-width">
            <div class="speech-mark">
                <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                <h2 class="houjin-ttl">沿革</h2>
                <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
            </div>
            <div class="houjin-history__content">
                <ul>
                    <?php
                    $gallery_group = SCF::get('houjin_history');
                    foreach ($gallery_group as $fields) :
                    ?>
                        <li class="box-b1">
                            <div>
                                <p class="history-year n-txt_b brown"><span class="list"></span><?= $fields['houjin_history_time']; ?></p>
                                <p class="history-txt n-txt_m"><?= nl2br($fields['houjin_history_content']); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section id="section-houjin-info" class="houjin-info">
        <div class="page-width">
            <div class="houjin-info__content">
                <div class="speech-mark">
                    <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                    <h2 class="houjin-ttl">法人情報</h2>
                    <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
                </div>
                <div class="houjin-info__content--about">
                    <div class="double-leaf fluffy">
                        <span class="pc"><?php get_template_part('images/svg/leaf_l'); ?></span>
                        <span class="sp"><?php get_template_part('images/svg/leaf_l_sp'); ?></span>
                        <p class="sub-ttl brown">法人概要</p>
                        <span class="pc"><?php get_template_part('images/svg/leaf_r'); ?></span>
                        <span class="sp"><?php get_template_part('images/svg/leaf_r_sp'); ?></span>
                    </div>
                    <div class="about-box bg-radius box-b">
                        <dl>
                            <dt class="n-txt_b brown">名称</dt>
                            <dd class="n-txt_m"><?= $theme_options['op_0'] ?></dd>
                        </dl>
                        <dl>
                            <dt class="n-txt_b brown">所在地</dt>
                            <dd class="address n-txt_m"><a href="#footer-info" rel="noopener"><?= $theme_options['op_2'] ?> <br class="brsp"><?= $theme_options['op_3'] ?></a></dd>
                        </dl>
                        <dl>
                            <dt class="n-txt_b brown">電話番号</dt>
                            <dd class="n-txt_m"><?= $theme_options['op_4'] ?></dd>
                        </dl>
                        <dl>
                            <dt class="n-txt_b brown">FAX</dt>
                            <dd class="n-txt_m"><?= $theme_options['op_5'] ?></dd>
                        </dl>
                        <!-- <dl>
                            <dt class="n-txt_b brown">メール</dt>
                            <dd class="n-txt_m"><?= $theme_options['op_6'] ?></dd>
                        </dl> -->
                        <dl>
                            <dt class="n-txt_b brown">設立年月</dt>
                            <dd class="n-txt_m"><?= $theme_options['op_7'] ?></dd>
                        </dl>
                        <dl>
                            <dt class="n-txt_b brown">代表者</dt>
                            <dd class="n-txt_m"><?= $theme_options['op_8'] ?></dd>
                        </dl>
                    </div>
                </div>

                <div class="houjin-info__content--plan">
                    <div class="double-leaf fluffy">
                        <span class="pc"><?php get_template_part('images/svg/leaf_l'); ?></span>
                        <span class="sp"><?php get_template_part('images/svg/leaf_l_sp'); ?></span>
                        <p class="sub-ttl brown">一般事業主行動計画</p>
                        <span class="pc"><?php get_template_part('images/svg/leaf_r'); ?></span>
                        <span class="sp"><?php get_template_part('images/svg/leaf_r_sp'); ?></span>
                    </div>
                    <p class="annotation n-txt_m box-b"><?php echo nl2br(get_theme_mod('houjin_plan_text')); ?></p>
                    <ul class="disc-flex bg-radius box-b">
                        <?php $args = array(
                            'numberposts' => -1, //表示したい記事の数
                            'post_type' => 'houjin_plan' //カスタム投稿で作成した投稿タイプ
                        );
                        $customPosts = get_posts($args);
                        if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                        ?>
                                <li class="n-txt_b brown">
                                    <?php $houjin_plan_file = get_post_meta($post->ID, 'houjin_plan_file', true); ?>
                                    <a href="<?= get_field('houjin_plan_file') ?>" target="_blank" rel="noopener">
                                        <?php the_title(); ?><?php get_template_part('images/svg/mini_path'); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                    </ul>
                <?php else : //記事が無い場合
                ?>
                    <p class="n-txt_m">カスタム投稿記事がありません。</p>
                <?php endif;
                        wp_reset_postdata(); //クエリのリセット
                ?>
                </div>

                <!-- 追加用 豊津様から要望があれば使いますので触らないようにお願いします。============================================================== -->
                <!-- メモ：CPTUI追加、カスタムフィールド追加 -->
                <!-- メモ：houjin-theme-customizer編集 -->

                <!-- <div class="houjin-info__content--disc">
                    <div class="double-leaf fluffy">
                        <span class="pc"><?php //get_template_part('images/svg/leaf_l');
                                            ?></span>
                        <span class="sp"><?php //get_template_part('images/svg/leaf_l_sp');
                                            ?></span>
                        <p class="sub-ttl brown">一般事業主行動計画</p>
                        <span class="pc"><?php //get_template_part('images/svg/leaf_r');
                                            ?></span>
                        <span class="sp"><?php //get_template_part('images/svg/leaf_r_sp');
                                            ?></span>
                    </div>
                <p class="annotation n-txt_m"><?php //echo get_theme_mod('houjin_info_caution');
                                                ?></p>

                    <ul class="disc-flex bg-radius box-b">
                        <?php
                        // $args = array(
                        //     'numberposts' => -1, //表示したい記事の数
                        //     'post_type' => 'houjin_plan' //追加時はここ変更します。あとhoujin_plan_fileも新しいカスタムフィールドと同じものにします。
                        // );
                        // $customPosts = get_posts($args);
                        // if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                        ?>
                                <li class="n-txt_b brown">
                                    <?php //$houjin_plan_file = get_post_meta($post->ID, 'houjin_plan_file', true);
                                    ?>
                                    <a href="<?php //echo get_field('houjin_plan_file')
                                                ?>" target="_blank" rel="noopener">
                                        <?php //the_title();
                                        ?><?php //get_template_part('images/svg/mini_path');
                                            ?>
                                    </a>
                                </li>
                            <?php //endforeach;
                            ?>
                    </ul>
                <?php //else : //記事が無い場合
                ?>
                    <p class="n-txt_m">カスタム投稿記事がありません。</p>
                <?php //endif;
                //wp_reset_postdata(); //クエリのリセット
                ?>
                </div> -->

                <!-- <div class="houjin-info__content--disc">
                    <div class="double-leaf fluffy">
                        <span class="pc"><?php //get_template_part('images/svg/leaf_l');
                                            ?></span>
                                            <span class="sp"><?php //get_template_part('images/svg/leaf_l_sp');
                                                                ?></span>
                                            <p class="sub-ttl brown">一般事業主行動計画</p>
                                            <span class="pc"><?php //get_template_part('images/svg/leaf_r');
                                                                ?></span>
                                            <span class="sp"><?php //get_template_part('images/svg/leaf_r_sp');
                                                                ?></span>
                                        </div>
                <p class="annotation n-txt_m"><?php //echo get_theme_mod('houjin_info_caution');
                                                ?></p>

                                        <ul class="disc-flex bg-radius box-b">
                                            <?php
                                            // $args = array(
                                            //     'numberposts' => -1, //表示したい記事の数
                                            //     'post_type' => 'houjin_plan' //追加時はここ変更します。あとhoujin_plan_fileも新しいカスタムフィールドと同じものにします。
                                            // );
                                            // $customPosts = get_posts($args);
                                            // if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                                            ?>
                                                    <li class="n-txt_b brown">
                                                        <?php //$houjin_plan_file = get_post_meta($post->ID, 'houjin_plan_file', true);
                                                        ?>
                                                        <a href="<?php //echo get_field('houjin_plan_file')
                                                                    ?>" target="_blank" rel="noopener">
                                                            <?php //the_title();
                                                            ?><?php //get_template_part('images/svg/mini_path');
                                                                ?>
                                                        </a>
                                                    </li>
                                                <?php //endforeach;
                                                ?>
                                        </ul>
                                    <?php //else : //記事が無い場合
                                    ?>
                                        <p class="n-txt_m">カスタム投稿記事がありません。</p>
                                    <?php //endif;
                                    //wp_reset_postdata(); //クエリのリセット
                                    ?>
                                    </div> -->

                <!-- 追加用 豊津様から要望があれば使いますので触らないようにお願いします。============================================================== -->



                <div class="houjin-info__content--disc">
                    <div class="double-leaf fluffy">
                        <span class="pc"><?php get_template_part('images/svg/leaf_l'); ?></span>
                        <span class="sp"><?php get_template_part('images/svg/leaf_l_sp'); ?></span>
                        <p class="sub-ttl brown">情報公開</p>
                        <span class="pc"><?php get_template_part('images/svg/leaf_r'); ?></span>
                        <span class="sp"><?php get_template_part('images/svg/leaf_r_sp'); ?></span>
                    </div>
                    <ul class="disc-flex bg-radius box-b">
                        <?php $args = array(
                            'numberposts' => -1, //表示したい記事の数
                            'post_type' => 'houjin_info' //カスタム投稿で作成した投稿タイプ
                        );
                        $customPosts = get_posts($args);
                        if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                        ?>
                                <li class="n-txt_b brown">
                                    <?php $houjin_info_file = get_post_meta($post->ID, 'houjin_info_file', true); ?>
                                    <?php if ($houjin_info_file) : ?>
                                        <a href="<?= get_field('houjin_info_file') ?>" target="_blank" rel="noopener">
                                            <?php the_title(); ?><?php get_template_part('images/svg/mini_path'); ?>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?= get_field('houjin_info_link') ?>" target="_blank" rel="noopener"><?php the_title(); ?><?php get_template_part('images/svg/mini_path'); ?></a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                    </ul>
                <?php else : //記事が無い場合
                ?>
                    <p class="n-txt_m">カスタム投稿記事がありません。</p>
                <?php endif;
                        wp_reset_postdata(); //クエリのリセット
                ?>
                <p class="annotation n-txt_m box-b"><?= get_theme_mod('houjin_info_caution'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-houjin-contact" class="houjin-contact">
        <div class="page-width">
            <div class="houjin-contact__content">
                <div class="speech-mark">
                    <span class="mark"><?php get_template_part('images/svg/mark'); ?></span>
                    <h2 class="houjin-ttl">お問い合わせ</h2>
                    <span class="speech"><?php get_template_part('images/svg/speech_bubble'); ?></span>
                </div>
                <ul class="houjin-contact__content--txtlist box-b">
                    <li class="n-txt_m">「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</li>
                    <li class="n-txt_m">ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</li>
                    <li class="n-txt_m">返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</li>
                    <li class="n-txt_m">万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</li>
                </ul>
                <div class="houjin-contact__content--form box-b">
                    <?= do_shortcode('[contact-form-7 id="3813" title="お問い合わせ"]') ?>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $('.houjin-mv').slick({
        dots: true,
        arrow: false,
        autoplay: true,
        autoplaySpeed: 5000,
    });
</script>
<?php get_footer(); ?>