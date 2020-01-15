<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>前台首页</title>
<link rel="stylesheet" type="text/css" href="/static/css/index.css">
</head>

<body>
@include('common/top')
<div class="blank20"></div>

<div id="main1">
	<div class="title"><h3>图片新闻</h3><a href="#">更多&gt;&gt;</a></div>
    <ul>
    	<li><a href="#"><img src="/static/images/infor.jpg"  height="178" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="/static/images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="/static/images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="/static/images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="/static/images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
    </ul>
</div>

<div class="blank20"></div>

<div class="news">
	<div class="title"><h3>最新新闻</h3><a href="#">更多&gt;&gt;</a></div>
        <ul>
        </ul>       
</div>

<div class="blank20"></div>

<div class="news">
	<div class="title"><h3>最热新闻</h3><a href="#">更多&gt;&gt;</a></div>
       <ul>
       </ul>       
</div>

<div class="blank20"></div>

@include('common/footer')
</body>
</html>
