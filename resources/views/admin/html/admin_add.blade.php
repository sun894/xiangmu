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
<form name="login"  action="admin_add_do.php" method="post" onsubmit="return check_all()">
<table border="0"    cellspacing="20" cellpadding="0">
  <tr>
    <td>用户名：</td>
    <td><input   type="text" name="admin_name" class="txt"/ id="admin_name" onblur="check_admin_name()"><span id="span_admin_name"><font color="red">*</font></span></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><input  type="password" name="admin_pwd" id="admin_pwd" class="txt"/  onblur="check_admin_pwd()"><span id="span_admin_pwd"><font color="red">*</font></span></td>
  </tr>
  <tr>
    <td>电话：</td>
    <td>
    <input   type="text"  name="admin_tel"  id="admin_tel" class="txt"/  onblur="check_admin_tel()"><span id="span_admin_tel"><font color="red">*</font></span>
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
<script>
var flag=false;
function check_admin_name(){
var admin_name=document.getElementById('admin_name').value;
 if(admin_name==""){
      document.getElementById("span_admin_name").innerHTML='<font color="red">用户名必填</font>';
	  return false;
 }else{
    xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
    if(xhr.readyState==4){
    if(xhr.responseText=='no'){
      document.getElementById("span_admin_name").innerHTML='<font color="red">用户名已存在</font>';
	  flag=false;
    }else{
      document.getElementById("span_admin_name").innerHTML='<font color="blue">√</font>';
	  flag=true;
	}     
  }
}
     xhr.open('get',"fuck.php?admin_name="+admin_name);
     xhr.send(null);
	  return flag;
  }
}



function check_admin_pwd(){
var admin_pwd=document.getElementById('admin_pwd').value;
if(admin_pwd==""){
      document.getElementById("span_admin_pwd").innerHTML='<font color="red">密码必填</font>';
	  return false;
 }else{
      document.getElementById("span_admin_pwd").innerHTML='<font color="blue">√</font>';
	  return true;
	} 
	
	}

function check_admin_tel(){
var admin_tel=document.getElementById('admin_tel').value;
if(admin_tel==""){
      document.getElementById("span_admin_tel").innerHTML='<font color="red">手机号必填</font>';
	  return false;
 }else{
      document.getElementById("span_admin_tel").innerHTML='<font color="blue">√</font>';
	  return true;
	} 
	
	}

function check_all(){
var admin_name=check_admin_name();
var admin_pwd=check_admin_pwd();
var admin_tel=check_admin_tel();

return   admin_name&&admin_pwd&&admin_tel;
}
</script>
</html>
