<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
	<script src="./utf8-php/ueditor.config.js"></script>
	<script src="./utf8-php/ueditor.all.min.js"></script>
	<script src="./utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
<meta charset='utf8'/>
<div  id="main">
<h2>添加新闻</h2>
<form name="login"  action="news_add_do.php" method="post" enctype="multipart/form-data">
<table border="0"    cellspacing="10" cellpadding="0">
  <tr>
    <td>新闻标题：</td>
    <td><input   type="text" name="news_title" class="txt"/></td>
  </tr>
  <tr>
    <td>新闻分类：</td>
    <td><select class="s1" name='news_content'>

		<option value=""></option>
		
	
	</select>
	</td>
  </tr>
  <tr>
    <td>新闻内容：</td>
    <!--<td><textarea  name="news" class="textarea"></textarea></td>-->
	<td><script id="editor" type="text/plain" name="news"></script></td>
  </tr>
    <tr>
    <td>添加人：</td>
    <td><input   type="text"  name="news_man"  class="txt"/></td>
  </tr>
    <tr>
    <td>新闻图片：</td>
    <td><input   type="file"  name="news_img"  class="txt"/></td>
  </tr>
    <td>添加时间：</td>
    <td><input   type="text"  name="news_time"  class="txt"/></td>
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
