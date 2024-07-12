<nav class="topmenu">
	<ul class="topmenu__inner">
		<li><a href="<?= home_url() ?>/news">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/menuicon_01.svg" />
				<p>お知らせ</p>
			</a></li>
		<li><a href="<?= home_url() ?>/about">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/menuicon_02.svg" />
				<p>保育について</p>
			</a></li>
		<li><a href="<?= home_url() ?>/point">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/menuicon_03.svg" />
				<p>保育のこだわり</p>
			</a></li>
		<li class="topmenu__inner--logo"><a href="<?= home_url() ?>">
				<img src="<?php echo get_theme_mod("childrens_header_logo"); ?>" />
			</a></li>
		<li><a href="<?= home_url() ?>/life">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/menuicon_04.svg" />
				<p>園での生活</p>
			</a></li>
		<li><a href="<?= home_url() ?>/guide">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/menuicon_05.svg" />
				<p>入園案内</p>
			</a></li>
		<li><a href="<?= home_url() ?>/childrens_download">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/menuicon_06.svg" />
				<p>書類ダウンロード</p>
			</a></li>
	</ul>　
</nav>
<nav class="tabmenu">
	<img src="<?php echo get_theme_mod("childrens_header_logo"); ?>" />
</nav>
<!-- メインビジュアル -->
<div class="mainvisual">
	<div class="mainvisual__inner">
		<div class="mainvisual__inner--slide pc">
			<div class="top-slick">
				<?php if (get_theme_mod('childrens_mainvisual_01') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_01'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_02') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_02'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_03') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_03'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_04') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_04'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_05') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_05'); ?>" alt="メインビジュアル">
				<?php endif; ?>
			</div>
		</div>
		<div class="mainvisual__inner--slide sp">
			<div class="top-slick">
				<?php if (get_theme_mod('childrens_mainvisual_sp_01') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_sp_01'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_sp_02') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_sp_02'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_sp_03') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_sp_03'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_sp_04') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_sp_04'); ?>" alt="メインビジュアル">
				<?php endif; ?>
				<?php if (get_theme_mod('childrens_mainvisual_sp_05') != "") : ?>
					<img src="<?php echo get_theme_mod('childrens_mainvisual_sp_05'); ?>" alt="メインビジュアル">
				<?php endif; ?>
			</div>
		</div>
		<div class="catch">
			<h1 class="catch__copy"><?= nl2br(get_theme_mod('childrens_mainvisual_text')); ?></h1>
		</div>
	</div>
	<div class="visual-item">
		<img src="<?php echo get_theme_mod('childrens_mainvisual_symbol') ?>" />
	</div>
</div>