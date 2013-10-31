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
        $i = 0;
        
        if($i == 0){
            echo "i equals 0";            
        } elseif ($i == 1) {
            echo "i equals 1";
        } elseif ($i == 2) {
            echo "i equals 2";    
        }
        
        //eqivalen, pendekatan switch
        switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
        }
        ?>
    </body>
</html>
