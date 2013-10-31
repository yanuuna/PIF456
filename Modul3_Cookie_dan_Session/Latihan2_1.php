<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Latihan 2 - 1</title>
    </head>
    <body>
        <?php
        // Inisialisasi data session
                session_start();

                // Set session jika belum ada 
                if(!isset($_SESSION['test'])){
                        $_SESSION['test'] = 'value';
                }else{
                        echo 'Session di-set <br />';

                        // Mencetak nilai session test
                        echo 'Nilai: ' . $_SESSION['test'] . '<br />';

                        // Mencetak semua elemen session
                        print_r($_SESSION);
                } 
        ?>
    </body>
</html>
