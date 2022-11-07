<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<?php
  $msg = $_GET["msg"] ?? "";
  if (!empty($msg))
     print("$msg<br>\n");
?>

<form action="setcookie.php" method="post">
Pemakai :
<input type=text name=pemakai><br><br>
Password :
<input type=password name=sandi><br><br>
<input type=submit value="Login">
</form>

</body>
</html>
