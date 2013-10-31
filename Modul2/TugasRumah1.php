<!DOCTYPE html>
<html>
    <title>Tugas Rumah 1</title>
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
	#header {max-width: 360px; margin: 0 auto; margin-top:70px; padding: 20px; color: #FFF; background:#CCC; border: 1px solid #D2D2D2; border-bottom: none; border-top-left-radius: 15px; border-top-right-radius: 15px}
	#content {max-width: 360px; margin: 0 auto; padding: 20px 20px 20px 20px; background: #F5F5F5; border: 1px solid #D2D2D2; border-top: none; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px}
	
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
	<div id="header">
		<h1>Login</h1>
	</div>
	<div id="content">
		<?php
			if(isset($_POST['username']) && isset($_POST['password'])){
				if(is_string($_POST['username']) && is_string($_POST['password'])){ // Validasi form bernilai string
					if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
						print '<blockquote>Selamat datang ' . $_POST['username'].'</blockquote>';
					}elseif($_POST['username'] == 'admin' && $_POST['password'] != 'admin'){
						print '<blockquote>Password salah</blockquote>';
					}elseif($_POST['username'] != 'admin' && $_POST['password'] == 'admin'){
						print '<blockquote>Username salah</blockquote>';
					}else{
						print '<blockquote>Username & Password salah</blockquote>';
					}
				}
			}
		?>
		<form id="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return formCheck();">
			<table>
				<tr>
					<td><div class="username">Username </div></td>
					<td><input type="text" name="username" id="username" onKeyPress="return alphabetOnly(event)"></td>
				</tr>
				<tr>
					<td><div class="password">Password </div></td>
					<td><input type="password" name="password" id="password" onKeyPress="return alphabetOnly(event)"></td>
				</tr>
			</table>
			<input class="button" type="submit" value="LOGIN" />			
		</form>
	</div>
</body>
</html>
