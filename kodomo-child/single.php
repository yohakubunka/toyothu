<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<main id="single">
	<section class="last news-single">
		<div class="back news_single">
			<div class="box first-box">
				<div class="onebox maincontents">
					<div class="onebox__inner">
						<article class="article">
							<div class="article__top">
								<ul>
									<li><?= get_the_date(); ?></li>
									<li>
										<?php
										$category = get_the_category();
										foreach ($category as $cat) {
											echo $cat->cat_name;
										}
										?>
									</li>
								</ul>
								<h3><?= the_title(); ?></h3>
								<div class="article__contents">
									<?= the_content(); ?>
								</div>
							</div>
						</article>
					</div>
				</div>
				<?php get_template_part('template-parts/news-single'); ?>
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

		<div class="box second-box">
			<div class="operation">
				<div class="operation__button">
					<h3><?php previous_post_link('%link', '<img src="' . get_stylesheet_directory_uri() . '/image/SVG/icon/left_arrow.svg" />前の記事へ'); ?></h3>
				</div>
				<div class="operation__button">
					<a href="<?= home_url() ?>/news">
						<h3>一覧に戻る</h3>
					</a>
				</div>
				<div class="operation__button">
					<h3><?php next_post_link('%link', '次の記事へ<img src="' . get_stylesheet_directory_uri() . '/image/SVG/icon/right_arrow.svg" />'); ?></h3>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script>
	$(function() {
		$('.menubtn').click(function() {
			//クリックされた要素がclickedクラスだったら
			if ($(this).hasClass("on")) {
				//clickedクラスを外す
				$(this).removeClass("on");
			} else {
				//clickedクラスを追加する
				$(this).addClass("on");
			}
			$(this).next().find('.toggle').slideToggle();
		});
	});
</script>
<?php get_footer(); ?>