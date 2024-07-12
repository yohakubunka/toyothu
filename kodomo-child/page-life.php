<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<main id="life">


	<!-- 保育内容 -->
	<!-- <section class="nursing">
		<div class="title wood">
			<h2 class="icon"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/nurturing_icon.svg" /></span>保育内容</h2>
		</div>
		<div class="back nursing_back">
			<div class="oneflex box">
				<div class="oneflex__box">
					<p><?= get_post_meta($post->ID, 'childrens_life_sec_content_title_00', true); ?></p>
					<h3 class="subtitle"><?= get_post_meta($post->ID, 'childrens_life_sec_content_subtitle_00', true); ?></h3>
					<div class="oneflex__box--inner">
						<img src="<?= wp_get_attachment_url(post_custom('childrens_life_sec_content_img_00')) ?>" alt="">
						<p><?= get_post_meta($post->ID, 'childrens_life_sec_content_text_00', true); ?></p>
					</div>
				</div>
				<div class="oneflex__box">
					<p><?= get_post_meta($post->ID, 'childrens_life_sec_content_title_01', true); ?></p>
					<h3 class="subtitle"><?= get_post_meta($post->ID, 'childrens_life_sec_content_subtitle_01', true); ?></h3>
					<div class="oneflex__box--inner">
						<p><?= get_post_meta($post->ID, 'childrens_life_sec_content_text_01', true); ?></p>
						<img src="<?= wp_get_attachment_url(post_custom('childrens_life_sec_content_img_01')) ?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="button">
			<a href="<?= home_url() ?>/childrens_download" class="pagelink">教育活動を見る</a>
		</div>
	</section> -->

	<!-- 1日の流れ -->
	<!-- <section class="oneday">
		<div class="title glitter">
			<h2 class="icon"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/oneday_icon.svg" /></span>一日の流れ</h2>
		</div>
		<div class="back life_oneday">
			<div class="box">
				<div class="tabbox">
					<div class="tab active">
						<div class="tab-btn">
							<h3><?= get_post_meta($post->ID, 'childrens_life_sec_flow_age_00', true); ?></h3>
						</div>
					</div>
					<div class="tab">
						<div class="tab-btn">
							<h3><?= get_post_meta($post->ID, 'childrens_life_sec_flow_age_01', true); ?></h3>
						</div>
					</div>
				</div>
				<div class="tabinner">
					<div class="tabinner-box active">
						<div class="flex">
							<div class="flex-left">
								<ul>
									<?php for ($i = 0; $i < 8; $i++) : ?>
										<li>
											<?= get_post_meta($post->ID, 'childrens_life_sec_flow_time_00_0' . $i, true); ?>
											<?= get_post_meta($post->ID, 'childrens_life_sec_flow_content_00_0' . $i, true); ?>
										</li>
									<?php endfor; ?>
								</ul>
							</div>
							<div class="flex-right">
								<img src="<?= wp_get_attachment_url(post_custom('childrens_life_sec_flow_img_00')) ?>" alt="">
								<p><?= get_post_meta($post->ID, 'childrens_life_sec_flow_caution_01', true); ?></p>
							</div>
						</div>
					</div>
					<div class="tabinner-box">
						<div class="flex">
							<div class="flex-left">
								<ul>
									<?php for ($i = 0; $i < 8; $i++) : ?>
										<li>
											<?= get_post_meta($post->ID, 'childrens_life_sec_flow_time_01_0' . $i, true); ?>
											<?= get_post_meta($post->ID, 'childrens_life_sec_flow_content_01_0' . $i, true); ?>
										</li>
									<?php endfor; ?>
								</ul>
							</div>
							<div class="flex-right">
								<img src="<?= wp_get_attachment_url(post_custom('childrens_life_sec_flow_img_01')) ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
	</section> -->

	<!-- 求人の一日の流れセクションと同じレイアウトなのでスタイルはそちらを参考にして下さい -->
	<section id="" class="">
		<div class="title glitter">
			<h2 class="icon"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/oneday_icon.svg" /></span><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_age_00', true); ?></h2>
		</div>

		<div class="back flow-back">
			<div class="page-width box">
				<div class="recruit-day-flow">
				<?php for ($i = 0; $i <= 9; $i++) : ?>
						<?php if (get_post_meta($post->ID, 'childrens_life_sec_flow_time_00_0' . $i, true) != "" && get_post_meta($post->ID, 'childrens_life_sec_flow_text_00_0' . $i, true) != "" && wp_get_attachment_url(post_custom('childrens_life_sec_flow_img_00_0' . $i)) != "") : ?>
							<article class="recruit-day-flow__content strong first-box">
								<div class="recruit-day-flow__content--time">
									<h3><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_time_00_0' . $i, true); ?></h3>
								</div>

								<div class="flow-text">
									<div class="flow-text__text">
										<h3 class="item-title"><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_content_00_0' . $i, true); ?></h3>
										<p><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_text_00_0' . $i, true); ?></p>
									</div>
									<div class="flow-text__image">
										<img class="corner maskpot-bay" src="<?= wp_get_attachment_url(post_custom('childrens_life_sec_flow_img_00_0' . $i)) ?>" alt="1日の流れ">
									</div>
								</div>
							</article>
						<?php endif; ?>
					<?php endfor; ?>
					<p class="model second-box"><?= get_post_meta($post->ID, 'childrens_life_sec_flow_caution_00', true); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- 求人の一日の流れセクションと同じレイアウトなのでスタイルはそちらを参考にして下さい -->
	<section id="" class="">
		<div class="title glitter">
			<h2 class="icon"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/oneday_icon.svg" /></span><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_age_01', true); ?></h2>
		</div>

		<div class="back flow-back">
			<div class="page-width box">
				<div class="recruit-day-flow">
				<?php for ($i = 0; $i <= 9; $i++) : ?>
						<?php if (get_post_meta($post->ID, 'childrens_life_sec_flow_time_01_0' . $i, true) != "" && get_post_meta($post->ID, 'childrens_life_sec_flow_text_01_0' . $i, true) != "" && wp_get_attachment_url(post_custom('childrens_life_sec_flow_img_01_0' . $i)) != "") : ?>
							<article class="recruit-day-flow__content strong first-box">
								<div class="recruit-day-flow__content--time">
									<h3><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_time_01_0' . $i, true); ?></h3>
								</div>
								<div class="flow-text">
									<div class="flow-text__text">
										<h3 class="item-title"><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_content_01_0' . $i, true); ?></h3>
										<p><?php echo get_post_meta($post->ID, 'childrens_life_sec_flow_text_01_0' . $i, true); ?></p>
									</div>
									<div class="flow-text__image">
										<img class="corner maskpot-bay" src="<?= wp_get_attachment_url(post_custom('childrens_life_sec_flow_img_01_0' . $i)) ?>" alt="１日の流れ">
									</div>
								</div>
							</article>
						<?php endif; ?>
					<?php endfor; ?>
					<p class="model second-box"><?= get_post_meta($post->ID, 'childrens_life_sec_flow_caution_01', true); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- 年間行事 -->
	<section class="last event">
		<div class="title wood">
			<h2 class="icon"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/event_icon.svg" /></span>年間行事</h2>
		</div>
		<div class="center-text box first-box">
			<h3><?= nl2br(get_post_meta($post->ID, 'childrens_life_sec_event_content_text', true)); ?></h3>
		</div>

		<div class="back event_back">
			<div class="oddflex box">
				<?php for ($i = 1; $i < 13; $i++) : ?>
					<?php $gallery_group = SCF::get('childrens_life_sec_event_0' . $i); ?>
					<div class="oddflex__box first-box">
						<!-- 月間表記の処理 -->
						<?php
						//月の配列を作成
						$money = array('4', '5', '6', '7', '8', '9', '10', '11', '12', '1', '2', '3',);
						//配列の値を取得
						$array_val = array_values($money);
						//配列の$index番目を取得
						$index = $i - 1 ?>
						<h3 class="subtitle"><?= $array_val[$index] ?>月</h3>
						<!-- ここまで -->
						<?php foreach ((array)$gallery_group as $fields) : ?>
							<p><?php echo $fields['childrens_life_sec_event_content_0' . $i]; ?></p>
						<?php endforeach; ?>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="box second-box">
			<p class="rigth-text"><?= nl2br(get_post_meta($post->ID, 'childrens_life_sec_event_caution_01', true)); ?></p>
		</div>
	</section>
</main>
<script>
	//タブ切り替え
	$(function() {
		$('.tabbox .tab').click(function() {
			/* クラス名：tabをクリック空いた時の処理 */
			var index = $('.tabbox .tab').index(this);
			$('.tabbox .tab, .tabinner .tabinner-box').removeClass('active');
			$(this).addClass('active');
			$('.tabinner .tabinner-box').eq(index).addClass('active');
			/* ここまで */
		})
	});
</script>

<?php get_footer(); ?>