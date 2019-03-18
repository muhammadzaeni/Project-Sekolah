<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
	
require_once('koneksi.php');
	$kode_prodi = $_POST['kode_prodi'];
	$nama_prodi = $_POST['nama_prodi'];

	$insert = mysqli_query($koneksi, " INSERT INTO prodi (kode_prodi ,nama_prodi) VALUES ('$kode_prodi','$nama_prodi') ");
if($insert)
{
	echo 'Data Berhasil Disimpan';

}else{
	echo 'Data Gagal ditambahkan';
}

?>

<a href="?page=prodi"><button>Kembali</button></a>