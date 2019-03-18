<?php

require_once('koneksi.php');
	$nama_fakultas=$_GET['namafakul'];
	
$delete =	mysqli_query($koneksi, "DELETE FROM konfigurasi WHERE nama_fakultas='$nama_fakultas' ");

	if($delete){
		echo "data berhasil di hapus";
	}else{
		echo "data gagal di hapus";
	}

?>
<button><a href="?page=konfigurasi">Kembali</a></button>