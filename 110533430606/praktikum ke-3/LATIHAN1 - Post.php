<!DOCTYPE html>
<html>
<head>
	<title>Metode Post</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post"> 
<!--form ditangani oleh script atau file ini dengan metode POST-->
Nama
<input type="text" name="nama"/> <br/> <!--form text untuk menginputkan nama-->
<input type="submit" value="OK"/> <!--submit button-->
</form>

<?php
if (isset($_POST['nama'])) { //jika form 'nama' terisi maka jalankan statement
	echo 'Hello, ' . $_POST['nama']; 
	//statemnet menampilkan string 'Hello, (disertai string yang diinputkan di text field
}

?>


</body>
</html>