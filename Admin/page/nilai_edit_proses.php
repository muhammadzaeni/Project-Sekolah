<?php

 require_once("koneksi.php");
 $npm = $_POST['npm'];
 $kode_matakuliah = $_POST['kode_matakuliah'];
 $nama_matakuliah = $_POST['nama_matakuliah'];
 $sks = $_POST['sks'];
 $angka_mutu = $_POST['angka_mutu'];
 $nilai = $_POST['nilai'];
 $semester = $_POST['semester'];


$edit =	mysqli_query($koneksi, "UPDATE nilai SET npm='$npm', kode_matakuliah='$kode_matakuliah', nama_matakuliah='$nama_matakuliah', sks='$sks', angka_mutu='$angka_mutu', nilai='$nilai', semester='$semester' WHERE kode_matakuliah='$kode_matakuliah' ");

	if($edit){
		echo "data berhasil di edit";
	}else{
		echo "data gagal di edit";
	}
?>

<tr>
		<td><button><a href="?page=nilai">Kembali</a></button></td>
	</tr>
