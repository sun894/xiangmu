<?php

function jump($font,$url,$second=1){

  echo $font;
    header("refresh:$second,url='$url'");
exit;
}









?>