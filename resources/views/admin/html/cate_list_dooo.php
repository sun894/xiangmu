<?php
include("check_login.php");


?>
<?php

$news_title=$_POST['news_title'];
$news_man=$_POST['news_man'];
$id=$_POST['id'];

include_once"./pulick.php";

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
if(empty($news_title)){
  jump('分类名称必填',"cate_list_doo.php?sid=".$id);
}
if(empty($news_man)){
  jump('添加人必填',"cate_list_doo.php?sid=".$id);
}
$sql="update news
set news_title='$news_title',news_man='$news_man' where news_id=$id";
$res=mysqli_query($link,$sql);

$rows=mysqli_affected_rows($link);
if($rows===1){
  jump ('提交成功','cate_list.php');
}else if($rows===0){
  jump ('信息无变化',"cate_list_doo.php?sid=".$id);

}else{
  jump ('提交失败',"cate_list_doo.php?sid=".$id);

}

?>