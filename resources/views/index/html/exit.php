<?php
header("content-type:text/html;charset=utf-8");
include_once("public.php");

	session_start();
	unset($_SESSION['user_info']);

  jump('退出成功','login.php');


?>