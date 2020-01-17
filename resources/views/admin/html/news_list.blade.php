<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
</head>

<body>
<meta charset='utf8'/>
<div  id="main">
<table width="90%" border="0" cellspacing="0" cellpadding="0" class="news_table">
  <caption>
    新闻列表
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">新闻标题</th>
    <th scope="col">所属分类</th>
    <th scope="col" width="200">新闻内容</th>
    <th scope="col">添加人</th>
    <th scope="col">新闻图片</th>
    <th scope="col">时间</th>
    <th scope="col">操作</th>
  </tr>
  @foreach($data as $v)  
  <tr>
		<td>{{$v->news_id}}</td>
		<td>{{$v->title}}</td>
		<td>{{$v->c_name}}</td>
		<td>{{$v->content}}</td>
		<td>{{$v->people}}</td>
		<td><img src="{{env('UPLOAD_URL')}}{{$v->img}}" height="170" width="150"/></td>
		<td>{{date('Y-m-d h:i:s',$v->time)}}</td>
		<td>
		<a href="{{url('/admin_news/news_del/'.$v->news_id)}}">删除</a>
		<a href="{{url('/admin_news/news_edit/'.$v->news_id)}}">修改</a>
		</td>
  </tr>
  @endforeach
</table>
</div>
</body>
</html>
