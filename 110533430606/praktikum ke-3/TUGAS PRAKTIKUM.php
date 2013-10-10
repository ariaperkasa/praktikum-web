<!DOCTYPE html>

<html>
<head>
  <title>Tugas Praktikum</title>


<!--CSS Style--> 
<style type="text/css">

body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}

  div { /*kode css untuk elemen div*/
  position:absolute;
  top:25%;
  left:35%;
  border: 3px solid #6badf6;
  width:400px;
  height:300px;
  background-color: #eef7ff;
}

#kotak { /*kode css untuk id form1*/
  margin-left:55px;
}

</style>

<!--java script-->

<script type="text/javascript">
function validasi() {  //fungsi validasi

  var user_login = form.user.value; //var. user_login digunakan untuk mengakses value dari textbox user dari form
  var pwd_login = form.password.value; //var. pwd_login digunakan untuk mengakses value dari textbox password dari form
  var valid = /^\D{4,}$/; //var. valid digunakan untuk menentukan kriteria validasi \D berarti inputan hanya boleh huruf saja sedangkan {4,} minimal inputan yang diijinkan adalah 4 dan boleh lebih
  var pesan=''; //var.pesan digunakan untuk menampung pesan kesalahan
  
  if  ((pwd_login=='') && (user_login=='')) { //mengecek apakah var pwd_login dan user_login kosong
 	pesan = "Username dan Password tidak boleh kosong!\n"; //jika ya maka isi var. pesan dengan string Username dan Password tidak boleh kosong"
	form.user.focus(); //fokus kursor berada pada textbox user
   }
  if (pwd_login==''){ //mengecek apakah var pwd_login kosong 
  	pesan = "Password tidak boleh kosong!\n"; //jika ya maka isi var. pesan dengan string Password tidak boleh kosong"
  }
  
  if (user_login==''){ //mengecek apakah var user_login kosong 
  pesan ="Username tidak boleh kosong !"; //jika ya maka isi var. pesan dengan string Username tidak boleh kosong"
  }
  
  if (user_login !='' && pwd_login!='' && !user_login.match(valid)){ //mengecek jika jika var. user_login, pwd_login tidak kosong dan var. user_login tidak sesuai dengan ketentuan pada var. valid maka jalankan statment
  pesan="Username tidak valid, minimal harus berupa 4 huruf saja !";//jika ya maka isi var. pesan dengan string Username tidak valid, minimal harus berupa 4 huruf saja !"
  }
  
   if (user_login !='' && pwd_login!='' && !pwd_login.match(valid)){//mengecek jika jika var. user_login, pwd_login tidak kosong dan var. pwd_login tidak sesuai dengan ketentuan pada var. valid maka jalankan statment
  pesan="Password tidak valid, minimal harus berupa 4 huruf saja !"; //jika ya maka isi var. pesan dengan string Password tidak valid, minimal harus berupa 4 huruf saja !"
  }
  
   if (user_login !='' && pwd_login!='' && !user_login.match(valid) && !pwd_login.match(valid)){ //mengecek jika jika var. user_login, pwd_login tidak kosong, var user_login dan var. pwd_login tidak sesuai dengan ketentuan pada var. valid maka jalankan statment
  pesan="Username dan Password tidak valid, minimal harus berupa 4 huruf saja !";//jika ya maka isi var. pesan dengan string Username dan Password tidak valid, minimal harus berupa 4 huruf saja !"
  }
   if (pesan != '') { //jika var. pesan tidak kosong maka jalankan statement 
            alert('Terjadi kesalahan:\n'+pesan); //memunculkan alert Terjadi kesalahan : (beserta pesan error)
			return false; //kembalikan nilai salah
   }
  
 }
</script>

</head>

<div>
  
  <h1 align="center" style="color:#3b5998">Login</h1>
  <hr width="250px" color="#6badf6"> <!-- Baris -->
  <br />
  
  <form id="kotak" name="form" method="post" action="login.php" onSubmit="return validasi()" > <!--memanggil dan menjalankan fungsi validasi(), action login.php berarti form ini akan mengirimkan data ke form login.php-->
  <label style="font-family:'sans-serif'">  Username <br /> 
  </label>

  <input name="user" type="text" id="user" value="" size="42px" />
  
  <p>
    <label style="font-family:'sans-serif'">Password <br />
    <input type="text" name="password" id="password" size="42px"/>
    </label>
  </p>

  <p>
    <label>
    <input type="submit" name="Login" id="Login" value="Login">
    </label>
  </p>
  
  </form>

</div>

</body>
</html>