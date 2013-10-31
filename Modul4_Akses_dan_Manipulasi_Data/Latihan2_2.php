<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menciptakan Tabel</title>
    </head>
    <body>
        <?php
        require_once './Koneksi.php';
        
        $sql='CREATE TABLE mahasiswa(
            nim VARCHAR(12) NOT NULL,
            nama VARCHAR(40) NOT NULL,
            alamat VARCHAR(100),
            PRIMARY KEY(nim)
            ) ENGINE=MyISAM;';
        
        $res = mysql_query($sql);
        if($res){
            echo "Tabel Created";
            mysql_close();
        } else {
            echo mysql_error();
        }
        ?>
    </body>
</html>
