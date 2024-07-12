<div class="followmenu">
	<div class="followmenu__inner">
		<ul>
			<li>
				<a class="<?php if (get_theme_mod('childrens_top_sec_link_01') == "") echo "preparation" ?>" href="<?php echo (get_theme_mod('childrens_top_sec_link_01') != "") ? get_theme_mod('childrens_top_sec_link_01') : '##'; ?>" target="_blank"><?php get_template_part('image/SVG/icon/followmenu_01') ?><p>採用情報</p></a>
			</li>
			<li>
				<a target="_blank" class="<?php if (get_theme_mod('childrens_top_sec_link_02') == "") echo "preparation" ?>" href="<?php echo (get_theme_mod('childrens_top_sec_link_02') != "") ? get_theme_mod('childrens_top_sec_link_02') : '##'; ?>"><?php get_template_part('image/SVG/icon/followmenu_02') ?><p>各種予約</p></a>
			</li>
			<li>
				<a target="_blank" class="<?php if (get_theme_mod('childrens_top_sec_link_03') == "") echo "preparation" ?>" href="<?php echo (get_theme_mod('childrens_top_sec_link_03') != "") ? get_theme_mod('childrens_top_sec_link_03') : '##'; ?>"><?php get_template_part('image/SVG/icon/followmenu_03') ?><p>instagram</p></a>
			</li>
		</ul>
	</div>
</div>