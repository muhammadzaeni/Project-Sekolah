<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
require_once('koneksi.php');
$npm = $_POST['npm'];
 $kode_matakuliah = $_POST['kode_matakuliah'];
 $nama_matakuliah = $_POST['nama_matakuliah'];
 $sks = $_POST['sks'];
 $angka_mutu = $_POST['angka_mutu'];
 $nilai = $_POST['nilai'];
 $smester = $_POST['smester'];

 $insert = mysqli_query($koneksi, "INSERT INTO nilai(npm, kode_matakuliah, nama_matakuliah, sks, angka_mutu, nilai, smester) VALUES ('$npm', '$kode_matakuliah','$nama_matakuliah', '$sks', '$angka_mutu', '$nilai', '$smester') ");

 if ($insert)
 {
 	echo '1 Data Berhasil Ditambahkan';
 }else{
 	echo ' Data Gagal Ditambahkan';
 }
 ?>

 <a href="?page=nilai"><button>Kembali</button></a>