<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
require_once('koneksi.php');
 $nama_pt = $_POST['nama_pt'];
 $nama_fakultas = $_POST['nama_fakultas'];
 $alamat = $_POST['alamat'];
 $no_tlp = $_POST['no_tlp'];
 $semester = $_POST['semester'];
 $tahun_ajaran = $_POST['tahun_ajaran'];

 $insert = mysqli_query($koneksi, "INSERT INTO konfigurasi(nama_pt, nama_fakultas, alamat, no_tlp, semester, thn_ajar) VALUES ('$nama_pt','$nama_fakultas', '$alamat','$no_tlp', '$semester', '$tahun_ajaran') ");

 if ($insert)
 {
 	echo '1 Data Berhasil Ditambahkan';
 }else{
 	echo ' Data Gagal Ditambahkan';
 }
 ?>

 <a href="?page=Konfigurasi"><button>Kembali</button></a>