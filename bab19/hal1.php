<?php
  
  include "pass.php";

  $cookie_user = $_COOKIE["cookie_user"] ?? "";
  $cookie_pass = $_COOKIE["cookie_pass"] ?? "";

  if (!password_valid($cookie_user,
                      $cookie_pass))
  {
     die("Maaf. Anda tidak bisa mengakses" .
         " halaman 1");
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Halaman 1</title>
</head>
<body>
Anda bisa melihat halaman ini<br>
hanya kalau Anda telah melakukan login
</body>
</html>
