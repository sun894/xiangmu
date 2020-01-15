<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");

$admin_name=empty($_POST['admin_name'])?'':$_POST['admin_name'];
$admin_pwd=empty($_POST['admin_pwd'])?'':$_POST['admin_pwd'];
$admin_tel=empty($_POST['admin_tel'])?'':$_POST['admin_tel'];

include_once"./pulick.php";

$k=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($k,'utf8');
if(empty($admin_name)){
  jump('账号必填','admin_add.php');
}else if(strlen($admin_name)<4||strlen($admin_name)>10){
  jump('账号允许4-10位','admin_add.php');
}else{
   $v="select * from admin where name='$admin_name'";
   $r=mysqli_query($k,$v);
   $tt=mysqli_fetch_assoc($r);
   if(!empty($tt)){
    jump ('账号已存在','admin_add.php') ;
   }
}
if(empty($admin_pwd)){
  jump('密码必填','admin_add.php');
}else if(strlen($admin_pwd)<6||strlen($admin_name)>10){
  jump('密码允许6-10位','admin_add.php');
}
if(empty($admin_tel)){
  jump('手机必填','admin_add.php');
}else if(strlen($admin_tel)!=11){
  jump('手机号格式错误','admin_add.php');
}else if(!is_numeric($admin_tel)){
  jump('手机号格式错误','admin_add.php');
}
$admin_pwd=md5($admin_pwd);
$v="insert into admin (name,pwd,tel)values('$admin_name','$admin_pwd','$admin_tel')";
//var_dump($v);die;
$r=mysqli_query($k,$v);
//var_dump($r);die;
if($r=true){
   jump ('添加成功','admin_list.php');

}else{
   jump ('添加失败','admin_add.php');
}















?>