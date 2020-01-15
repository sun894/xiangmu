<?php
include("check_login.php");


?>
<?php
header("content-type:text/html;charset=utf-8");

$id=$_GET['cid'];


$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="select * from news where news_id=$id";
$res=mysqli_query($link,$sql);
$studenArr=mysqli_fetch_assoc($res);
//print_r($studenArr);
echo "<hr>";


$sql="select * from category";
$res=mysqli_query($link,$sql);
while($class_arr=mysqli_fetch_assoc($res)){
	$classArr[]=$class_arr;
}
//print_r($classArr);







?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
<meta charset='utf8'/>
<div  id="main">
<h2>修改新闻</h2>
<form name="login"  action="news_list_dooo.php" method="post">
<table border="0"    cellspacing="10" cellpadding="0">
  <tr>
    <td>新闻标题：</td>
    <td><input   type="text" name="news_title" value="<?php echo $studenArr['news_title']?>"class="txt"/>
	<input type="hidden" name="id" value="<?php echo $studenArr['news_id']?>">
	</td>
  </tr>
  <tr>
    <td>新闻分类：</td>
    <td><select class="s1" name='news_content'>
        <?php foreach($classArr as $k=>$v){?>
		<option value="<?php echo $v['cate_id']?>"
		<?php if($studenArr['news_content']==$v['cate_id']){ echo "selected";}?>
		><?php echo $v['cate_name']?></option>
		<?php }?>
	
	</select>
	</td>
  </tr>
  <tr>
    <td>新闻内容：</td>
    <td><textarea  name="news" class="textarea"><?php echo $studenArr['news']?></textarea></td>
  </tr>
    <tr>
    <td>添加人：</td>
    <td><input   type="text"  name="news_man"  value="<?php echo $studenArr['news_man']?>"class="txt"/></td>
  </tr>
    <td>添加时间：</td>
    <td><input   type="text"  name="news_time"  value="<?php echo $studenArr['news_time']?>"class="txt"/></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>