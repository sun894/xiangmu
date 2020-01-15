<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左部菜单</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
</head>

<body>
<div  id="left">
	<ul>
    	<li><a href="{{url('admin_news/news_add')}}"  target="right">新闻添加</a></li>
        <li><a href="{{url('admin_news/news_list')}}"  target="right">新闻列表</a></li>
        <li><a href="{{url('admin_news/cate_add')}}"  target="right">分类添加</a></li>
        <li><a href="{{url('admin_news/cate_list')}}"  target="right">分类列表</a></li>
        <li><a href="{{url('admin_news/admin_add')}}"  target="right">管理员添加
		<li><a href="{{url('admin_news/admin_list')}}"  target="right">管理员列表</a></li>
        <!-- <li><a href="admin_add.php"  target="right">管理员添加</a></li> -->
    </ul>
</div>
</body>
</html>
