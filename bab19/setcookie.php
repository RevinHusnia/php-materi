<?php
  // Peroleh variabel-variabel form
  $pemakai = $_POST["pemakai"] ?? "";
  $sandi = $_POST["sandi"] ?? "";

  // Pasang cookie
  setcookie("cookie_user", $pemakai);
  setcookie("cookie_pass", $sandi);

  $alamat = "http://127.0.0.1/bab19/halutama.php";
  header("Location: $alamat");
?>
