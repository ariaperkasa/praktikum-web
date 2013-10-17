<DOCTYPE html>
<html>
        <head>
                <title>KALKULATOR</title>
        </head>
        <body>
                
                        <?php 
                                $angka_1 = $_POST ['angka_1'];
                                $angka_2 = $_POST ['angka_2'];
                                $operator = $_POST ['operator'];
                                $hasil = 0;

                                if ($operator == 'tambah'){
                                        $hasil = $angka_1 + $angka_2;
                                }elseif($operator == 'kurang'){
                                        $hasil = $angka_1 - $angka_2;
                                }elseif($operator == 'kali'){
                                        $hasil = $angka_1 * $angka_2;
                                }elseif($operator == 'bagi'){
                                        $hasil = $angka_1 / $angka_2;
                                }
                        ?>



                <div>
                        <h1>KALKULATOR PHP</h1>
                        <br/>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="text"  name="angka_1" value="<?php  echo isset ($_POST['angka_1']) ? $_POST['angka_1']:''; ?>">
                                <select name="operator" >
                                        <option value="tambah" <?php if (isset($_POST['operator'])&&$_POST['operator']=='tambah') {echo "selected";} ?>>+</option>
                                        <option value="kurang" <?php if (isset($_POST['operator'])&&$_POST['operator']=='kurang') {echo "selected";} ?>>-</option>
                                        <option value="kali" <?php if (isset($_POST['operator'])&&$_POST['operator']=='kali') {echo "selected";} ?>>*</option>
                                        <option value="bagi" <?php if (isset($_POST['operator'])&&$_POST['operator']=='bagi') {echo "selected";} ?>>:</option>
                                </select>
                                <input type="text"  name="angka_2" value="<?php  echo isset ($_POST['angka_2']) ? $_POST['angka_2']:''; ?>">
                                <input type="submit" value="=">
                                <input type="text"  name="hasil" value="<?php echo isset ($hasil) ? ($hasil) :''; ?>">
                        </form>



                </div>
        </body>
</html>