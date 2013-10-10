<!DOCTYPE html>
<html>
	<head>
		<title>Menangani Nilai Check Box</title>
	</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="get"> <!--form ditangani oleh script atau file ini dengan metode GET-->
Hobby <br />
<input type="checkbox" name="hobby[]" value="Membaca" />Membaca <!--Prefiling pilihan Membaca, artinya ketika pertama kali dijalankan option Membaca sudah terpilih terlebih dahulu-->
<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga
<input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi <br />

<br/>

<input type="submit" value="OK"/> <!--Submit button-->

</form>
<br />

<?php
if (isset($_GET['hobby'])) { //jika checkbox 'hobby' ada yang terpilih maka jalankan statement
	foreach ($_GET['hobby'] as $key => $val){ //untuk setiap value yang terpilih, diberikan indeks array secara berurutan berdasarkan value nya. $key merupakan indeks, sedangkan $val adalah valuenya
	echo $key . ' -> ' .$val . ' <br />'; // menampilkan indeks data beserta valuenya
}}

?>


</body>
</html>