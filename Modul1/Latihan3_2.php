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
        $str = "123abc";
        
        //casting nilai variabel ke integer
        $bil = (int) $str;
        
        echo gettype($str);
        echo "<br>";
        
        echo gettype($bil);
        ?>
    </body>
</html>
