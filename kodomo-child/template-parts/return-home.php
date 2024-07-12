<?php if (  is_front_page() ||  is_home() ) : ?>
<?php else: ?>
<div class="return">
	<div class="inner">
			<div class="home">
				<a href="<?= home_url() ?>" class="home__button">
					<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/spmenu_home.svg" /></span>
					<p>ホームへ戻る</p>
				</a>
			</div>
	</div>
</div>
<?php endif; ?>