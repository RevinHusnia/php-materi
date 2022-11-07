<!DOCTYPE html>
<html>
<head>
<title>Contoh crypt untuk Menangani Password</title>
</head>
<body>

  Password yang betul adalah: abc123x
  
  <form method="post">
    Nama :
    <input type="text" name="password"><br><br>
    Password :
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>

<?php
  $password = $_POST["password"];
  if (isset($password))
  {
     $kode = "12";
     $passw_valid = crypt("abc123x", $kode);
     $enkripsi    = crypt($password, $kode);

     if ($passw_valid == $enkripsi)
        print("Password valid");
     else
        print("Password salah");
  }
?>

</body>
</html>
