<?php get_header(); ?>
<?php get_template_part('template-parts/recruit-load-animation'); ?>

<main>
    <section id="entry">
        <div class="page-width">
            <div class="single-line-head">
                <span class="pc"><?php get_template_part('images/svg/title-line-01-l-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title01'); ?></span>
                <h2>エントリー</h2>
                <span class="pc"><?php get_template_part('images/svg/title-line-01-r-pc'); ?></span>
                <span class="sp"><?php get_template_part('images/svg/sp-title02'); ?></span>
            </div>
        </div>


        <div class="entry-back">
            <h3 class="entry-title">選択中の募集要項</h3>

            <div class="page-width">

                <div class="selected-recruit">
                    <div class="selected-recruit__area">
                        <article class="selected-recruit-item">
                            <div class="selected-recruit-item__titles">
                                <div class="item__right--category">
                                    <?php
                                    $post_id =  $_GET['post_id'];
                                    $post_info = get_post($post_id);
                                    $recruit_kind = "";
                                    $recruit_job = "";

                                    if ($post_id) {
                                        foreach (get_the_terms($post_id, 'recruit_category') as $val) {
                                            $recruit_kind = $val->name;
                                            echo '<p class="cat-name">' . $recruit_kind . '</p>';
                                        }
                                        foreach (get_the_terms($post_id, 'recruit_job') as $val) {
                                            $recruit_job = $val->name;
                                            echo '<p class="cat-name">' .  $recruit_job . '</p>';
                                        }
                                        foreach (get_the_terms($post_id, 'recruit_area') as $val) {
                                            echo '<p class="cat-name">' . $val->name . '</p>';
                                        }
                                    }
                                    ?>
                                </div>
                                <h3><?= $post_info->post_title; ?></h3>
                            </div>

                            <div class="selected-recruit-detail">
                                <div class="selected-recruit-detail__row">
                                    <p class="selected-recruit-detail__row--title">募集職種</p>
                                    <p><?= $recruit_job ?></p>
                                </div>
                                <div class="selected-recruit-detail__row">
                                    <p class="selected-recruit-detail__row--title">採用区分</p>
                                    <p><?= $recruit_kind ?></p>
                                </div>
                                <?php if (get_field('recruit_post_job', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">業務内容</p>
                                        <p><?= get_field('recruit_post_job', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_area', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">勤務地</p>
                                        <p><?= get_field('recruit_post_area', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_entry', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">応募資格</p>
                                        <p><?= get_field('recruit_post_entry', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_time', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">勤務時間</p>
                                        <p><?= get_field('recruit_post_time', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_people', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">採用人数</p>
                                        <p><?= get_field('recruit_post_people', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_service', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">福利厚生</p>
                                        <p><?= get_field('recruit_post_service', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_holiday', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">休日休暇</p>
                                        <p><?= get_field('recruit_post_holiday', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_pay', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">給与</p>
                                        <p><?= get_field('recruit_post_pay', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_bonus', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">賞与</p>
                                        <p><?= get_field('recruit_post_bonus', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_rize', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">昇給</p>
                                        <p><?= get_field('recruit_post_rize', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_various', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">諸手当</p>
                                        <p><?= get_field('recruit_post_various', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_paper', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">応募書類</p>
                                        <p><?= get_field('recruit_post_paper', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_test', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">試験内容</p>
                                        <p><?= get_field('recruit_post_test', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_testsite', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">試験会場</p>
                                        <p><?= get_field('recruit_post_testsite', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('recruit_post_how', $post_id)) : ?>
                                    <div class="selected-recruit-detail__row">
                                        <p class="selected-recruit-detail__row--title">応募方法</p>
                                        <p><?= get_field('recruit_post_how', $post_id); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                </div>


                <div class="entry-form">
                    <h3 class="entry-title">エントリーフォーム</h3>
                    <div class="contact-attension">
                        <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</p>
                        <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</p>
                        <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</p>
                        <p class="contact-attension__text"><?php get_template_part('images/svg/maru') ?>万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</p>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="72" title="エントリーフォーム"]') ?>
                    <button disabled id="submit-button" class="black-border-button">送信する<?php get_template_part('images/svg/icon-link'); ?></button>
                </div>

            </div>
        </div>


    </section>
</main>
<script>
    $('#submit-button').on('click', function() {
        $('form.wpcf7-form').submit();
    });
    $('#agree-button').on('click', function() {
        if ($('#agree-button').prop("checked") == true) {
            $('#submit-button').prop('disabled', false).css('cursor', 'pointer');
        } else {
            $('#submit-button').prop('disabled', true).css('cursor', 'not-allowed');

        }
    });

    $(function() {
        $(".wpcf7-form").prepend('<input type="hidden" name="institution" value="<?php echo esc_html($post_info->post_title); ?>">');
    });
</script>
<?php get_footer(); ?>