<?php
include("check_login.php");


?>
<?php

$news_title=$_POST['news_title'];
$news_man=$_POST['news_man'];

include_once"./pulick.php";

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
if(empty($news_title)){
  jump('分类名称必填','cate_add.php');
}
if(empty($news_man)){
  jump('添加人必填','cate_add.php');
}
$sql="insert into news(news_title,news_man)values('$news_title','$news_man')";
$res=mysqli_query($link,$sql);
if($res){
  jump ('提交成功','cate_list.php');
}else{
  jump ('提交失败','cate_add.php');

}

?>