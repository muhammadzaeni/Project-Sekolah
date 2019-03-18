<link rel="stylesheet" type="text/css" href="asset/css/button.css">
<?php
require_once('koneksi.php');
 $kode_matakuliah = $_POST['kode_matakuliah'];
 $nama_matakuliah = $_POST['nama_matakuliah'];
 $kdprodi= $_POST['kdprodi'];
 $sks = $_POST['sks'];
 $semester = $_POST['semester'];
 $aktif = $_POST['aktif'];

 $insert = mysqli_query($koneksi, "INSERT INTO matakuliah (kode_matakuliah, nama_matakuliah, kdprodi, sks, semester, aktif) VALUES ('$kode_matakuliah','$nama_matakuliah', '$kdprodi', '$sks', '$semester', '$aktif') ");
 if ($insert)
 {
 	echo '1 data berhasil ditambahkan';
 }else{
 	echo ' data gagal ditambahkan';
 }
 ?>

 <a href="?page=Matakuliah"><button>Kembali</button></a>
