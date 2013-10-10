<!DOCTYPE html>
<html>
	<head>
	<title>Nilai Seleksi</title>
	</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="get"> <!--form ditangani oleh script atau file ini dengan metode GET--> 
Pekerjaan
<select name="job"> <!--for select diberi nama job-->
	<option value="Mahasiswa">Mahasiswa <!--option Mahasiswa-->
	<option value="ABRI">ABRI <!--option ABRI-->
	<option value="PNS">PNS <!--option PNS-->
	<option value="Swasta">Swasta <!--option Swasta-->
</select>
<input type="submit" value="OK"/> <!--Submit Button-->
</form>

<?php
if (isset($_GET['job'])) { //jika form select 'job' ada yang terpilih maka jalankan statement
	echo  $_GET['job']; // statement menampilkan string yang dipilih di form select dropdown
}

?>


</body>
</html>