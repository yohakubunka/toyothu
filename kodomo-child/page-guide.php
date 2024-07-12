<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php get_template_part( 'template-parts/main-visual' ); ?>
<main id="guide">
	<!-- 保育料と諸経費 -->
	<section class="price">
		<div class="title wood">
      <h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/price_icon.svg" />保育料と諸経費</h2>
    </div>
		<div class="back guide_price">
			<div class="twoflex box">
				<div class="twoflex-box center-text first-box">
					<div class="price-icon">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/price_left.svg" />
					</div>
					<h3><?= get_post_meta($post->ID, 'childrens_guide_sec_price_title_01', true); ?></h3>
					<p><?= get_post_meta($post->ID, 'childrens_guide_sec_price_text_01', true); ?></p>
					<div class="button">
						<a href="<?= get_post_meta($post->ID, 'childrens_guide_sec_price_url_01', true); ?>" class="external" target="_blank">自治体HP<?php get_template_part('image/SVG/icon/button_icon') ?></a>
					</div>
				</div>
				<div class="twoflex-box center-text first-box">
					<div class="price-icon">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/price_right.svg" />
					</div>
					<h3><?= get_post_meta($post->ID, 'childrens_guide_sec_price_title_02', true); ?></h3>
					<p><?= get_post_meta($post->ID, 'childrens_guide_sec_price_text_02', true); ?></p>
					<div class="button">
						<a href="<?= get_post_meta($post->ID, 'childrens_guide_sec_price_url_02', true); ?>" class="pagelink">諸経費について<?php get_template_part('image/SVG/icon/button_icon') ?></a>
					</div>
				</div>
			</div>
			<div class="baby_third">
				<?php if (get_site_multi() == "泉の杜保育園" || get_site_multi() == "世田谷１丁目ゆたか園") : ?>
					<!-- TODO ここに黄色い赤ちゃん -->
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/top_instagram-back02.svg" />
				<?php else : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/top_instagram-back.svg" />
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- 入園までの流れ -->
	<section class="flow">
		<div class="inner">
				<div class="title glitter">
					<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/flow_icon.svg" />入園までの流れ</h2>
				</div>
				<div class="center-text dot first-box">
					<ul>
						<li><?= get_post_meta($post->ID, 'childrens_guide_sec_flow_text_01', true); ?></li>
						<li><?= get_post_meta($post->ID, 'childrens_guide_sec_flow_text_02', true); ?></li>
						<li><?= get_post_meta($post->ID, 'childrens_guide_sec_flow_text_03', true); ?></li>
					</ul>
				</div>
				<div class="back guide_flow">
				<?php $args = array(
				'numberposts' => -1, //表示する記事の数
				'post_type' => 'childrens_flow' //投稿タイプ名
				// 条件を追加する場合はここに追記
				);
				$customPosts = get_posts($args);
				if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
				?>
				<?php
				$cats = get_the_terms(get_the_ID(), 'childrens_flow_category');
				if (!empty($cats)) {foreach ($cats as $cat) {echo $cat->name;}}
				?>
				<div class="accordion middlebox first-box">
					<div class="accordion-title">
						<h3><span>4月入園</span><?php the_title(); ?></h3>
					</div>
					<div class="accordion-inner">
						<ul>
								<?php $gallery_group = SCF::get('childrens_guide_sec_flow');
								foreach ($gallery_group as $fields) :?>
									<li>
										<p class="textbold"><?php echo $fields['childrens_guide_sec_flow_content_month']; ?></p>
										<p><?php echo $fields['childrens_guide_sec_flow_content_text']; ?></p>
									</li>
								<?php endforeach; ?>
						</ul>
						<div class="button">
							<a href="<?= get_post_meta($post->ID, 'childrens_guide_sec_flow_content_link', true); ?>" target="_blank">
								<?= get_post_meta($post->ID, 'childrens_guide_sec_flow_content_link_text', true); ?><?php get_template_part('image/SVG/icon/button_icon') ?>
							</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<?php else : //記事が無い場合 ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif;wp_reset_postdata(); //クエリのリセット ?>
			</div>
		</div>
	</section>

		<!-- 各種予約 -->
		<section class="last field">
			<div class="title glitter">
				<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/field_icon.svg" />見学予約</h2>
			</div>
			<div class="center-text first-box">
				<h3><?= get_post_meta($post->ID, 'childrens_guide_sec_reserve_subtile_01', true); ?></h3>
			</div>
			<div class="back guide_field">
				<div class="twoflex box first-box">
					<div class="twoflex-box second-box">
						<div class="field-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/reserve_tel.svg" /></div>
						<h3><?= get_post_meta($post->ID, 'childrens_guide_sec_reserve_title_01', true); ?></h3>
						<p><?= get_post_meta($post->ID, 'childrens_guide_sec_reserve_text_01', true); ?></p>
						<div class="flex">
							<div class="flexleft">
								<p><?= $theme_options['op_16'] ?></p>
							</div>
							<div class="flexright">
								<p><?= $theme_options['op_17'] ?></p>
							</div>
						</div>
						<div class="button">
							<a href="tel:<?= preg_replace('/[^0-9]/', '', $theme_options['op_4']); ?>" class="pagelink">
							<?= $theme_options['op_4'] ?><?php get_template_part('image/SVG/icon/button_icon') ?>
							</a>
						</div>
					</div>
					<div class="twoflex-box center-text second-box">
						<div class="field-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/reserve_web.svg" /></div>
						<h3><?= get_post_meta($post->ID, 'childrens_guide_sec_reserve_title_02', true); ?></h3>
						<p><?= get_post_meta($post->ID, 'childrens_guide_sec_reserve_text_02', true); ?></p>
						<div class="button">
							<a href="<?= get_post_meta($post->ID, 'childrens_guide_sec_reserve_link_02', true); ?>" class="pagelink" target="_blank">24時間受付中<?php get_template_part('image/SVG/icon/button_icon') ?></a>
						</div>
					</div>
				</div>
				<div class="baby_third">
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
	//アコーディオンの動き
	/* accordion-titleがクリックされた時の処理 */
	$('.accordion-title').click(function(){
		if ($(this).hasClass("change")) {//thisにクラスがついていたら
			$(this).removeClass('change');//クラスを削除
			$(this).next('.accordion-inner').slideToggle();//アコーディオンの中身を非表示
		} else {
			$(this).addClass('change');//クラスを付与
			$(this).next('.accordion-inner').slideToggle();//アコーディオンの中身を表示
		}
	});
	/* --------------ここまで-------------- */
</script>
<?php get_footer(); ?>