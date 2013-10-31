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
        function print_text($teks, $bold=true){
            echo $bold?"<b>".$teks."</b>": $teks;
        }
        print_text("Indonesiaku");
        
        print_text("<br> Indonesiaku", false);
        ?>
    </body>
</html>
