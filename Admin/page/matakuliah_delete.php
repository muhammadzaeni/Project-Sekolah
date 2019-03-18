<link rel="stylesheet" type="text/css" href="asset/css/button.css">
<?php

require_once('koneksi.php');
	$kdmatkul=$_GET['kdmatkul'];
	
$delete =	mysqli_query($koneksi, "DELETE FROM matakuliah WHERE kode_matakuliah='$kdmatkul' ");

	if($delete){
		echo "data berhasil di hapus";
	}else{
		echo "data gagal di hapus";
	}

?>
<button><a href="?page=Matakuliah">Kembali</a></button>