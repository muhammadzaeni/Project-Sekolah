<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php

 require_once("koneksi.php");
 $key	= $_POST['key'];
 $kode_matakuliah = $_POST['kode_matakuliah'];
 $nama_matakuliah = $_POST['nama_matakuliah'];
 $kdprodi = $_POST['kdprodi'];
 $sks = $_POST['sks'];
 $semester = $_POST['semester'];
 $aktif = $_POST['aktif'];


$edit =	mysqli_query($koneksi, "UPDATE matakuliah SET kode_matakuliah='$kode_matakuliah', nama_matakuliah='$nama_matakuliah', kdprodi='$kdprodi', sks='$sks', semester='$semester', aktif='$aktif' WHERE kode_matakuliah='$key' ");

	if($edit){
		echo "Data Berhasil Di Edit";
	}else{
		echo "Data Gagal Di Edit";
	}
?>

<tr>
		<td><button><a href="?page=Matakuliah">Kembali</button></a></td>
	</tr>
