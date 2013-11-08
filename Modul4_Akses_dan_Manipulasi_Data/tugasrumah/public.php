<?php

function show_admin_data(){ ?>
	<h2 class="heading">Data</h2>
	<?php
	$sql = 'SELECT nim, nama, alamat FROM mahasiswa';
	$res = mysql_query($sql);

	if($res){
		$num = mysql_num_rows($res);
		if($num){
			?>
			<div class="tabel">
			<table border=1 width=700 cellpadding=4 cellspacing=0>
				<tr>
					<th>#</th>
					<th width=120>NIM</th>
					<th width=200>Nama</th>
					<th width=200>Alamat</th>
				</tr>
			<?php
			$i=1;
			while($row = mysql_fetch_row($res)){
				$bg = (($i % 2) != 0) ? '' : 'even';
				$id = $row[0]; ?>
				<tr class="<?php echo $bg; ?>">
					<td width="2%"><?php echo $i;?></td>
					<td>
						<?php echo $id;?>
					</td>
					<td><?php echo $row[1];?></td>
					<td><?php echo $row[2];?></td>
				</tr>
				<?php
				$i++;
				}
				?>
			</table>
		</div>
		<p>Silakan login untuk administrasi data</a>
	<?php
	}else{
		echo 'Belum ada data, isi <a href="' . $root.'&amp;act=add">di sini</a>';
	}
	mysql_close();
	}
}

?>