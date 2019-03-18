<?php
require_once('koneksi.php');
$npm = $_GET ['npmpembayaran'];

$delete = mysqli_query($koneksi, "DELETE FROM bayar WHERE npm='$npm'");

if($delete){
	echo "data berhasil dihapus";
}else{
	echo "data gagal dihapus";
}


?>
<tr>
		<td><button><a href="?page=pembayaran">Kembali</a></button></td>
	</tr>
