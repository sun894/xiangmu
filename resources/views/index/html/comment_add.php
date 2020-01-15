<?php
header("content-type:text/html;charset=utf-8");
include_once("public.php");

session_start();
if(empty($_SESSION['user_info'])){

jump('请登录','login.php');

exit;

}else{

$com_content=empty($_POST['com_content'])?'':$_POST['com_content'];
$news_id=empty($_POST['news_id'])?'':$_POST['news_id'];
$ctime=time();

$oid=$_SESSION['user_info']['id'];

}

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql11="insert into comment(com_content,ctime,oid,news_id)values('$com_content','$ctime','$oid','$news_id')";
$res11=mysqli_query($link,$sql11);


if($res11==true){
  jump('发布成功',"news_content.php?sid=".$news_id);
}else{
  jump('发布失败',"news_content.php?sid=".$news_id);
}
?>