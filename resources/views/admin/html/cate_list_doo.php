<?php
include("check_login.php");


?>
<?php

$id=$_GET['sid'];

$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="select * from news where news_id=$id";
$res=mysqli_query($link,$sql);
$arr=mysqli_fetch_assoc($res);
print_r($arr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
<div  id="main">
<h2>添加分类</h2>
<form name="login"  action="cate_list_dooo.php" method="post">
	<table border="0"    cellspacing="10" cellpadding="0">
		  <tr>
			<td>分类名称：</td>
			<td><input   type="text" name="news_title" class="txt"/ value="<?php echo $arr['news_title']?>"></td>
		  </tr>
			<tr>
			<td>添加人：</td>
			<td><input   type="text"  name="news_man"  class="txt"/ value="<?php echo $arr['news_man']?>"></td>
		  </tr>
		  <tr>
			<td>&nbsp;<input type="hidden" name="id" value="<?php echo $arr['news_id']?>"></td>
			<td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
		  </tr>
	</table>
</form>
</div>
</body>
</html>
