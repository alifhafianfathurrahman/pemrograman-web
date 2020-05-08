<html>
<head>
<title>Hasil</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="2">
<?php
$program_studi =$_POST ['program_studi'];
$nim=$_POST['tnim'];
$tugas=$_POST['ttugas'];
$uts=$_POST['tuts'];
$uas=$_POST['tuas'];
$na=(0.40*$tugas)+(0.30*$uts)+(0.30*$uas);
if ($na >=85)
{
$ket = 'Lulus' ;

}
else if ($na >=70)
{
$ket = 'Lulus' ;

}

else if ($na >= 60)
{
$ket = 'Lulus' ;

}
else if ($na >=50)
{
$ket = 'Lulus' ;
}
else 
{
$ket = 'Tidak Lulus' ;
}
$data_catatan_khusus=$_POST ['catatan_khusus'];
$selected_catatan_khusus=array();
 foreach($data_catatan_khusus as $catatan_khusus)
 {
 	array_push($selected_catatan_khusus, $catatan_khusus);
 }
?>
<tr>
<th>Program Studi</th>
<th>Nim</th>
<th>Nilai akhir</th>
<th>Status</th>
<th>Catatan khusus</th>
</tr>
<tr>
<td align="center"><?php echo$program_studi; ?></td>
<td align="center"><?php echo$nim;?></td>
<td align="center"><?php echo$na; ?></td>
<td align="center"><?php echo$ket;?></td>
<td align="center"><?php
	foreach($selected_catatan_khusus as $catatan_khusus)
	{ 
	echo$catatan_khusus ."<br>";
}
	?></td>

</table>
</tr>
</body>
</html>