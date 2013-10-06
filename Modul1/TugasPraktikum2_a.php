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
        $cells = 1;
        ?>
        
        <?php $rows = (int) $_POST["RowsTotal"]; ?>
        <?php $columns = (int) $_POST["ColsTotal"]; ?>
        
        <?php
        $width = $columns * 50;
        echo "<table width=".$width." border=1>";
        for($rw=1; $rw<=$rows; $rw++){
            echo "<tr>";
            for($cols=1; $cols<=$columns; $cols++){
                echo "<td><div align=center>".$cells."</div></td>";
                $cells++;
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </div>
    </body>
</html>
