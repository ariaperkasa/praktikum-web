<!DOCTYPE html>
<html>
<head>
	<title>Data Radio Button</title>
</head>
<body>
	
	<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post"> 
	<!--form ditangani oleh script atau file ini dengan metode POST--> 
	Jenis Kelamin
	<br />	
	<input type="radio" name ="sex" value="Pria" />Pria  <!--pilihan radio button "Pria"-->
	<input type="radio" name ="sex" value="Wanita" />Wanita <br />  <!--pilihan radio button "Wanita"-->

	<input type="submit" value="ok" />
</form>

<?php
if (isset($_POST['sex'])) { //jika radio button 'sex' terpilih maka jalankan statement
	echo $_POST['sex']; // statement menampilkan string yang dipilih di RB
}

?>

</body>
</html>