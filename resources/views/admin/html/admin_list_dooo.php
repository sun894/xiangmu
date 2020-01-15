<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");
$id=empty($_POST['id'])?'':$_POST['id'];
$admin_name=empty($_POST['admin_name'])?'':$_POST['admin_name'];
$admin_tel=empty($_POST['admin_tel'])?'':$_POST['admin_tel'];


$k=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($k,'utf8');
include_once("pulick.php");
if(empty($admin_name)){
  jump('账号必填',"admin_list_doo.php?sid=".$id);
}else if(strlen($admin_name)<4||strlen($admin_name)>10){
  jump('账号允许4-10位',"admin_list_doo.php?sid=".$id);
}else{
   $v="select * from admin where id!=$id and name='$admin_name'";
   $r=mysqli_query($k,$v);
   $tt=mysqli_fetch_assoc($r);
   if(!empty($tt)){
    jump ('账号已存在',"admin_list_doo.php?sid=".$id) ;
   }
}

if(empty($admin_tel)){
  jump('手机必填',"admin_list_doo.php?sid=".$id);
}else if(strlen($admin_tel)!=11){
  jump('手机号格式错误',"admin_list_doo.php?sid=".$id);
}else if(!is_numeric($admin_tel)){
  jump('手机号格式错误',"admin_list_doo.php?sid=".$id);
}
$k=mysqli_connect('127.0.0.1','root','','news.cms');
$v="update admin set name='$admin_name',tel='$admin_tel' where id=$id";
$r=mysqli_query($k,$v);
if($r){
   jump ('添加成功','admin_list.php');

}else{
   jump ('添加失败',"admin_list_doo.php?sid=".$id);
}















?>