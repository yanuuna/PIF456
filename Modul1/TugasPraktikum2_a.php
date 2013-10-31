<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tugas Praktikum 2</title>
    </head>
    <body>
        <h1>Tugas Praktikum 2 - Tabel Fleksibel </h1>
        <hr style="border-width: 2px">        
        <h2>PROSES TABEL</h2>
        <div style="margin-left: 200px; margin-right: 100px; text-align: center">
        <?php
        $rw = 1;
        $cols = 1;
        $c=1;
        ?>
        
        <?php $kolom = (int) $_POST["Kolom"]; ?>
        <?php $cells = (int) $_POST["Cell"]; ?>
        
        <?php
        $width = $kolom * 70;
        echo "<table width=".$width." border=1>";
        while($rw != $cells){
            echo "<tr>";
            $rw++;  
            for($cols=1; $cols<=$kolom; $cols++){ 
                if($c<=$cells){
                    echo "<td><div align=center>".$c."</div></td>";   
                    $c++;                              
                } else {
                    $rw=$cells;
                }                                                                               
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </div>
    </body>
</html>
