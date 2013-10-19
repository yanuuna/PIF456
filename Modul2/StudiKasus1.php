<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Studi kasus 1</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Pekerjaan : 
            <select name="job">
                <option value="Mahasiswa" <?php if(isset($_POST['job'])=='Mahasiswa' && $_POST['job']=='Mahasiswa') echo 'selected="selected"'; ?>> Mahasiswa </option>
                <option value="ABRI" <?php if(isset($_POST['job'])=='ABRI'&& $_POST['job']=='ABRI') echo 'selected="selected"'; ?>> ABRI </option>
                <option value="PNS" <?php if(isset($_POST['job'])=='PNS' && $_POST['job']=='PNS') echo 'selected="selected"'; ?>> PNS </option>
                <option value="Swasta" <?php if(isset($_POST['job'])=='Swasta' && $_POST['job']=='Swasta') echo 'selected="selected"'; ?>> Swasta </option>
                <option value="Wirausaha" <?php if(isset($_POST['job'])=='Wirausaha' && $_POST['job']=='Wirausaha') echo 'selected="selected"'; ?>> Wirausaha </option>
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
