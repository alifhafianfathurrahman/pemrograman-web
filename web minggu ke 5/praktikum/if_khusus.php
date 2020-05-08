<?php
$tahun = date ("y");
$kabisat = ($tahun%4 ==  0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";
?>