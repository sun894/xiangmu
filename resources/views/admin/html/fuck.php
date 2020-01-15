<?php
header("content-type:text/html;charset=utf-8");
$admin_name=$_GET['admin_name'];
$k=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($k,'utf8');
$v="select * from admin where name='$admin_name'";
$r=mysqli_query($k,$v);
$tt=mysqli_fetch_assoc($r);
if($tt){
   echo "no";
}else{
   echo "ok";
}
?>