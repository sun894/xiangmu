<?php
header("content-type:text/html;charset=utf-8");

$name=$_FILES['img']['name'];

$tmp_name=$_FILES['img']['tmp_name'];

$new_path="./img/".$name;

$res=move_uploaded_file($tmp_name,$new_path);

$link=mysqli_connect('127.0.0.1','root','','zio');
mysqli_set_charset($link,'utf8');
$sql="insert into img(img)values('$new_path')";

$res2=mysqli_query($link,$sql);

if($res2==true){

echo '添加成功';
}else{

echo '添加失败';
}
?>