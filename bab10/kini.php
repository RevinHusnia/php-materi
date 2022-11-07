<!DOCTYPE html>
<html>
<head>
<title>Contoh date</title>
</head>
<body>

<?php
  $nama_hari = array(
	 "Minggu", "Senin", "Selasa", "Rabu",
	 "Kamis", "Jumat", "Sabtu"
  );
  
  $nama_bulan = array(
	  "", "Januari", "Februari", "Maret",
	  "April", "Mei", "Juni", "Juli", "Agustus",
	  "September", "Oktober", "November", "Desember"
  );
  
  $kode_hari = date("w");
  $hari = $nama_hari[$kode_hari];
  $tanggal = date("j");
  $kode_bulan = intval(date("m"));
  $bulan = $nama_bulan[$kode_bulan];
  $tahun = date("Y");
  
  print("Hari $hari, $tanggal $bulan $tahun");
?>

</body>
</html>
