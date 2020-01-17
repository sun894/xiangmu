<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>前台首页</title>
<link rel="stylesheet" type="text/css" href="/static/css/index.css">
<link rel="stylesheet" type="text/css" href="/static/css/public.css">
<style>
#header{ height:92px; background:none;}
#main  h2{ margin-left:0px; line-height:50px; font-size:20px;}
.article{margin-left:-50px;}

a{color:#087eac;}
</style>
</head>

<body>
<div id="header">
<img src="/static/images/logo1.png" alt="logo"/>
<ul>
<a href="{{url('login/login')}}"><font size="2" color="blue">登录</font></a>
</ul>
</div>

<div id="nav">
<ul>
	<li ><a href="#"  class="active">首页</a></li>
    <li><a href="#">国内新闻</a></li>
    <li><a href="#">国际新闻</a></li>
    <li><a href="#">军事新闻</a></li>
    <li><a href="#">娱乐新闻</a></li>
</ul>
</div>
<div>
<div  id="main">
<h2 align="center">欢迎注册新用户</h2>
<div class="article">

<form name="login"  action="{{url('login/register_do')}}" method="post">
@csrf
<table border="0"    cellspacing="20" cellpadding="0" align="center">
  <tr>
    <td>用户名：</td>
    <td><input   type="text" name="username" class="txt" width="2"/></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><input  type="password" name="pwd"  class="txt"/></td>
  </tr>
  <tr>
    <td>电话：</td>
    <td><input   type="text" name="tel" class="txt" width="2"/></td>
  </tr>
    <tr>
    <td>邮箱：</td>
    <td>
   <input   type="text" name="email" class="txt" width="2"/>
    </td>
  </tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="注 册"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>

</div>
</div>


<div class="blank20"></div>

<div id="footer">
	<p>版权所有&copy;八维研修学院<br />联系方式：010-82157081&nbsp;&nbsp;010-82157081&nbsp;&nbsp;010-82157081</p>
</div>

</body>
</html>
