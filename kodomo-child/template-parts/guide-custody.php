<section class="custody-guide" id="custody-guide">
		<div class="title glitter">
			<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/custody_icon.svg" />一時預かり</h2>
		</div>
		<div class="inner">
			<div class="back download_odd">
				<!-- ターム別表示の処理 -->
				<?php
				$args = array(
				'post_type' => 'childrens_download',//投稿タイプの指定
				'posts_per_page' => -1,//表示件数の指定
				'tax_query' => array(array(
					'taxonomy' => 'childrens_download_category',//タクソノミー名を指定
					'field' => 'slug',
					'terms' => 'custody'//タームを指定
					))
				);
				$my_query = new WP_Query($args);if ($my_query->have_posts()) :while ($my_query->have_posts()) : $my_query->the_post();?>
				<div class="middlebox first-box">
						<h3><?php the_title() ?></h3>
						<p><?= get_field('childrens_download_sec_text') ?></p>
					<div class="button">
						<a href="<?= get_field('childrens_download_sec_file') ?>" target="_blank">ダウンロード<?php get_template_part('image/SVG/icon/download_icon') ?></a>
					</div>
				</div>
				<?php endwhile;wp_reset_postdata();endif; ?>
				<!-- ここまで -->
			</div>
		</div>
	</section>