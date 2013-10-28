<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Akses dan Manipulasi Data</title>
        <style>
            .even{background: #ddd;}            
        </style>            
    </head>
    
    <body>
        <?php
        ini_set('display_errors', 1);
        
        require_once './Koneksi.php';
        require_once './data_handler.php';
        
        define('MHS', 'mahasiswa');
        
        data_handler('?m=data');
        ?>
    </body>
</html>
