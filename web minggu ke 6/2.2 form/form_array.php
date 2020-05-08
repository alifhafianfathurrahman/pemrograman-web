<html>
<head>
<title> Inputan Data Mahasiswa</title>
</head>
<body>
<table align="center" border="1">
<form method="post" action="hasil_array.php">
<h3 align="center"><blink>Input Nilai Mahasiswa</blink></h3>
<tr>
<td>Nim</td>
<td><input type="text" name="tnim"></td>
</tr>
<tr>
<tr>
<td>Program Studi</td>
<td><select name="program_studi">
<option value>program studi</option>
<option value="Teknik Informatika S1">Teknik informatika S1</option>
<option value="Sistem Informasi S1">Sistem Informasi S1</option>
<option value="Teknik Informatika D3">Teknik Informatika D3</option>
</select></td>
</tr>
<tr>
<td>Nilai Tugas</td>
<td><input type="text" name="ttugas"></td>
</tr>
<tr>
<td>Nilai UTS</td>
<td><input type="text" name="tuts"></td>
</tr>
<tr>
<td>Nilai Uas</td>
<td><input type="text" name="tuas"></td>
</tr>
<tr>
	<td>Catatan Khusus</td>
	<td>
	<p><input type="checkbox" name="catatan_khusus[]"value="Kehadiran >= 70%">Kehadiran >= 70%</p>
	<p><input type="checkbox" name="catatan_khusus[]" value="interaktif dikelas">Interaktif dikelas</p>
	<p><input type="checkbox" name="catatan_khusus[]" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas</p>
	</td>
</tr>
<tr>
<td colspan="2">
<div align="center">
<input type="submit" name="proses" value="submit"/>
</div>
</td>
</tr>
</table>
</form>
</body>
</html>