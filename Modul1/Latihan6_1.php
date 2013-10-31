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
        <?php
        function do_print(){
            echo time();
        }
        do_print();
        echo "<br>";
        
        //contoh fungsi penjumlahan
        function jumlah ($a, $b){
            return ($a+$b);
        }
        
        echo jumlah(5, 4);
        ?>
    </body>
</html>
