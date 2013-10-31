<?php
require_once './Koneksi.php';

$sql='SELECT * FROM mahasiswa';
$res = mysql_query($sql);
if($res){
    if(mysql_num_rows($res)){ ?>

<table width="50%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td width="7%"> # </td>
    <td width="24%">NIM</td>
    <td width="28%">Nama</td>
    <td width="41%">Alamat</td>
  </tr>
  <?php
  $i=1;
  while($row = mysql_fetch_row($res)){ 
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
  </tr>
  <?php 
  $i++;
  }
  ?>
</table>        

<?php        
    } else {
        echo "Data tidak ditemukan";
    }
    mysql_close();
}
?>
