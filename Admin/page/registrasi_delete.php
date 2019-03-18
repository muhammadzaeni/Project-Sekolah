<?php

require_once('koneksi.php');
	$npm=$_GET['npmregis'];
	
$delete =	mysqli_query($koneksi, "DELETE FROM registrasi WHERE npm='$npm' ");

	if($delete){
		echo "data berhasil di hapus";
	}else{
		echo "data gagal di hapus";
	}

?>
<button><a href="?page=registrasi">Kembali</a></button>