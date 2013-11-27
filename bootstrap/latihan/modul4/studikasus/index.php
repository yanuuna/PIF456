<!DOCTYPE html>

<html>

<head> 
	<title>  Akses dan Manipulasi Data </title> 
	<style type="text/css">
	.even {
	background: #ddd;
	}
	</style>
</head>

<body> 

<?php

require_once './koneksi.php';
require_once './datahandler.php';
define('MHS', 'mahasiswa');

data_handler('?m=data');
?>

</body>
</html>

