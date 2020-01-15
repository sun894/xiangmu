<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");
include_once"./pulick.php";


$news_title=$_POST['news_title'];
if(empty($news_title)){
  jump('标题必填','news_add.php');
}
$news_content=$_POST['news_content'];
$news=$_POST['news'];
if(empty($news)){
  jump('内容必填','news_add.php');
}
$news_man=$_POST['news_man'];
if(empty($news_man)){
  jump('添加人必填','news_add.php');
}
$news_time=$_POST['news_time'];
if(empty($news_time)){
  jump('时间必填','news_add.php');
}
$name=$_FILES['news_img']['name'];

$tmp_name=$_FILES['news_img']['tmp_name'];

$new_path="./img/".$name;

$res=move_uploaded_file($tmp_name,$new_path);

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="insert into news(news_title,news_content,news,news_man,news_img,news_time)values('$news_title','$news_content','$news','$news_man','$new_path','$news_time')";
$res=mysqli_query($link,$sql);
if($res=true){
  jump('添加成功','news_list.php');
}else{
  jump('添加失败','news_add.php');
}






?>