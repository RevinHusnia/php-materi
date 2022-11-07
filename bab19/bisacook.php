<?php
  $str_uji = "uji_query";

  $query_string = $_SERVER["QUERY_STRING"]; 
  $php_self = $_SERVER["PHP_SELF"];

  if ($query_string != $str_uji)
  {
     setcookie("uji_cookie", $str_uji);
     header("Location: $php_self?$str_uji");
     exit();
  }

  $uji_cookie = $_COOKIE["uji_cookie"] ?? "";
  if ($uji_cookie == $str_uji)
     print("Browser mendukung Cookie");
  else
     print("Browser TIDAK mendukung Cookie");
?>
