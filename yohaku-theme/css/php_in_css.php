<?php
//CSSとして使うPHPファイルの一番上に記述
header('Content-Type: text/css;', 'charset=utf-8'); ?>
@charset "utf-8";


<?php
//変数の設定があれば以下に記述して下さい
// $bgcolor = 'pink';
$count = 0;
?>

body{
background: <?php echo $bgcolor; ?>;
}