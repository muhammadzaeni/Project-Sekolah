<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
require_once('koneksi.php');
 $nama = $_POST['nama'];
 $npm = $_POST['npm'];
 $jurusan = $_POST['jurusan'];
 $angkatan = $_POST['angkatan'];

 $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, npm, jurusan, angkatan) VALUES ('$nama','$npm','$jurusan', '$angkatan') ");

 if ($insert)
 {
 	echo '1 data berhasil ditambahkan';
 }else{
 	echo ' data gagal ditambahkan';
 }
 ?>

 <a href="?page=mahasiswa"><button>Kembali</button></a>