<?php
  include "pass.php";

  $cookie_user = $_COOKIE["cookie_user"] ?? "";
  $cookie_pass = $_COOKIE["cookie_pass"] ?? "";

  if (empty($cookie_user))
  {
     $alamat = "http://127.0.0.1/bab19/login.php";
     $msg = "Masukkan nama pemakai dan password !";
     header("Location: $alamat?msg=$msg");
     exit();
  }

  if (! password_valid($cookie_user,
                       $cookie_pass))
  {
     $alamat = "http://127.0.0.1/bab19/login.php";
     $msg = "Password tidak valid !";
     header("Location: $alamat?msg=$msg");
     exit();
  }
?>

<DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
</head>
<body>
<A HREF="hal1.php">Halaman 1</A>
<br>
<A HREF="hal2.php">Halaman 2</A>
<br>
<A HREF="logout.php">Logout</A>
<br>
</body>
</html>
