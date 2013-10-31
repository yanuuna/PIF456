<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Data Checkbox</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Hobby :
            <input type="checkbox" name="hobby[]" value="Membaca"> Membaca
            <input type="checkbox" name="hobby[]" value="Olahraga"> Olahraga
            <input type="checkbox" name="hobby[]" value="Menyanyi"> Menyanyi
            <br>
            <input type="submit" value="OK">
        </form>
        <?php
        // Ekstrasi nilai
        if(isset($_POST['hobby'])){
            foreach ($_POST['hobby'] as $key => $val){
                echo $key."->".$val."<br>";
            }
        }
        ?>
    </body>
</html>
