<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
</head>

<body>
<div  id="main">
<h2>管理员添加</h2>
<form name="login"  action="{{url('admin_news/admin_add_do')}}" method="post">
<table border="0"    cellspacing="20" cellpadding="0">
@csrf
  <tr>
    <td>用户名：</td>
    <td><input   type="text" name="admin_name" class="txt"></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><input  type="password" name="admin_pwd"  class="txt"></td>
  </tr>
  <tr>
    <td>电话：</td>
    <td>
    <input   type="text"  name="admin_tel"  class="txt"></span>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
