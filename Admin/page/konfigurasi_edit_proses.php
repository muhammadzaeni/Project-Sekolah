<?php

	require_once("koneksi.php");
 $nama_pt = $_POST['nama_pt'];
 $nama_fakultas = $_POST['nama_fakultas'];
 $alamat = $_POST['alamat'];
 $no_tlp = $_POST['no_tlp'];
 $semester = $_POST['semester'];
 $tahun_ajaran = $_POST['tahun_ajaran'];


$edit =	mysqli_query($koneksi, "UPDATE konfigurasi SET nama_pt='$nama_pt', nama_fakultas='$nama_fakultas', alamat='$alamat', no_tlp='$no_tlp', semester='$semester', tahun_ajaran='$tahun_ajaran' WHERE nama_fakultas='$nama_fakultas' ");

	if($edit){
		echo "data berhasil di edit";
	}else{
		echo "data gagal di edit";
	}
?>

<tr>
		<td><button><a href="?page=Konfigurasi">Kembali</a></button></td>
	</tr>