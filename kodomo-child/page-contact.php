<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<main id="contact">
	<!-- お電話でお問い合わせ -->
	<section class="tel">
		<div class="inner">
			<div class="center-back">
				<div class="center">
					<div class="title shooting">
						<h2>お電話での<br>お問い合わせ</h2>
					</div>
					<div class="center-inner first-box">
						<div class="telicon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/decoration/contact_tel.svg" />
						</div>
						<p class="time"><?= $theme_options['op_16'] ?></p>
						<p class="time"><?= $theme_options['op_17'] ?></p>
						<div class="button">
							<a href="tel:<?= preg_replace('/[^0-9]/', '', $theme_options['op_4']); ?>" class="pagelink"><?= $theme_options['op_4'] ?><?php get_template_part('image/SVG/icon/button_icon') ?></a>
						</div>
						<p class="recruittext">※採用に関しては、<a href="https://toyotsujidou.com/recruit/" target="_blank">採用情報</a>をご覧ください。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- お問い合わせフォーム -->
	<section class="last from">
		<div class="back contact_back">
			<div class="inner first-box">
				<div class="title wood">
					<h2 class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SVG/icon/from_icon.svg" />メールフォーム</h2>
				</div>
				<div class="center-text dot first-box">
					<ul>
						<li>「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</li>
						<li>ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</li>
						<li>返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</li>
						<li>万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</li>
					</ul>
				</div>
				<?php $get_form = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1))[0]; ?>
				<?php echo do_shortcode('[contact-form-7 id="' . $get_form->ID . '" title="' . $get_form->post_title . '"]'); ?>
			</div>
	</section>
</main>
<script>
	//送信ボタンの処理
	$(".disabled").prop("disabled", true);//送信ボタンにdisabled属性を付与
	//プライバシーポリシーのチェックがされたかの判定
	$('.privacycheck').on("click", function(){
		//チェックボタンがクリックされた時の処理
		if($(this).prop("checked") == true){//クリックされた＝true
			$(".disabled").prop("disabled", false);//送信ボタンにdisabled属性を削除
		}else{//クリックされていない
			$(".disabled").prop("disabled", true);//送信ボタンにdisabled属性を付与
		}
	});
</script>
<?php get_footer(); ?>