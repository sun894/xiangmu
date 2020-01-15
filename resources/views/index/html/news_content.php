<?php

$id=$_GET['sid'];
$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="select * from news where news_id=$id";
$res=mysqli_query($link,$sql);
$news_content=mysqli_fetch_assoc($res);


$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql8="select com_content,ctime,name from comment join admin on comment.oid=admin.id where news_id=$id order by ctime desc limit 5 ";
$res8=mysqli_query($link,$sql8);
$new_comment=mysqli_fetch_all($res8,1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章发布</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
<?php include_once("top.php");?>


<div class="blank20"></div>

<div class="article">
<h3><?php echo $news_content['news_title']?></h3>
<p><?php echo $news_content['news']?></p>
<p>添加人:<?php echo $news_content['news_man']?></p>
<p>添加时间:<?php echo date("Y-m-d h:i:s",$news_content['news_time'])?></p>


</div>
</div>

<div class="blank20"></div>
<form method="post" action="comment_add.php">
	<input type="hidden" name="news_id" value="<?php echo $news_content['news_id']?>">
	<textarea name="com_content" rows="5" cols="60" placeholder="请输入......"></textarea>
    <input type="submit" value="发布">
</form>
<ul>
	<?php
	if(!empty($new_comment)){
	foreach($new_comment as $k90=>$v90){?>
	<li>
	<span><?php echo $v90['name']?></span>
	<span><?php echo $v90['com_content']?></span>
	<span><?php echo date("Y-m-d h:i:s",$v90['ctime'])?></span>	
	</li></br>
	<?php }?>
	
      <?php }else{?>
<li><font size="2" color="red">此分类新闻无评论!</font></li>

    <?php }?>
</ul>
<?php include_once("footer.php");?>

</body>
</html>
