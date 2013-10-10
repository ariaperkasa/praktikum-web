<!DOCTYPE html>
<html>
	<head>
		<title>Data Check Box - Preselecting</title>
	</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="get">
Hobby <br />
<!--option Membaca-->
<input type="checkbox" name="hobby[]" value="Membaca" 
	<?php 
		if (@$_POST['hobby[]']= 'Membaca') { // memeriksa apakah checkbox hobby yang terpilih memiliki value 'Membaca'
			echo 'checked="checked"'; //jika ya, maka setelah submit maka option Membaca yang akan dicentang di checkbox
		}

	?>
/>Membaca

<!--option Olahraga-->
<input type="checkbox" name="hobby[]" value="Olahraga" 
	<?php 
		if (@$_POST['hobby[]']= 'Olahraga') { // memeriksa apakah checkbox hobby yang terpilih memiliki value Olahraga'
			echo 'checked="checked"'; //jika ya, maka setelah submit maka option Olah raga yang akan dicentang di checkbox
		}
	?>
/>Olahraga

<!--option Menyanyi--> 
<input type="checkbox" name="hobby[]" value="Menyanyi" 
	<?php 
		if (@$_POST['hobby[]']= 'Menyanyi') { // memeriksa apakah checkbox hobby yang terpilih memiliki value 'Menyanyi'
			echo 'checked="checked"'; //jika ya, maka setelah submit maka option Menyanyi yang akan dicentang di checkbox
		}

	?>
/>Menyanyi <br />

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