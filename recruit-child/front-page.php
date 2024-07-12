<?php get_header(); ?>
<?php get_template_part('template-parts/recruit-load-animation'); ?>
<style>
    /* 無効化されたラジオボタンに対応するlabelのスタイル */
    label.disabled {
        opacity: 0.5;
    }
</style>

<main class="wrap">

    <div class="mainvisual">
        <div class="recruit-child-mv recruit-child-mv-pc">
            <?php if (get_theme_mod('recruit_mv') && !get_theme_mod('recruit_mv') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_02') && !get_theme_mod('recruit_mv_02') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_03') && !get_theme_mod('recruit_mv_03') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_04') && !get_theme_mod('recruit_mv_04') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_05') && !get_theme_mod('recruit_mv_05') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>

        <div class="recruit-child-mv recruit-child-mv-sp">
            <?php if (get_theme_mod('recruit_mv_sp01') && !get_theme_mod('recruit_mv') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_sp01'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_sp02') && !get_theme_mod('recruit_mv_02') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_sp02'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_sp03') && !get_theme_mod('recruit_mv_03') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_sp03'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_sp04') && !get_theme_mod('recruit_mv_04') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_sp04'); ?>" alt="メインビジュアル">
            <?php endif; ?>
            <?php if (get_theme_mod('recruit_mv_sp05') && !get_theme_mod('recruit_mv_05') == "") : ?>
                <img src="<?php echo get_theme_mod('recruit_mv_sp05'); ?>" alt="メインビジュアル">
            <?php endif; ?>
        </div>
        <div class="logo">
            <img src="<?php echo get_theme_mod('recruit_logo'); ?>" alt="ロゴ">
            <p class="logo-text pc"><?php echo get_theme_mod('recruit_text'); ?></p>
            <p class="logo-text sp"><?php echo nl2br(get_theme_mod('recruit_text_sp')); ?></p>
        </div>
    </div>

    <section id="section-recruit-status" class="border-back">
        <div class="page-width">
            <div class="single-line-head nomal">
                <span class="pc"><?php get_template_part('images/svg/title-line-01-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title01'); ?></span>
                <h2>募集状況</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-01-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title02'); ?></span>
            </div>
            <div class="recruit-status box">
                <?php
                $terms = get_terms('recruit_category');
                $status_count = 0;
                foreach ($terms as $term) : ?>
                    <a class="recruit-status__item status<?= $status_count ?>" data-filter="<?= $term->term_id ?>" href="#section-recruit-desc">
                        <img src=" <?= get_stylesheet_directory_uri(); ?>/images/logomark_silhouette.png" alt="">
                        <div class="recruit-status__item--info">
                            <p class="title"><?= $term->name ?></p>
                            <div class="text">
                                <p><?= $term->count; ?>件 </p>
                                <span class="pc"><?php get_template_part('images/svg/icon-link'); ?></span>

                            </div>
                        </div>
                    </a>
                    <?php $status_count++ ?>
                <?php endforeach; ?>
            </div>
            <a href="#section-recruit-desc" class="black-border-button nomal">募集要項一覧<?php get_template_part('images/svg/icon-link'); ?></a>
        </div>
    </section>

    <section id="section-recruit-news" class="cream-back">
        <div class="page-width">
            <div class="double-line-head nomal">
                <span class="pc"><?php get_template_part('images/svg/title-line-02-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-l-sp'); ?></span>
                <h2>お知らせ</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-02-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-r-sp'); ?></span>
            </div>
            <div class="recruit-news status1">
                <div class="recruit-news__area">
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

    <section id="section-recruit-message" class="border-back">
        <div class="page-width">
            <div class="single-line-head nomal">
                <span class="pc"><?php get_template_part('images/svg/title-line-01-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title01'); ?></span>
                <h2>メッセージ</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-01-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title02'); ?></span>
            </div>
            <div class="recruit-message">
                <p class="recruit-message__title pc strong"><?php echo nl2br(get_theme_mod('recruit_message_title')); ?></p>
                <p class="recruit-message__title sp strong"><?php echo get_theme_mod('recruit_message_title'); ?></p>

                <p class="recruit-message__text pc strong"><?php echo nl2br(get_theme_mod('recruit_message_text')); ?></p>
                <p class="recruit-message__text sp strong"><?php echo get_theme_mod('recruit_message_text'); ?></p>
            </div>
            <div class="message-img strong" style="background-image: url(<?php echo get_theme_mod('recruit_message_img'); ?>)"></div>
        </div>
    </section>

    <section id="section-recruit-keyword" class="cream-back">
        <div class="page-width sp">
            <div class="double-line-head nomal">
                <span class="sp"><?php get_template_part('images/svg/title-line-02-l-sp'); ?></span>
                <h2>キーワード</h2>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-r-sp'); ?></span>
            </div>
        </div>

        <div class="background">
            <div class="page-width pc">
                <div class="double-line-head nomal">
                    <span class="pc"><?php get_template_part('images/svg/title-line-02-l-pc'); ?></span>
                    <h2>キーワード</h2>
                    <span class="pc"><?php get_template_part('images/svg/title-line-02-r-pc'); ?></span>
                </div>
            </div>

            <div class="page-width">
                <div class="keyword-area">
                    <?php
                    $groupA = SCF::get('keyword');
                    $status_count = 0;

                    foreach ($groupA as $fields) :
                        $item = get_post_meta(get_the_ID(), 'keyword_icon');
                        $imgurl = wp_get_attachment_image_src($fields['keyword_icon'], 'full');
                    ?>
                        <?php if ($status_count >= 4) $status_count = 0;  ?>
                        <div class="keyword-area__card status<?= $status_count ?>">
                            <img class="keyword-area__card--icon" src="<?= $imgurl[0] ?>" alt="">
                            <p class="keyword-area__card--title"><?php echo nl2br($fields['keyword_text']); ?></p>

                        </div>
                        <?php $status_count++; ?>
                    <?php endforeach; ?>

                </div>
                <p class="keyword-notes"><?= get_field("keyword_notes"); ?></p>

            </div>

        </div>

    </section>

    <section id="section-recruit-reason" class="border-back">
        <div class="page-width">
            <div class="single-line-head nomal">
                <span class="pc"><?php get_template_part('images/svg/title-line-01-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title01'); ?></span>
                <h2>働きやすい理由</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-01-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title02'); ?></span>
            </div>
            <?php if (!empty(get_field('work_reason_title'))) :  ?>
                <article class="recruit-reason left-slide reason01">
                    <p>1つ目の理由</p>
                    <p class="recruit-reason__title"><?php echo get_field('work_reason_title'); ?></p>
                    <div class="recruit-reason__content">
                        <img class="recruit-reason__content--image" src="<?php echo get_field('work_reason_image'); ?>" alt="">
                        <p class="recruit-reason__content--text "><?php echo nl2br(get_field('work_reason_text')); ?></p>
                    </div>

                </article>
            <?php endif; ?>
            <?php if (!empty(get_field('work_reason_title_02'))) :  ?>
                <article class="recruit-reason right-slide reason02">
                    <p>2つ目の理由</p>
                    <p class="recruit-reason__title"><?php echo get_field('work_reason_title_02'); ?></p>
                    <div class="recruit-reason__content reverse">
                        <p class="recruit-reason__content--text "><?php echo nl2br(get_field('work_reason_text_02')); ?></p>
                        <img class="recruit-reason__content--image" src="<?php echo get_field('work_reason_image_02'); ?>" alt="">
                    </div>
                </article>
            <?php endif; ?>
            <?php if (!empty(get_field('work_reason_title_03'))) :  ?>
                <article class="recruit-reason left-slide reason03">
                    <p>3つ目の理由</p>
                    <p class="recruit-reason__title"><?php echo get_field('work_reason_title_03'); ?></p>
                    <div class="recruit-reason__content">
                        <img class="recruit-reason__content--image" src="<?php echo get_field('work_reason_image_03'); ?>" alt="">
                        <p class="recruit-reason__content--text"><?php echo nl2br(get_field('work_reason_text_03')); ?></p>
                    </div>
                </article>
            <?php endif; ?>
        </div>

    </section>

    <section id="section-recruit-day-flow" class="cream-back">
        <div class="page-width">
            <div class="double-line-head nomal">
                <span class="pc"><?php get_template_part('images/svg/title-line-02-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-l-sp'); ?></span>
                <h2>一日の流れ</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-02-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-r-sp'); ?></span>
            </div>
        </div>

        <div class="flow-back">
            <div class="page-width">
                <div class="recruit-day-flow">
                    <?php for ($i = 1; $i <= 8; $i++) : ?>
                        <?php if (!empty(get_theme_mod('recruit_flow_time_0' . $i))) : ?>
                            <article class="recruit-day-flow__content strong">
                                <p class="recruit-day-flow__content--time"><?php echo get_theme_mod('recruit_flow_time_0' . $i); ?></p>
                                <div class="flow-text">
                                    <div class="flow-text__text">
                                        <p class="item-title"><?php echo get_theme_mod('recruit_flow_title_0' . $i); ?></p>
                                        <p><?php echo get_theme_mod('recruit_flow_text_0' . $i); ?></p>
                                    </div>
                                    <div class="flow-text__image">
                                        <img src="<?php echo get_theme_mod('recruit_flow_img_0' . $i); ?>" alt="一日の流れ">
                                    </div>
                                </div>
                            </article>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <p class="model"><?= get_theme_mod('recruit_flow_caution'); ?></p>
                </div>
            </div>
        </div>

    </section>

    <section id="section-recruit-staff" class="border-back">
        <div class="page-width">
            <div class="single-line-head nomal">
                <span class="pc"><?php get_template_part('images/svg/title-line-01-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title01'); ?></span>
                <h2>先輩の声</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-01-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title02'); ?></span>
            </div>
            <div class="staff-voice">
                <?php $args = array(
                    'numberposts' => -1,
                    'post_type' => 'staff-voice'
                );
                $customPosts = get_posts($args);
                if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                ?>
                        <div class="staff-voice__item">
                            <img src="<?= get_field('staff_image'); ?>" alt="" class="strong">
                            <div class="staff-voice__item--speech-box status1">
                                <div class="txt">
                                    <p class="name"><?= get_field('staff_name'); ?></p>
                                    <p class="area"><?= get_field('staff_area'); ?></p>
                                    <p class="job"><?= get_field('staff_job'); ?></p>
                                    <p><?= get_field('staff_text'); ?></p>
                                </div>
                            </div>

                        </div>

                    <?php endforeach; ?>
                <?php else : //記事が無い場合
                ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif;
                wp_reset_postdata(); //クエリのリセット
                ?>
            </div>
        </div>

    </section>



    <section id="section-recruit-desc" class="cream-back">
        <div class="page-width">
            <div class="double-line-head">
                <span class="pc"><?php get_template_part('images/svg/title-line-02-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-l-sp'); ?></span>
                <h2>募集要項</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-02-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/title-line-02-r-sp'); ?></span>
            </div>

            <div class="selector recruit-class">
                <h3 class="recruit-class__title">採用区分を選択してください。</h3>

                <ul class="category_inner category__box" id="filter_category">
                    <?php
                    $terms = get_terms('recruit_category');
                    $count = 0;

                    foreach ($terms as  $term) {
                        if ($term->count != 0) {
                            if ($count == 0) {
                                echo '<li class="black-border-button active cat-button cat-button' . $count . '"data-filter="' . $term->term_id . '" data-taxo_name="recruit_category">' . $term->name . '</li>'; //タームのリンク
                                $current_term = $term;
                            } else {
                                echo '<li class="black-border-button cat-button cat-button' . $count . '"data-filter="' . $term->term_id . '" data-taxo_name="recruit_category">' . $term->name . '</li>'; //タームのリンク
                            }
                            $count++;
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="recruit-desc">
                <div class="item-list recruit-desc__content">
                    <div class="item-list__inner" id="item-list-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'custom-recruit',  //カスタム投稿タイプ名
                        );
                        function the_terms_data_cat($post_terms_recruit_category)
                        {
                            if (!empty($post_terms_recruit_category)) {
                                foreach ($post_terms_recruit_category as $post_term) {
                                    echo 'data-' . $post_term->taxonomy . '="' . $post_term->term_id . '" ';
                                }
                            }
                        }
                        function the_terms_data_aera($post_terms_recruit_area)
                        {
                            if (!empty($post_terms_recruit_category)) {
                                foreach ($post_terms_recruit_category as $post_term) {
                                    echo 'data-' . $post_term->taxonomy . '="' . $post_term->term_id . '" ';
                                }
                            }
                        }
                        function the_terms_data_job($post_terms_recruit_job)
                        {
                            if (!empty($post_terms_recruit_category)) {
                                foreach ($post_terms_recruit_category as $post_term) {
                                    echo 'data-' . $post_term->taxonomy . '="' . $post_term->term_id . '" ';
                                }
                            }
                        }
                        ?>
                        <?php
                        $myposts = new WP_Query($args);
                        $article_cunt = 1;
                        $article_open = 300;
                        if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post();
                        ?>
                                <?php
                                $post_terms_recruit_category = get_the_terms($post->id, 'recruit_category');
                                $post_terms_recruit_area = get_the_terms($post->id, 'recruit_area');
                                $post_terms_recruit_job = get_the_terms($post->id, 'recruit_job');
                                $recruit_category_id = -1;
                                $recruit_area_id = -1;
                                $recruit_job_id = -1;
                                if (!empty($post_terms_recruit_category)) {
                                    foreach ($post_terms_recruit_category as $post_term) {
                                        if ($post_term->taxonomy == 'recruit_category') {
                                            $recruit_category_id = $post_term->term_id;
                                        }
                                    }
                                }
                                if (!empty($post_terms_recruit_area)) {
                                    foreach ($post_terms_recruit_area as $post_term) {
                                        if ($post_term->taxonomy == 'recruit_area') {
                                            $recruit_area_id = $post_term->term_id;
                                        }
                                    }
                                }
                                if (!empty($post_terms_recruit_job)) {
                                    foreach ($post_terms_recruit_job as $post_term) {
                                        if ($post_term->taxonomy == 'recruit_job') {
                                            $recruit_job_id = $post_term->term_id;
                                        }
                                    }
                                }

                                ?>
                                <article id="item_<?= get_the_ID(); ?>" class="item recruit-desc-item <?php if ($current_term->term_id == $recruit_category_id) echo 'show'; ?>" <?php the_terms_data_cat($post_terms_recruit_category) ?> <?php the_terms_data_aera($post_terms_recruit_area) ?> <?php the_terms_data_job($post_terms_recruit_job) ?> <?php if ($article_cunt > $article_open) echo 'style="display:none"'; ?> data-category="<?= $recruit_category_id ?>" data-area="<?= $recruit_area_id ?>" data-job="<?= $recruit_job_id ?>">
                                    <div class="recruit-desc-item__titles ac-parent">
                                        <div class="recruit-desc-item__titles--area">
                                            <div class="item__right--category ">
                                                <?php
                                                foreach ($post_terms_recruit_category as $post_term) {
                                                    echo '<p class="cat-name">' . $post_term->name . '</p>';
                                                }
                                                foreach ($post_terms_recruit_area as $post_term) {
                                                    echo '<p class="cat-name">' . $post_term->name . '</p>';
                                                }
                                                foreach ($post_terms_recruit_job as $post_term) {
                                                    echo '<p class="cat-name">' . $post_term->name . '</p>';
                                                }
                                                ?>
                                            </div>
                                            <h3><?php
                                                $ID = get_the_ID(); //PHP8IDの未定義エラーが出たため追記
                                                $title = get_the_title($ID);
                                                $title = str_replace("　", "<br>", $title);
                                                echo $title;
                                                ?></h3>
                                        </div>
                                        <div class="ac-arrow">
                                            <?php get_template_part('images/svg/recruit-ac'); ?>
                                        </div>
                                    </div>

                                    <div class="ac-child recruit-detail">
                                        <div class="recruit-detail__row">
                                            <p class="recruit-detail__row--title">募集職種</p>
                                            <p>
                                                <?php
                                                $cats = get_the_terms(get_the_ID(), 'recruit_job');
                                                if (!empty($cats)) {
                                                    foreach ($cats as $cat) {
                                                        echo $cat->name;
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="recruit-detail__row">
                                            <p class="recruit-detail__row--title">採用区分</p>
                                            <p>
                                                <?php
                                                $jobs = get_the_terms(get_the_ID(), 'recruit_category');
                                                if (!empty($jobs)) {
                                                    foreach ($jobs as $job) {
                                                        echo $job->name;
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <?php if (get_field('recruit_post_job')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">業務内容</p>
                                                <p><?= get_field('recruit_post_job'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_area')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">勤務地</p>
                                                <p><?= get_field('recruit_post_area'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_entry')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">必要な資格</p>
                                                <p><?= nl2br(get_field('recruit_post_entry')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_time')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">勤務時間</p>
                                                <p><?= get_field('recruit_post_time'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_people')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">採用人数</p>
                                                <p><?= get_field('recruit_post_people'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_service')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">福利厚生</p>
                                                <p><?= get_field('recruit_post_service'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_holiday')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">休日休暇</p>
                                                <p><?= get_field('recruit_post_holiday'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_pay')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">給与</p>
                                                <p><?= get_field('recruit_post_pay'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_bonus')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">賞与</p>
                                                <p><?= get_field('recruit_post_bonus'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_rize')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">昇給</p>
                                                <p><?= get_field('recruit_post_rize'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_various')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">諸手当</p>
                                                <p><?= get_field('recruit_post_various'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_paper')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">応募書類</p>
                                                <p><?= get_field('recruit_post_paper'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_test')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">試験内容</p>
                                                <p><?= get_field('recruit_post_test'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_testsite')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">試験会場</p>
                                                <p><?= get_field('recruit_post_testsite'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_field('recruit_post_how')) :  ?>
                                            <div class="recruit-detail__row">
                                                <p class="recruit-detail__row--title">応募方法</p>
                                                <p><?= get_field('recruit_post_how'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <div class="recruit-detail__row double-button-center">
                                            <a class="black-border-button" href="<?= home_url() ?>/entry?post_id=<?= get_the_ID() ?>">エントリー<?php get_template_part('images/svg/icon-link'); ?></a>
                                            <?php if (get_field('recruit_rezelva')) :  ?>
                                                <a class="black-border-button" href="<?= get_field('recruit_rezelva') ?>" target="_blank">見学・実習予約<?php get_template_part('images/svg/icon-anker-link'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="itempic">
                                        <?php $i = 0 ?>
                                        <?php while ($i < 5) : ?>
                                            <?
                                            global $post;
                                            $post_id = get_the_ID(); //PHP8IDの未定義エラーが出たため追記
                                            $mirror_post = $post;
                                            $field_name = "item_" . $i;
                                            $field_label = get_field_object($field_name, $GLOBALS['post_id']);
                                            // $field_label = $field_label['label']; //PHP8でエラーが出たため削除
                                            ?>
                                            <?php if (get_field($field_name, $GLOBALS['post_id'])) : ?>
                                                <dl>
                                                    <dt class="itempic-title"><?= $field_label ?></dt>
                                                    <dd class="itempic-text"><?php the_field($field_name, $GLOBALS['post_id']); ?></dd>
                                                </dl>
                                            <?php endif; ?>
                                            <?php $i++; ?>
                                        <?php endwhile ?>
                                    </div>

                                </article>
                                <?php $article_cunt++; ?>
                        <?php endwhile;
                        endif; ?>
                        <?php wp_reset_query(); ?>
                        <article class="undefind" style="display: none;">
                            <p class="undefind-text">該当する求人がありません。</p>
                        </article>
                    </div>

                </div>

                <div class="category recruit-desc__side">
                    <div class="selector left">
                        <h3 class="semititle ac-parent">職種<?php get_template_part('images/svg/side-ac'); ?></h3>
                        <ul class="category_inner category__box ac-child" id="filter_job">
                            <?php
                            $terms = get_terms('recruit_job');
                            $job_count = 0;
                            foreach ($terms as $term) {
                                if ($term->count != 0) {
                                    echo '<li data-filter="' . $term->term_id . '" data-taxo_name="recruit_job" class="job-count' . $job_count . '">' . $term->name . "（" . $term->count . "）" . '</li>'; //タームのリンク
                                    $job_count++;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="selector right">
                        <h3 class="semititle ac-parent ">勤務地<?php get_template_part('images/svg/side-ac'); ?></h3>
                        <ul class="category_inner category__box ac-child open" id="filter_area">

                            <?php
                            $terms = get_terms('recruit_area');
                            foreach ($terms as $term) {
                                if ($term->count != 0) {
                                    echo '<li data-filter="' . $term->term_id . '" data-taxo_name="recruit_area">' . $term->name . "（" . $term->count . "）" . '</li>'; //タームのリンク
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-recruit-visit">
        <div class="visit-back">
            <div class="page-width">
                <div class="double-line-head nomal">
                    <span class="pc"><?php get_template_part('images/svg/title-line-02-l-pc'); ?></span>
                    <span class="sp"><?php get_template_part('images/svg/title-line-02-l-sp'); ?></span>
                    <h2>施設見学予約</h2>
                    <span class="pc"><?php get_template_part('images/svg/title-line-02-r-pc'); ?></span>
                    <span class="sp"><?php get_template_part('images/svg/title-line-02-r-sp'); ?></span>
                </div>
                <div class="contact-attension">
                    <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</p>
                    <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</p>
                    <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</p>
                    <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</p>
                </div>
                <div class="visit-form">
                    <?php echo do_shortcode('[contact-form-7 id="515" title="施設見学予約"]') ?>
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

    document.addEventListener('wpcf7mailsent', function(event) {
        alert("ありがとうございます。メッセージは送信されました。");
    }, false);
    document.addEventListener('wpcf7invalid', function(event) {
        alert("入力内容に不備があります。確認してもう一度送信してください。");
    }, false);
    document.addEventListener('wpcf7spam', function(event) {
        alert("メッセージの送信に失敗しました。間をおいてもう一度お試しいただくか、別の手段で管理者にお問い合わせ下さい。");
    }, false);
    document.addEventListener('wpcf7mailfailed', function(event) {
        alert("メッセージの送信に失敗しました。間をおいてもう一度お試しいただくか、別の手段で管理者にお問い合わせ下さい。");
    }, false);

    // 施設選択の重複を回避
    $(document).ready(function() {
        var selectedValues = {
            group_a: null,
            group_b: null,
            group_c: null
        };

        function updateRadioButtons() {
            // 全てのラジオボタンのdisabled属性をリセット
            $('.group_a input[type="radio"], .group_b input[type="radio"], .group_c input[type="radio"]').each(function() {
                $(this).prop('disabled', false).parent('label').removeClass('disabled');
            });

            // 各グループの選択された値に基づいて他のグループのラジオボタンを無効化
            $.each(selectedValues, function(group, value) {
                if (value) {
                    $('.group_a input[type="radio"], .group_b input[type="radio"], .group_c input[type="radio"]').not('.' + group + ' input[type="radio"]').each(function() {
                        if ($(this).val() === value) {
                            $(this).prop('disabled', true).parent('label').addClass('disabled');
                        }
                    });
                }
            });
        }

        // 各グループのラジオボタンの変更イベントを設定
        // 「選択しない」は重複させても大丈夫なように条件分岐
        $('.group_a input[type="radio"]').change(function() {
            selectedValues.group_a = $(this).val();
            updateRadioButtons();
        });

        $('.group_b input[type="radio"]').change(function() {
            if ($(this).val() === '選択しない') {

            } else {
                selectedValues.group_b = $(this).val();
                updateRadioButtons();
            }

        });

        $('.group_c input[type="radio"]').change(function() {
            if ($(this).val() === '選択しない') {} else {
                selectedValues.group_c = $(this).val();
                updateRadioButtons();
            }
        });
    });
</script>

<?php get_footer(); ?>