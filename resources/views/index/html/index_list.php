<?php
header("content-type:text/html;charset=utf-8");

$cate_name=empty($_GET['cate_name'])?'':$_GET['cate_name'];
$link=mysqli_connect('127.0.0.1','root','','news.cms');
mysqli_set_charset($link,'utf8');
$sql="select * from news join category on category.cate_id=news.news_content where cate_name='$cate_name'";
$res=mysqli_query($link,$sql);
$news_data=mysqli_fetch_all($res,MYSQLI_ASSOC);
//print_r($news_data);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国内新闻</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
<?php include_once("top.php");?>

<div class="blank20"></div>

<div id="main1">
	<div class="title"><h3>图片新闻</h3><a href="#">更多&gt;&gt;</a></div>
    <ul>
    	<li><a href="#"><img src="../images/infor.jpg"  height="178" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="../images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="../images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="../images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="../images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
    </ul>
</div>

<div class="blank20"></div>

<div class="news">
	<div class="title"><h3><?php echo $cate_name?></h3><a href="#">更多&gt;&gt;</a></div>
            <?php if(!empty($news_data)){?>
            <ul class="width">
            <?php foreach($news_data as $k=>$v){?>
        	<li><span><?php echo date("Y-m-d h:i:s",$v['news_time'])?></span><a  href="news_content.php?sid=<?php echo $v['news_id']?>"><?php echo $v['news_title']?></a></li>
		<?php }?>
        </ul>
        <?php }else{?>
				<li><font size="5" color="red">此分类新闻无内容!</font></li>
		<?php }?>
</div>

<div class="blank20"></div>

<?php include_once("footer.php");?>


</body>
</html>
