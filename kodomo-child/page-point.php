<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<main id="point">
	<!-- 保育・教育の特徴 -->
	<section class="feature">
		<div class="title glitter">
			<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/feature_icon.svg" />保育のこだわり</h2>
		</div>
		<div class="back box">
			<div class="linebox first-box">
				<div class="linebox__title">
					<p>1つ目のこだわり</p>
				</div>
				<div class="linebox__inner twoline">
					<div class="linebox__inner--pot">
						<?php for ($i = 0; $i <= 3; $i++) : ?>
							<?php if (wp_get_attachment_url(post_custom('childrens_point_sec_feature_img_00_0' . $i))) : ?>
								<img class="corner" src="<?= wp_get_attachment_url(post_custom('childrens_point_sec_feature_img_00_0' . $i)) ?>" alt="保育のこだわり">
							<?php endif; ?>
						<?php endfor; ?>
					</div>
					<div class="linebox__inner--text">
						<h3><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_feature_title_00', true)); ?></h3>
						<p><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_feature_text_00', true)); ?></p>
					</div>
				</div>
			</div>

			<div class="linebox second-box">
				<div class="linebox__title">
					<p>2つ目のこだわり</p>
				</div>
				<div class="linebox__inner twoline">
					<div class="linebox__inner--text">
						<h3><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_feature_title_01', true)); ?></h3>
						<p><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_feature_text_01', true)); ?></p>
					</div>
					<div class="linebox__inner--pot">
						<?php for ($i = 0; $i <= 3; $i++) : ?>
							<?php if (wp_get_attachment_url(post_custom('childrens_point_sec_feature_img_00_0' . $i))) : ?>
								<img class="corner" src="<?= wp_get_attachment_url(post_custom('childrens_point_sec_feature_img_01_0' . $i)) ?>" alt="保育のこだわり">
							<?php endif; ?>
						<?php endfor; ?>
					</div>
				</div>
			</div>

			<div class="linebox second-box">
				<div class="linebox__title">
					<p>3つ目のこだわり</p>
				</div>
				<div class="linebox__inner twoline">
					<div class="linebox__inner--pot">
						<?php for ($i = 0; $i <= 3; $i++) : ?>
							<?php if (wp_get_attachment_url(post_custom('childrens_point_sec_feature_img_00_0' . $i))) : ?>
								<img class="corner" src="<?= wp_get_attachment_url(post_custom('childrens_point_sec_feature_img_02_0' . $i)) ?>" alt="保育のこだわり">
							<?php endif; ?>
						<?php endfor; ?>
					</div>
					<div class="linebox__inner--text">
						<h3><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_feature_title_02', true)); ?></h3>
						<p><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_feature_text_02', true)); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 特別な保育・教育 -->
	<!-- <section class="education">
		<div class="title wood">
			<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/education_icon.svg" />特別な保育・教育</h2>
		</div>
		<div class="back point_education">
			<div class="twoflex box">
				<?php
				// $gallery_group = SCF::get('childrens_point_sec_special');
				// foreach ($gallery_group as $fields) :
				?>
					<div class="twoflex-box">
						<div class="center-text">
							<h3 class="subtitle"><?php //echo $fields['childrens_point_sec_special_title'];
													?></h3>
							<p><?php //echo $fields['childrens_point_sec_special_age'];
								?></p>
						</div>
						<p><?php //echo $fields['childrens_point_sec_special_text'];
							?></p>
					</div>
				<?php //endforeach;
				?>
			</div>
		</div>
	</section> -->

	<section class="education" id="education">
		<div class="title wood">
			<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/education_icon.svg" />その他の活動</h2>
		</div>

		<div class="center-text box first-box">
			<?php if (get_post_meta($post->ID, 'childrens_point_sec_other_activities_title_01', true) != "") : ?>
				<h3><?= get_post_meta($post->ID, 'childrens_point_sec_other_activities_title_01', true); ?></h3>
			<?php endif; ?>
			<?php if (get_post_meta($post->ID, 'childrens_point_sec_other_activities_text_01', true) != "") : ?>
				<p><?= get_post_meta($post->ID, 'childrens_point_sec_other_activities_text_01', true); ?></p>
			<?php endif; ?>
		</div>
		<div class="back point_education">
			<div class="twoflex box">
				<div class="listbox">
					<!-- flex-direction column推奨 -->
					<?php
					for ($i = 0; $i <= 9; $i++) :
					?>
						<?php if (get_post_meta($post->ID, 'childrens_point_sec_other_activities_0' . $i, true) != NULL || get_post_meta($post->ID, 'childrens_point_sec_other_activities_0' . $i, true) != '') : ?>

							<?php if ($i == 9) : ?>
								<?php if (get_post_meta($post->ID, 'childrens_point_sec_other_activities_0' . $i, true) != "") : ?>
									<div class="listbox-pic first-box">
										<p><span>10</span>　<?= get_post_meta($post->ID, 'childrens_point_sec_other_activities_0' . $i, true); ?></p>
									</div>
								<?php endif; ?>
							<?php else : ?>
								<div class="listbox-pic first-box">
									<p><span>0<?= $i + 1 ?></span>　<?= get_post_meta($post->ID, 'childrens_point_sec_other_activities_0' . $i, true); ?></p>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="slide_slick">
			<?php for ($i = 0; $i <= 9; $i++) : ?>
				<?php if (wp_get_attachment_url(post_custom('childrens_point_sec_other_activities_img_0' . $i)) != '' || wp_get_attachment_url(post_custom('childrens_point_sec_other_activities_img_0' . $i)) != NULL) : ?>
					<img class="corner" src="<?= wp_get_attachment_url(post_custom('childrens_point_sec_other_activities_img_0' . $i)) ?>" alt="その他の活動">
				<?php endif; ?>
			<?php endfor; ?>
		</div>
	</section>

	<!-- 食育 -->
	<section class="last food">
		<div class="title glitter">
			<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/food_icon.svg" />食育</h2>
		</div>
		<div class="center-text box first-box">
			<h3><?= get_post_meta($post->ID, 'childrens_point_sec_food_title', true); ?></h3>
			<p><?= nl2br(get_post_meta($post->ID, 'childrens_point_sec_food_text', true)); ?></p>
		</div>
		<div class="back point_food">
			<div class="twoflex box">
				<div class="listbox">
					<!-- flex-direction column推奨 -->
					<?php
					for ($i = 0; $i <= 6; $i++) :
					?>
						<?php if (get_post_meta($post->ID, 'childrens_point_sec_food_content_0' . $i, true) != NULL || get_post_meta($post->ID, 'childrens_point_sec_food_content_0' . $i, true) != '') : ?>
							<?php if (get_post_meta($post->ID, 'childrens_point_sec_food_content_0' . $i, true)) : ?>
								<div class="listbox-pic second-box">
									<?php if ($i == 10) : ?>
										<p><span><?= $i ?></span>　<?= get_post_meta($post->ID, 'childrens_point_sec_food_content_' . $i, true); ?></p>
									<?php else : ?>
										<p><span>0<?= $i ?></span>　<?= get_post_meta($post->ID, 'childrens_point_sec_food_content_0' . $i, true); ?></p>
									<?php endif; ?>
								</div>
							<?php elseif (get_post_meta($post->ID, 'childrens_point_sec_food_content_' . $i, true)) : ?>
								<div class="listbox-pic second-box">
									<p><span><?= $i ?></span>　<?= get_post_meta($post->ID, 'childrens_point_sec_food_content_' . $i, true); ?></p>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="slide_slick">
			<?php for ($i = 0; $i <= 9; $i++) : ?>
				<?php if (wp_get_attachment_url(post_custom('childrens_point_sec_food_img_0' . $i)) != '' || wp_get_attachment_url(post_custom('childrens_point_sec_food_img_0' . $i)) != NULL) : ?>
					<img class="corner" src="<?= wp_get_attachment_url(post_custom('childrens_point_sec_food_img_0' . $i)) ?>" alt="食育">
				<?php endif; ?>
			<?php endfor; ?>
		</div>
	</section>
</main>
<script>
	//slickの設定
	$('.slide_slick').slick({
		infinite: true,
		autoplay: true, //自動再生
		autoplaySpeed: 2000, //移動時間
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
	//リロード処理
	$(window).resize(function() {
		var wide = window.innerWidth;
		$('.slide_slick').slick('setPosition');
		console.log(wide);
	});
</script>
<?php get_footer(); ?>