<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Latihan 2 - 2</title>
    </head>
    <body>
        <?php
         // Inisialisasi data session
                session_start();

                // Set session jika belum ada
                if (isset($_SESSION['test'])){

                        // Hapus session test
                        unset($_SESSION['test']);
                        echo 'session dihapus';
                }else{
                        echo 'unset<br />';

                        // Mencetak semua elemen session
                        print_r($_SESSION);
                }
        ?>
    </body>
</html>
