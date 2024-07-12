<div class="side">
  <div class="side__category">
    <div class="categorymenu">
    <h3 class="menubtn">カテゴリー</h3>
      <div class="categorymenu__box">
        <ul class="toggle">
        <?php
        $categories = get_categories();
        $separator = "";
        $output = "";
        if($categories){
        foreach($categories as $category) {
        $output .= '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.' ('.$category->count.')'.'</a>'.$separator.'</li>';
        }
        echo trim($output, $separator);
        }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="side__archive">
    <div class="archivemenu">
      <h3 class="menubtn">アーカイブ</h3>
      <div class="archivemenu__box">
        <ul class="toggle">
        <?php wp_get_archives( 'post_type=post&show_post_count=1' ); ?>
        </ul>
      </div>
    </div>
  </div>
</div>