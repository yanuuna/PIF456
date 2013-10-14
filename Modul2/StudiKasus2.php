<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Studi Kasus 2</title>
    </head>
    <body>        
        <?php 
             // Ekstrasi nilai
            if(isset($_POST['hobby'])){
                echo "Hobby saya adalah : ";
                foreach ($_POST['hobby'] as $val){
                    echo $val.", ";
                    $selected[$val]="checked";
                }
                echo "<hr style='border: black dotted medium'>";
            }
        ?>                
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Hobby :
            <input type="checkbox" name="hobby[]" <?php echo $selected['Membaca'] ?> value="Membaca" > Membaca
            <input type="checkbox" name="hobby[]" <?php echo $selected['Olahraga'] ?> value="Olahraga"> Olahraga
            <input type="checkbox" name="hobby[]" <?php echo $selected['Menyanyi'] ?> value="Menyanyi"> Menyanyi
            <br>
            <input type="submit" value="OK">
        </form>
    </body>
</html>
