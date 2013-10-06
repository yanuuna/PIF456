<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body> 
        <h1>Operasi Perulangan</h1>
        <hr style="border-width: 2px">
        <div style="margin-left: 500px; font-size: 23px">
        <?php
        $perulangan=10;
	$c = $perulangan-1;
        for($a = 1; $a <= $perulangan; $a++) {
            for($b = 1; $b <= $c; $b++) {
                    echo " &nbsp; ";
            }
            for($e = 1; $e <= $a; $e++) {
                    echo $e;
            }
            for($d = $a - 1; $d >= 1; $d--) {
                    echo $d;
            }
            $c--;
            echo " <br>";
        }
        $c = 1;
        for($a = $perulangan-1; $a >= 1; $a--) {
            for($b = 1; $b <= $c; $b++) {
                    echo " &nbsp; ";
            }
            for($e = 1; $e <= $a; $e++) {
                    echo $e;
            }
            for($d = $a - 1; $d >= 1; $d--) {
                    echo $d;
            }
            $c++;
            echo " <br>";
        }
        ?>
    </body>
</html>
