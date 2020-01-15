<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");
$id=$_GET['sid'];
$k=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($k,'utf8');
$v="select * from admin where id=$id";
$r=mysqli_query($k,$v);
$tt=mysqli_fetch_assoc($r);
//print_r($tt);
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
<h2>管理员修改</h2>
<form name="login"  action="admin_list_dooo.php" method="post">
<table border="0"    cellspacing="20" cellpadding="0">
  <tr>
    <td>用户名：<input type="hidden" name="id" value="<?php echo $tt['id']?>"></td>
    <td><input   type="text" name="admin_name" class="txt"/ value="<?php echo $tt['name']?>"></td>
  </tr>
  
  <tr>
    <td>电话：</td>
    <td>
    <input   type="text"  name="admin_tel"  class="txt"/ value="<?php echo $tt['tel']?>">
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>
</div>
</body>
</html>
