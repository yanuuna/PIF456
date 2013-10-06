<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    function print_jam(){
        date_default_timezone_set('Asia/Jakarta');
        echo "<h2>".date("H:i:s")."</h2>";
        return date("H");
    }
    
    function greetings(){
        $jam = print_jam();
        if($jam>=0 && $jam<10){
            echo "Selamat pagi..";
        } else if($jam>=10 && $jam<16){
            echo "Selamat siang..";       
        } else if($jam >= 16 && $jam<19){
            echo "Selamat sore..";
        } else{
            echo "Selamat malam..";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Studi Kasus 1 - Fungsi Greeting</h1>
        <hr style="border-width: 2px">
        <div style="font-size: 23px; text-align: center">
        <?php
        echo "<h1>".greetings()."</h1>";
        ?>
    </body>
</html>
