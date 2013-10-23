<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Latihan 1- 2</title>
    </head>
    <body>
        <?php
          if(isset($_GET['q']) && $_GET['q'] == 1){
                        if(isset($_COOKIE['test'])){ 
                                echo 'support'; 
                        }else{
                                echo 'tidak support';
                        } 
                }else{
                        setcookie('test', 'value');
                        $self = $_SERVER['PHP_SELF'];

                        // Redireksi ke current script
                        header('Location: ' . $self . '?q=1');
                        exit;
                }
        ?>
    </body>
</html>
