
<?php
  header("Content-type: application/x-javascript");
  $hitokoto = @include '../update/cache_hitokoto.php';
  $hitokotouid = @include '../update/cache_hitokotouid.php';

  $c = rand(0,1);

  if($c){
    $max = $hitokotouid['num'];
    $num = mt_rand(0,$max);
    $hiko = $hitokotouid[$num];
  }else{
    $max = $hitokoto['num'];
    $num = mt_rand(0,$max);
    $hiko = $hitokoto[$num];
  }

  if($hiko['id']){
    $add = '&#10ID：'.$hiko['id'];}
  echo 'document.write(\'<span title="分类：',$hiko['catname'],$add,'&#10投稿：',$hiko['author'],' @ ',$hiko['date'],'">',$hiko['text'],'</span>\');';
?>