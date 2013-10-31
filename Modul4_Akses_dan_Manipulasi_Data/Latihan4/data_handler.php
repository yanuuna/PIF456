<?php
/*
 * Fungsi utama untuk menangani pengolahan data
 * @param string root parameter menu
 */
function data_handler($root){
    if(isset($_GET['act']) && $_GET['act'] == 'add'){
        data_editor($root);
        return;
    }
    
    $sql = 'SELECT COUNT(*) AS total FROM '.MHS;
    $res = mysql_query($sql);
    
    //jika data di tabel ada
    if(mysql_num_rows($res)){
        if(isset($_GET['act']) && $_GET['act'] != ''){
            switch ($_GET['act']){
                case 'edit':
                    if(isset($_GET['id']) && ctype_digit($_GET['id'])){
                        data_editor($root, $_GET['id']);
                    } else {
                        show_admin_data($root);
                    }
                    break;
                case 'view':
                    if(isset($_GET['id']) && ctype_digit($_GET['id'])){
                        data_detail($root, $_GET['id']);
                    } else {
                        show_admin_data($root);
                    }
                    break;
                case 'del':
                    if(isset($_GET['id']) && ctype_digit($_GET['id'])){
                        //key untuk hapus data
                        $id = $_GET['id'];
                        $sql = 'DELETE from '.MHS.' where id='.$id;
                        $res = mysql_query($sql);
                        if($res){ ?>
                            <!-- Lengkapi script redirect-->
                            
                        <?php
                        } else {
                            echo "Gagal menghapus data";
                        }
                    } else {
                        show_admin_data($root);
                    }
                    break;
                default:
                    show_admin_data($root);
            }
        } else {
            show_admin_data($root);
        }
        @mysql_close();
    } else {
        echo "Data tidak ditemukan";
    }
}



/**
 * Fungsi untuk menampilkan menu administrasi
 * @param string root parameter menu
 * 
*/

function show_admin_data($root){?>
    <h2 class="heading">Adminitrasi Data</h2>
<?php
    $sql = "SELECT nim, nama, alamat FROM ".MHS;
    $res = mysql_query($sql);
    if($res){
        $num = mysql_num_rows($res);
        if($num){
        ?>
        <div class="tabel">
            <div style="padding: 5px;">
                <a href="<?php echo $root; ?>&amp;act=add">Tambah Data</a>
            </div>
            <table border=1 width="85%" cellpadding=4 cellspacing=0>
                <tr>
                    <th width="3%">#</th>
                    <th width="19%">NIM</th>
                    <th width="25%">Nama</th>
                    <th width="33%">Alamat</th>
                    <th width="20%">Menu</th>
                </tr>
                <?php
				$i = 1;
				while($row = mysql_fetch_row($res)){
					$bg = (($i%2) != 0)? '':'even';
					$id = $row[0]; ?>
                    <tr class="<?php echo $bg; ?>">
                    	<td><?php echo $i; ?></td>
                        <td><a href="<?php echo $root;?>&amp;act=view&amp;id=<?php echo $id; ?>" title="Lihat Data"><?php echo $id; ?></a></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td align='center'>
                        <a href="<?php echo $root;?>?&amp;act=edit&amp;id=<?php echo $id; ?>"> Edit </a> | 
                        <a href="<?php echo $root;?>?&amp;act=del&amp;id=<?php echo $id; ?>"> Delete </a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    }
                ?>
            </table>                
        </div>
<?php
        } else {
            echo "Belum ada data, isi <a href='".$root."&amp;act=add'> disini </a>";
        }
    }
}
?>
