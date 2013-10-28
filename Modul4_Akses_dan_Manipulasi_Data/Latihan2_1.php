<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menciptakan Database</title>
    </head>
    <body>
        <?php
        require_once './Koneksi.php';
        
        $db = 'myweb';
        
        $res = mysql_query('CREATE DATABASE '.$db);
        if($res){
            echo "Database ".$db." Created";
            mysql_close();
        } else {
            echo mysql_error();
        }
        
        ?>
    </body>
</html>
