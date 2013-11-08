<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
            ini_set('display_errors', 1);
            define('_VALID', 1);
        ?>
        <title>Tugas Praktikum - Login</title>
        <style type="text/CSS">
	body {font-family: 'Segoe UI', Tahoma, Helvetica, Sans-Serif; background-color:#000}
	h1 {font-size: 60px; text-align:center; color:#333; font-style:italic;}
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0}
	td {margin: 0; padding: 5px 0}
	input {width: 100%; padding: 8px; border: 1px solid #D2D2D2; border-radius: 10px}
	blockquote {font-size: 16px; margin: 0px 0px 15px 0; padding: 10px; background: #000; border: 1px solid #FFD47F; border-radius: 5px; color:#FFF;}
	.username {padding: 0 5px 0 20px}
	.password {padding: 0 5px 0 20px}
	.button {font-weight: bold; max-width:80px; margin: 30px 0 10px 0; padding: 10px 5px; float: right; clear: both; color: #000; background:#CCC; border: none}
	.button:hover {background:#222; cursor: hand; color:#FFF}
	#header {max-width: 600px; margin: 0 auto; margin-top:70px; padding: 20px; color: #FFF; background:#CCC; border: 1px solid #D2D2D2; border-bottom: none; border-top-left-radius: 15px; border-top-right-radius: 15px}
	#content {max-width: 600px; margin: 0 auto;margin-top:70px; padding: 20px 20px 20px 20px; background: #F5F5F5; border: 1px solid #D2D2D2; border-top: none; border-radius: 15px;}	
	</style>

        <script type="text/javascript">                        
                function formCheck(){
                if(login.username.value == "" && login.password.value == ""){
                        alert("Username dan Password Harus di isi untuk login");
                        login.username.focus();
                        return false;
                }
                if(login.username.value == ""){
                        alert("Username Harus di isi untuk login");
                        login.username.focus();
                        return false;
                }
                if(login.password.value == ""){
                        alert("Password harus di isi untuk login");
                        login.password.focus();
                        return false;
                }
                else
                return true; 
                }
        </script>

        <script language="javascript">
                function getKey(e){
                        if (window.event)
                                return window.event.keyCode;
                        else if (e)
                                return e.which;
                        else
                                return null;
                }

                function restrictChars(e, validList){
                        var key, keyChar;
                        key = getKey(e);
                        if (key == null) return true;
                        keyChar = String.fromCharCode(key).toLowerCase();
                        if (validList.toLowerCase().indexOf(keyChar) != -1)
                                return true;
                        if(key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
                                return true;
                        return false;
                }

                function alphabetOnly(e){
                        return restrictChars( e, "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
                }
        </script>

</head>
<body>
        <div id="content">
                <?php
                        if(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
                                echo '<h1>Login</h1>';
                        }elseif(isset($_SESSION['loggedin']) || isset($_SESSION['time'])){
                                echo '<h1>Home</h1>';
                        }
                ?>
                <?php

                      require_once('./auth.php');

			init_login();
			validate();
			echo '<div class="info">Login sebagai <b>' . $_SESSION['loggedin'] . '</b> | <a href="?logout=true"><b>logout</b></a></div><br />';
			ini_set('display_errors',1);

			// Meng-include file koneksi dan data handler
			require_once './koneksi.php';
			require_once './data_handler.php';

			// Konstanta nama tabel
			define('MHS', 'mahasiswa');

			// Memanggil fungsi data handler
			data_handler('?m=data');
                ?>                
                <p style="text-align: center; margin-bottom: 220px">                
                Ini adalah halaman home
                </p>               
        </div>
    </body>
</html>