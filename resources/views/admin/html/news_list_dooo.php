<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");
include_once"./pulick.php";

$id=$_POST['id'];
$news_title=$_POST['news_title'];
if(empty($news_title)){
  jump('标题必填',"news_list_doo.php?cid=".$id);
}
$news_content=$_POST['news_content'];
$news=$_POST['news'];
if(empty($news)){
  jump('内容必填',"news_list_doo.php?cid=".$id);
}
$news_man=$_POST['news_man'];
if(empty($news_man)){
  jump('添加人必填',"news_list_doo.php?cid=".$id);
}
$news_time=$_POST['news_time'];
if(empty($news_time)){
  jump('时间必填',"news_list_doo.php?cid=".$id);
}

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="update news set news_title='$news_title',news_content='$news_content',news='$news',news_man='$news_man',news_time='$news_time' where news_id=$id";
$res=mysqli_query($link,$sql);
$rows=mysqli_affected_rows($link);
if($rows===1){
  jump('添加成功','news_list.php');
}else if($rows===0){
  jump('信息无变化',"news_list_doo.php?cid=".$id);
}else{
  jump('添加失败',"news_list_doo.php?cid=".$id);
}






?>