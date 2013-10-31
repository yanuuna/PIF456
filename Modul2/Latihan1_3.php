<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Identifikasi Metode</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
            Nama : <input type="text" name="nama"> <br>
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_REQUEST['nama'])){
            echo "Metode, ".$_SERVER['REQUEST_METHOD'];
        }
        ?>
    </body>
</html>
