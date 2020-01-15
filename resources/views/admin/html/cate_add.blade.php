<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css">
</head>

<body>
<div  id="main">
<h2>添加分类</h2>
<form name="login"  action="cate_add_do.php" method="post" onsubmit='return checkall()'>
	<table border="0"    cellspacing="10" cellpadding="0">
		  <tr>
			<td>分类名称：</td>
			<td><input   type="text" name="news_title" id='news_title' onblur='check_title()' class="txt"/>
			<span id='span_title'>*</span>
			</td>
		  </tr>
			<tr>
			<td>添加人：</td>
			<td><input   type="text"  name="news_man"  id='news_man' onblur='check_man()'class="txt"/>
			<span id='span_man'>*</span>
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
<script>
var flag=false;
 function check_title(){
   var news_title=document.getElementById('news_title').value;
   if(news_title==''){
    document.getElementById('span_title').innerHTML='分类名称必填';
	return false;
   }else{
    var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	  if(xhr.readyState==4){
	  if(xhr.responseText=='no'){
	    document.getElementById('span_title').innerHTML='分类名称已存在';
		flag=false;
	  }else{
	    document.getElementById('span_title').innerHTML='√';
		flag=true;
	  }
	  }
	}
	xhr.open('get','cate_add1.php?news_title='+news_title);
	xhr.send(null);
	return flag;
    //document.getElementById('span_title').innerHTML='√';
	//return true;
   }
 }
function check_man(){
   var news_man=document.getElementById('news_man').value;
   if(news_man==''){
    document.getElementById('span_man').innerHTML='添加人必填';
	return false;
   }else{
    document.getElementById('span_man').innerHTML='√';
	return true;
   }
 }
 function checkall(){
   var news_title=check_title();
   var news_man=check_man();
   return news_title&&news_man;
 }
</script>
