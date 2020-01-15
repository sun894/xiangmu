<?php
header("content-type:text/html;charset=utf-8");
$name=empty($_POST['name'])?'':$_POST['name'];
$pwd=empty($_POST['pwd'])?'':md5($_POST['pwd']);



include_once("pulick.php");
if(empty($name)){
  jump('用户名必填',"login.php");
}
if(empty($pwd)){
  jump('密码必填',"login.php");
}
$k=mysqli_connect('127.0.0.1','root','','news.cms');
$v="select * from admin where name='$name' and pwd='$pwd'";
$r=mysqli_query($k,$v);

if($r){
setcookie('username',$name,time()+60*60*7);

   jump ('登录成功','admin.php');

}else{
   jump ('登录失败',"login.php");
}

?>









