<?php



header("content-type:text/html;charset=utf-8");

$name=empty($_POST['name'])?'':$_POST['name'];
$pwd=empty($_POST['pwd'])?'':md5($_POST['pwd']);

include_once("public.php");
if(empty($name)||empty($pwd)){
  jump('内容必填','login.php');
}

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="select * from admin where name='$name' or pwd='$pwd'";
$res=mysqli_query($link,$sql);
$arr4=mysqli_fetch_assoc($res);
if(empty($arr4)){
  jump('用户名或者密码错误','login.php');
}
$sql5="select * from admin where name='$name' and pwd='$pwd'";
$res5=mysqli_query($link,$sql5);
$arr9=mysqli_fetch_assoc($res5);
if($arr9){
session_start();
$_SESSION['user_info']=array('id'=>$arr9['id'],'name'=>$arr9['name']);
  jump('登录成功','index.php');
}else{
  jump('登录失败','login.php');
}
?>