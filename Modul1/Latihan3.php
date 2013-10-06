<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cek Type</title>
    </head>
    <body>
        <?php
        $bil = 3;
        var_dump(is_int($bil));
        echo "<br>";
        
        $var = "";
        var_dump(is_string($var));
        echo "<br>";
        ?>
    </body>
</html>
