<?php if(is_page('about')):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">保育について</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_02'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php elseif(is_page('point')):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">保育のこだわり</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_03'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php elseif(is_page('life')):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">園での生活</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_04'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php elseif(is_page('guide')):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">入園案内</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_05'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php elseif(is_post_type_archive('childrens_download')):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">書類ダウンロード</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_06'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php elseif(is_page('contact')):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">お問い合わせ</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_07'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php elseif(is_archive('news') || is_single()):?>
	<div class="pagevisual">
		<div class="pagevisual__inner">
			<div class="pagevisual__inner--title">
				<h2 class="page-title">お知らせ</h2>
			</div>
			<div class="pagevisual__inner--pot">
			<img class="corner maskpot-main" src="<?php echo get_theme_mod('childrens_mainvisual_under_01'); ?>" alt="メインビジュアル">
			</div>
		</div>
	</div>
<?php endif; ?>
