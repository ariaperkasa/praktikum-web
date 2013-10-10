<!DOCTYPE HTML>
<html>
<head>
	<title>Metode GET</title>
</head>
<body>

<!--//form ditangani oleh script atau file ini dengan metode GET-->
<form action="<?php $_SERVER['PHP_SELF'];?>" method ="get"> 
Nama
<input type="text" name="nama"/> <br/> <!--form text untuk menginputkan nama-->
<input type="submit" value="OK"/> <!--submit button-->
</form>

<?php
if (isset($_GET['nama'])) { //jika form 'nama' terisi maka jalankan statement 
	echo 'Hello, ' . $_GET['nama']; // statemnet menampilkan string 'Hello, (disertai string yang diinputkan di textbox) 
}

?>


</body>
</html>