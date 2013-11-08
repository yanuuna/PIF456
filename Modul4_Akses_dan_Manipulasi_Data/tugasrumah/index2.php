<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Modul 4 | Latihan 4</title>

	<script language="JavaScript">
		function konfirmasi(Keterangan){
			tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM '+ Keterangan + ' ?');
			if (tanya == true) return true;
			else return false;
		}
	</script>

</head>
<body>
<style type="text/css"> 
  .even { 
    background: #ddd; 
  } 
  </style> 
</head> 
 
<body> 

	<?php
		ini_set('display_errors',1);

		// Meng-include file koneksi dan data handler
		require_once './koneksi.php';
		require_once './data_handler.php';

		// Konstanta nama tabel
		define('MHS', 'mahasiswa');

		// Memanggil fungsi data handler
		data_handler('?m=data');
	?>

</body>
</html>