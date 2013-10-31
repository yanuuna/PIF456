<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Data Seleksi</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Pekerjaan : 
            <select name="job">
                <option value="Mahasiswa"> Mahasiswa
                <option value="ABRI"> ABRI
                <option value="PNS"> PNS
                <option value="Swasta"> Swasta
            </select><br>                
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_POST['job'])){
            echo $_POST['job'];
        }
        ?>
    </body>
</html>
