<?php
require_once('koneksi.php');
 $npm = $_POST['npm'];
 $b_sks = $_POST['b_sks'];
 $val_sks = $_POST['val_sks'];
 $dpp = $_POST['dpp'];
 $b_kp = $_POST['b_kp'];
 $b_ta = $_POST['b_ta'];
 $b_uts_uas = $_POST['b_uts_uas'];
 $b_praktikum = $_POST['b_praktikum'];
 $b_lain = $_POST['b_lain'];
 $tunggakan = $_POST['tunggakan'];
 $total = $_POST['total'];
 $semester = $_POST['semester'];
 $thn_ajar = $_POST['thn_ajar'];

 $insert = mysqli_query($koneksi, "INSERT INTO bayar(npm, b_sks, val_sks, dpp, b_kp, b_ta, b_uts_uas, b_praktikum, b_lain, tunggakan, total, semester, thn_ajar) VALUES ('$npm', '$b_sks', '$val_sks', '$dpp', '$b_kp', '$b_ta', '$b_uts_uas', '$b_praktikum', '$b_lain', '$tunggakan', '$total', '$semester', '$thn_ajar') ");

 if ($insert)
 {
 	echo '1 data berhasil ditambahkan';
 }else{
 	echo ' data gagal ditambahkan';
 }
 ?>

 <a href="?page=pembayaran"><button>Kembali</button></a>