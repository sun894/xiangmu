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
<h2>新闻编辑</h2>
<form name="login"  action="{{url('admin_news/news_update/'.$data->news_id)}}" method="post" enctype="multipart/form-data">
<table border="0"    cellspacing="10" cellpadding="0">
@csrf
  <tr>
    <td>新闻标题：</td>
    <td><input type="text" name="title" value="{{$data->title}}" class="txt"/></td>
  </tr>
  <tr>
    <td>新闻分类：</td>
    <td><select class="s1" name='c_id'>
	    <option value="">--请选择--</option>
        @foreach($res as $v)
		<option value="{{$v->c_id}}"{{$data->c_id == $v->c_id ? 'selected' :''}}>{{$v->c_name}}</option>
		@endforeach
	</select>
	</td>
  </tr>
  <tr>
    <td>新闻内容：</td>
    <td><textarea  name="content" class="textarea">{{$data->content}}</textarea></td>
	<!--<td><script id="editor" name="content" type="text/plain" style="width:800px;height:200px;"></script></td>-->
  </tr>
    <tr>
    <td>添加人：</td>
    <td><input   type="text"  name="people"  value="{{$data->people}}" class="txt"/></td>
  </tr>
    <tr>
    <td>新闻图片：</td>
    <td><input   type="file"  name="img"  class="txt"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="修 改"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>
</div>
</body>
</html>
