<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
function tabel(){       
        $kolom = 3;
        $baris = 4;
        $a=1;
        echo "<table border=1 width=300px>";
        for($b=1; $b<=$baris; $b++){
            echo "<tr>";
            for($k=1; $k<=$kolom; $k++){
                echo "<td>".$a."</td>";
                $a++;
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>        
        <h1>Studi Kasus 2 - Membuat tabel</h1>
        <hr style="border-width: 2px">
        <div style="margin-left: 100px; margin-right: 100px; text-align: center">
            Kolom : <input type="text" value="3">
            Baris : <input type="text" value="4">
            <hr style="border: black dotted medium">   
            <?php tabel(); ?>       
        </div>
    </body>
</html>
