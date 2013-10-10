<!DOCTYPE html>
<html>
<head>
	<title>Prefilling</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post"> 
<!--form ditangani oleh script atau file ini dengan metode POST--> 
Nama
<!--Form text field untuk pengisian string-->
<input type="text" name="nama" 
	value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''  //jika value terisi maka, tampilkan value tersebut setelah tombol submit di klik ?>" 

/> <br/>

<!--tombol submit-->
<input type="submit" value="OK"/> 
</form>

<?php
if (isset($_POST['nama'])) { //jika form 'nama' terisi maka jalankan statement
	echo $_POST['nama']; // statement menampilkan string yang diisi di text field
}

?>

</body>
</html>