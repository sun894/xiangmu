<?php



header("content-type:text/html;charset=utf-8");

$name=empty($_POST['name'])?'':$_POST['name'];
$pwd=empty($_POST['pwd'])?'':md5($_POST['pwd']);
$tel=empty($_POST['tel'])?'':$_POST['tel'];
$email=empty($_POST['email'])?'':$_POST['email'];

include_once("public.php");
if(empty($name)||empty($pwd)||empty($tel)||empty($email)){
  jump('内容必填','register.php');
}

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="select * from admin where name='$name'";
$res=mysqli_query($link,$sql);
$arr4=mysqli_fetch_assoc($res);
if(!empty($arr4)){
  jump('用户名已存在','register.php');
}
$sql5="insert into admin(name,pwd,tel,email)values('$name','$pwd','$tel','$email')";
$res5=mysqli_query($link,$sql5);
if($res5){
  jump('注册成功','login.php');
}else{
  jump('注册失败','register.php');
}
?>