<?php
  // Peroleh variabel msg
  $msg = $_GET["msg"] ?? "";
?>

<!DOCTYPE html>
<html>
<head> 
<title>Login Manajemen Data Bintang Film</title>
</head>
<body>
<center>
<h1>Manajemen Data Bintang Film</h1>
<hr>
<form action="menubin.php" method="post">
<table>
  <tr>
    <td>Pemakai</td>
    <td>
      <input type="text" name="pemakai">
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
      <input type="password" name="sandi">
    </td>
  </tr>
</table>
<input type="submit" value="Login">
<input type="reset" value="Reset">
</form>

<?php
  print("$msg<br>\n");
?>

</center>
</body>
</html>
