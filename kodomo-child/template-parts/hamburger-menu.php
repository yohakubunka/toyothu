<div class="menubutton">
	<div class="menubutton__inner">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<div class="hamburger">
	<nav class="hamburger__inner">
		<div class="back">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/backgrand/spmenu_back.svg" />
		</div>
		<ol>
			<ul class="mainmenu">
				<div class="home-top">
					<a href="<?= home_url() ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/spmenu_home.svg" />
						<p>ホームへ戻る</p>
					</a>
				</div>
				<li>
					<a href="<?= home_url() ?>/contact"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/spmenu_icon01.svg" />
						<p>お問い合わせ</p>
					</a>
				</li>
				<li>
					<a target="_blank" href="<?php echo (get_theme_mod('childrens_top_sec_link_02') != "") ? get_theme_mod('childrens_top_sec_link_02') : '##'; ?>" class="<?php if (get_theme_mod('childrens_top_sec_link_02') == "") echo "preparation" ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/spmenu_icon02.svg" />
						<p>各種予約<span><?php get_template_part('image/SVG/icon/linkarrow_icon') ?></span></p>
					</a>
				</li>
				<!-- 一時預かり -->
				<?php if (get_site_multi() == "世田谷１丁目ゆたか園" || get_site_multi() == "こどもの杜ゆたか園" || get_site_multi() == "みらいの森ゆたか園" || get_site_multi() == "明和ゆたか園") : ?>
					<li>
						<a href="<?= home_url() ?>#custody"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/spmenu_icon03.svg" />
							<p>一時預かり</p>
						</a>
					</li>
				<?php endif; ?>
				<!-- 子育て支援 -->
				<?php if (!(get_site_multi() == "世田谷１丁目ゆたか園" || get_site_multi() == "泉の杜保育園")) : ?>
					<li>
						<a href="<?= home_url() ?>#support"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/spmenu_icon04.svg" />
							<p>子育て支援</p>
						</a>
					</li>
				<?php endif; ?>
			</ul>
			<ul class="submenu">
				<li><a href="<?= home_url() ?>/news">- お知らせ</a></li>
				<li><a href="<?= home_url() ?>/about">- 保育について</a></li>
				<li><a href="<?= home_url() ?>/point">- 保育のこだわり</a></li>
				<li><a href="<?= home_url() ?>/life">- 園での生活</a></li>
				<li><a href="<?= home_url() ?>/guide">- 入園案内</a></li>
				<li><a href="<?= home_url() ?>/childrens_download">- 書類ダウンロード</a></li>
				<li><a target="_blank" href="<?php echo (get_theme_mod('childrens_top_sec_link_03') != "") ? get_theme_mod('childrens_top_sec_link_03') : '##'; ?>" class="instagram <?php if (get_theme_mod('childrens_top_sec_link_03') == "") echo "preparation" ?>">- instagram<span><?php get_template_part('image/SVG/icon/linkarrow_icon') ?></span></a></li>
			</ul>
		</ol>
		<div class="othermenu">
			<ul>
				<li><a href="https://toyotsujidou.com/" target="_blank">- 豊津児童福祉会</a></li>
				<li><a href="https://toyotsujidou.com/#section-houjin-facility" target="_blank" class="">- 施設一覧</a></li>
				<li><a href="https://toyotsujidou.com/recruit/" target="_blank">- 採用情報</a></li>
			</ul>
		</div>
	</nav>
</div>