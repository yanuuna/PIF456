<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Prefilling Text Field</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Nama : <input type="text" name="nama" value="
                          <?php
                            echo isset($_POST['nama'])? $_POST['nama'] : '';
                          ?>"> <br>
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_POST['nama'])){
            echo $_POST['nama'];
        }
        ?>
    </body>
</html>
