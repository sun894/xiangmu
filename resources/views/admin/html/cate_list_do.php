<?php
include("check_login.php");


?>
<?php

$id=$_GET['sid'];

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="delete from news where news_id=$id";
$res=mysqli_query($link,$sql);

include_once"./pulick.php";

if($res){

jump('添加成功','cate_list.php');
}else{

jump('添加失败','cate_list.php');
}






?>