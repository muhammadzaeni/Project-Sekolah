<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php

require_once('koneksi.php');
	$nidn=$_GET['nidndosen'];
	
$delete =	mysqli_query($koneksi, "DELETE FROM dosen WHERE nidn='$nidn' ");

	if($delete){
		echo "data berhasil di hapus";
	}else{
		echo "data gagal di hapus";
	}

?>
<button><a href="?page=dosen">Kembali</a></button>