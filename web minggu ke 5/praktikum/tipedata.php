<?php
$nim  = "A12.2018.06037";
$nama = 'Alif Hafian Fathurrahman';
$umur = 20;
$nilai = 89.5;
$status = TRUE;
echo "Nim : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur;print "<br>";
printf ("Nilai  :  %.3f<br>", $nilai);
if($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>