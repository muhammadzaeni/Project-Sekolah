<?php
require_once('koneksi.php');
$npm = $_GET ['npmmhs'];

$delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$npm'");

if($delete){
	echo "data berhasil dihapus";
}else{
	echo "data gagal dihapus";
}

?>
