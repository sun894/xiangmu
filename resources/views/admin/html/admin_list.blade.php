<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
</head>

<body>
<div  id="main">
<table  width="80%" border="0" cellspacing="0" cellpadding="0" class="news_table">
  <caption>
    管理员列表
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">用户名</th>
    <th scope="col">电话</th>
    <th scope="col">操作</th>
  </tr>
  @foreach($data as $v)
  <tr>
    <td>{{$v->admin_id}}</td>
    <td>{{$v->admin_name}}</td>
    <td>{{$v->admin_tel}}</td>
    <td>
<a href="{{url('/admin_news/admin_edit/'.$v->admin_id)}}">修改</a>&nbsp;<a href="{{url('/admin_news/admin_del/'.$v->admin_id)}}">删除</a>
  </td>
  </tr>  
  @endforeach
</table>
</div>
</body>
</html>
