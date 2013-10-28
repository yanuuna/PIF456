<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tambah Data</title>
    </head>
    <body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    	<table width="80%" border="0.5" cellspacing="0" cellpadding="4">
  <tr>
    <td width="14%">NIM</td>
    <td width="86%"><input type="text" name="nim" size="100%"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" size="100%"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" size="100%"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="SIMPAN"></td>
  </tr>
</table>

    </form>
    
    <?php
    require_once './Koneksi.php';
    
    if(isset($_POST['nim']) && isset($_POST['nama'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        
        $sql = "INSERT INTO mahasiswa VALUES
            ('".$nim."','".$nama."','".$alamat."')";
        
        $res = mysql_query($sql);
        if($res){
            echo "Data berhasil di tambahkan";
            mysql_close();
        } else {
            echo "Gagal menambah data";
            echo mysql_error();
        }
    }
    echo '<hr>';
    
    require_once './Latihan3_1.php';
    ?>
    </body>
</html>
