<?php get_header(); ?>
<main id="category">
	<?php get_template_part('template-parts/breadcrumb'); ?>
	<?php get_template_part('template-parts/main-visual'); ?>
	<section class="last newslist">
		<div class="inner">
			<div class="title glitter">
				<h2 class="icon"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/news_icon.svg" /></span>お知らせ一覧</h2>
			</div>
			<div class="search flex first-box">
				<div class="flex-left">
					<div class="categorymenu">
						<h3 class="menubtn">カテゴリー</h3>
						<div class="categorymenu__box">
							<ul class="toggle">
								<?php
								$categories = get_categories();
								$separator = "";
								$output = "";
								$categoryList = get_the_category();
								if ($categories) {
									foreach ($categories as $category) {
										if ($categoryList[0]->name == $category->cat_name) {
											$output .= '<li class="active"><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . ' (' . $category->count . ')' . '</a>' . $separator . '</li>';
										} else {
											$output .= '<li><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . ' (' . $category->count . ')' . '</a>' . $separator . '</li>';
										}
									}
									echo trim($output, $separator);
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="flex-right">
					<div class="archivemenu">
						<h3 class="menubtn">アーカイブ</h3>
						<div class="archivemenu__box">
							<ul class="toggle">
								<?php wp_get_archives('post_type=post&show_post_count=1'); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="back single-back">
			<div class="twoflex box">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
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
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/kodomonomori.svg" />
                      <?php elseif (get_site_multi() == "みらいの森ゆたか園") : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/mirainomori.svg" />
                      <?php elseif (get_site_multi() == "杜の街ゆたか園") : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/morinomati.svg" />
                      <?php elseif (get_site_multi() == "明和ゆたか園") : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/meiwa.svg" />
                      <?php elseif (get_site_multi() == "第２明和ゆたか園") : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/meiwa_second.svg" />
                      <?php elseif (get_site_multi() == "斎宮Babyroom") : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/png/common/itukinomiya.svg" />
                      <?php endif; ?>
									<?php endif; ?>
								</div>
								<div class="article-text">
									<h3><?= the_title(); ?></h3>
									<ul>
										<li><?= get_the_date(); ?></li>
										<li><?php
											$category = get_the_category();
											foreach ($category as $cat) {
												echo $cat->cat_name;
											}
											?></li>
									</ul>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="news-pagination box">
			<?php
			/* ページャーの表示
					クエリの変数を間違えないように
					*/
			global $wp_query;
			if (function_exists('pagination')) :
				pagination($wp_query->max_num_pages, (get_query_var('paged')) ? get_query_var('paged') : 1);  //$wp_query ではなく $the_query ないことに注意！
			endif;
			?>
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