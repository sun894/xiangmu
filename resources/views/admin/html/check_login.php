<?php
header("content-type:text/html;charset=utf-8");

include_once("pulick.php");
if(empty($_COOKIE['username'])){
  jump('请登录','login.php');
}








?>