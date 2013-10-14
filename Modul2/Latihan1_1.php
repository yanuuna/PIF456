<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Metode GET</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
            Nama : <input type="text" name="nama">
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_GET['nama'])){
            echo "Halooo ".$_GET['nama'];
        }
        ?>
    </body>
</html>
