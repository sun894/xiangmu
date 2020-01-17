<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章发布</title>
<link rel="stylesheet" type="text/css" href="/static/css/index.css">
</head>

<body>
@include('common/top')


<div class="blank20"></div>

<div class="article">
<h3>{{$res->title}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1" color="#666666">浏览量:【{{$num}}】</font></h3>
<p>
{{$res->content}}
</p>
</div>
</div>

<div class="blank20"></div>
<form method="post" action="">
	<input type="hidden" name="news_id" value="">
	<textarea name="com_content" rows="5" cols="60" placeholder="请输入......"></textarea>
    <input type="submit" value="发布">
</form>
<ul>
	<li>
	<span></span>
	<span></span>
	<span></span>	
	</li></br>      
<li><font size="2" color="red">此分类新闻无评论!</font></li>

    
</ul>
@include('common/footer')

</body>
</html>
