<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
defined('VALID') or die('not allowed');

function init_login() {
$nama = 'admin';
$pass = 'admin';

if(isset($_POST['nama']) && isset($_POST['pass'])) {
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        if(($n === $nama) && ($p === $pass)) {
        setcookie('nlogin', $n);
        setcookie('time', time());
?>
<script type="text/javascript">
document.location.href="./";
</script>

<?php
} else {
        echo 'Nama/Password Tidak Sesuai';
        return false;
}
}
}

function validate() {
if (!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time'])) {
?>
  <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			</br> </br> <h3>
				LOGIN
			</h3>
			</br>
			<form class="form-horizontal" role="form" method="post">
				<div class="form-group">
					 <label for="username" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" />
					</div>
				</div>
				<div class="form-group">
					 <label for="password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="pass" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <input type="submit" class="btn btn-default" value="Sign In"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
exit;
}
        if (isset($_GET['m']) && $_GET['m'] == 'logout') {
if(isset($_COOKIE['nlogin'])) {
        setcookie('nlogin', '', time()-3*3600);
}
if(isset($_COOKIE['time'])) {
        setcookie('time', '', time()-3*3600);
}


?>

<script type="text/javascript">
document.location.href="./";
</script>
<?php
}
}
?>