<!DOCTYPE html>
<html>
<head>
<title>Contoh Pemakaian Operator Penugasan --</title>
</head>
<body>

  <?php
    $bil = 100;
    print("Isi variabel bil = $bil <br>\n");

    $bil += 2;
    print("Isi variabel bil = $bil <br>\n");
    
    $bil -= 2;
    print("Isi variabel bil = $bil <br>\n");

    $bil /= 2;
    print("Isi variabel bil = $bil <br>\n");

    $bil %= 30;
    print("Isi variabel bil = $bil <br>\n");

    $bil &= 2;
    print("Isi variabel bil = $bil <br>\n");

    $bil |= 10;
    print("Isi variabel bil = $bil <br>\n");

    $bil ^= 8;
    print("Isi variabel bil = $bil <br>\n");

    $bil = "Seratus";
    $bil .= " Dua";
    print("Isi variabel bil = $bil <br>\n");
  ?>

</body>
</html>
