<?php

/**
 * schema.orgを使用したパンくずリスト
 *
 * ■ 使用方法
 * - 通常
 * <?php get_template_part('template-parts/breadcrumb'); ?>
 *
 *
 * - 表示が特殊で変数を使用する場合
 * <?php get_template_part('template-parts/breadcrumb', null, $var); ?>
 *
 * 変数を使用した場合引数で指定した値はbreadcrumb.php内で$argsに引き継がれます。
 *
 * ■ 機能の更新
 * gitで管理されています。
 * 案件ごとの部分的な修正ではなくベース機能の修正の場合『feature/breadcrumb』から変更してください。
 *
 */
?>

<?php

// ページ情報
$postId = $post->ID;
$parentPostArry = array_reverse(get_post_ancestors($post));
$postTypeObject = get_post_type_object(get_post_type());
$postTypeName = $postTypeObject->labels->name;
$taxonomySlug = get_query_var('taxonomy');
$termName = urldecode(get_query_var('term'));

// アロー設定
function breadcrumb_arrow()
{
  echo '<span class="breadcrumb__arrow">' . get_template_part('images/svg/bread-arrow') . '</span>';
}
?>

<?php if (is_front_page() || is_home()) : ?>
  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="https://toyotsujidou.com/" itemprop="item">
        <span itemprop="name" class="small-txt">ホーム</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <?php breadcrumb_arrow() ?>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <span itemprop="name" class="small-txt">退職者の方へ</span>
      <meta itemprop="position" content="2" />
    </li>
  </ol>
<?php else : ?>
  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="https://toyotsujidou.com/" itemprop="item">
        <span itemprop="name" class="small-txt">ホーム</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <?php
    // 固定ページ -----------------------------------------------------------------------------------
    if (is_page()) :
    ?>
      <?php if ($post->post_parent) : // 子ページがある場合
        $parent_id = $post->post_parent; // 親ページのIDを取得
      ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="<?= get_permalink($parent_id) ?>" itemprop="item">
            <span itemprop="name" class="small-txt"><?= get_post($parent_id)->post_title ?></span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <?php breadcrumb_arrow() ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name" class="small-txt"><?= get_the_title() ?></span>
          <meta itemprop="position" content="3" />
        </li>
      <?php else : // 子ページがない場合
      ?>
        <?php breadcrumb_arrow() ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name" class="small-txt"><?= get_the_title() ?></span>
          <meta itemprop="position" content="2" />
        </li>
      <?php endif; ?>
    <?php
    endif;
    // 固定ページend -------------------------------------------------------------------------------
    ?>

  </ol>
<?php endif ?>