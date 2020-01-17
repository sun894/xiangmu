<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
</head>

<body>
<div  id="main">
<table width="80%"  border="0" cellspacing="0" cellpadding="0" class="news_table">
  <caption>
    新闻分类列表
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">分类名称</th>
    <th scope="col">添加人</th>
    <th scope="col">时间</th>
    <th scope="col">操作</th>
  </tr>
  @foreach($data as $v)
  <tr>
    <td>{{$v->c_id}}</td>
    <td>{{$v->c_name}}</td>
    <td>{{$v->c_man}}</td>
    <td>{{date('Y-m-d h:i:s',$v->c_time)}}</td>
    <td><a href="{{url('/admin_news/cate_del/'.$v->c_id)}}">删除</a>/<a href="{{url('/admin_news/cate_edit/'.$v->c_id)}}">修改</a></td>
  </tr>
  @endforeach
</table>
</div>
</body>
</html>
