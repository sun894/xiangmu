<?php
header("content-type:text/html;charset=utf-8");

$news_title=$_GET['news_title'];
$k=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($k,'utf8');

$v="select * from news where news_title='$news_title'";
$r=mysqli_query($k,$v);
$tt=mysqli_fetch_assoc($r);
if(!empty($tt)){
  echo 'no';
}else{
  echo 'ok';
}






?>