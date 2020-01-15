<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");


$id=$_GET['sid'];


$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="delete from news where news_id=$id";
$res=mysqli_query($link,$sql);
if($res=true){
   echo "添加成功";
   header("refresh:1,url='news_list.php'");
}else{
   echo "添加失败";
   header("refresh:1,url='news_list.php'");
}






?>