<?php
header("content-type:text/html;charset=utf-8");


include_once"./pulick.php";

setcookie('username','',time()-1);

   jump ('退出成功',"login.php");





?>