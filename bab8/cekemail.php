<!DOCTYPE html>
<html>
<head>
<title>Contoh Pemeriksaan Alamat E-mail</title>
</head>
<body>

  <FORM>
    e-mail Anda: 
    <INPUT TYPE="TEXT" NAME="email"><br><br>
    <INPUT TYPE="SUBMIT" VALUE="Cek">
  </FORM>

<?php
  $email = $_GET["email"] ?? NULL;
  if (isset($email))
     if (empty($email))
        print("Harap mengisikan e-mail <br>\n");
     else
     {
        // Cek e-mail
		$ekspresi = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*" . 
		            "@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
        if (preg_match($ekspresi, $email))
           print("Alamat e-mail $email valid <br>\n");
        else
           print("Alamat e-mail $email tidak valid <br>\n");
     }
?>

</body>
</html>
