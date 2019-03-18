<?php
require_once('koneksi.php');
 $npm = $_POST['npm'];
 $semester = $_POST['semester'];
 $nilai = $_POST['nilai'];
 $flag = $_POST['flag'];
 $nokwitansi = $_POST['nokwitansi'];

 $insert = mysqli_query($koneksi, "INSERT INTO registrasi(npm, semester, nilai, flag, nokwitansi) VALUES ('$npm','$semester', '$nilai', '$flag', '$nokwitansi') ");

 if ($insert)
 {
 	echo '1 data berhasil ditambahkan';
 }else{
 	echo ' data gagal ditambahkan';
 }
 ?>

 <a href="?page=registrasi"><button>Kembali</button></a>
