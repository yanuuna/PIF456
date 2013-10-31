<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Set Cookie</title>
    </head>
    <body>
        <?php
        // Men set nilai cookie
        setcookie('nama_cookie', 'nilai_cookie');
        
        //mendapatkan nilai cookie
        echo $_COOKIE['nama_cookie'];
        ?>
        <p>Tekan Refresh (F5)</p>
    </body>
</html>
