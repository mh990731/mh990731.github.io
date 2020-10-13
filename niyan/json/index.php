<?php

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
$arr =array('id'=>$hiko['id'],'catname'=>$hiko['catname'],'text'=>$hiko['text'],'author'=>$hiko['author'],'source'=>$hiko['source'],'date'=>$hiko['date']);
print_r (json_encode($arr, JSON_UNESCAPED_UNICODE));
?>