<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Latuhan 1 - 3</title>
    </head>
    <body>
        <?php
         setcookie('nama_cookie', 'nilai_cookie');
                if (isset($_COOKIE['nama_cookie'])){
                        echo 'cookie di-set <br />';

                        // Menghapus cookie, dengan masa berlaku 3 jam yang lalu
                        setcookie('nama_cookie', '', time() - 3 * 3600);
                        echo 'cookie dihapus';
                }else{
                        echo 'unset';
                }
        ?>
    </body>
</html>
